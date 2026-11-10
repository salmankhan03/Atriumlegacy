<?php
declare(strict_types=1);

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require __DIR__ . '/vendor/autoload.php';
$configFile = __DIR__ . '/config.php';
if (!is_file($configFile)) {
    error_log('config.php is missing; mail form is not configured.');
    http_response_code(503);
    exit('This form is temporarily unavailable.');
}
$config = require $configFile;

// Never expose errors to visitors; log them instead.
error_reporting(E_ALL);
ini_set('display_errors', '0');
ini_set('log_errors', '1');

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    http_response_code(405);
    header('Allow: POST');
    exit('Method not allowed.');
}

function post_string(string $key, int $maxLength): string
{
    $value = $_POST[$key] ?? '';
    if (!is_string($value)) {
        return '';
    }
    return mb_substr(trim($value), 0, $maxLength);
}

function fail(int $status, string $message): never
{
    http_response_code($status);
    echo '<div style="color:red;">' . htmlspecialchars($message, ENT_QUOTES, 'UTF-8') . '</div>';
    exit;
}

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

// ---- Google reCAPTCHA v3 server-side validation ----
$recaptchaToken = post_string('recaptcha_token', 4096);
if ($recaptchaToken === '') {
    fail(400, 'CAPTCHA token is missing. Please go back and try again.');
}

$ch = curl_init('https://www.google.com/recaptcha/api/siteverify');
curl_setopt_array($ch, [
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => http_build_query([
        'secret'   => $config['recaptcha_secret'],
        'response' => $recaptchaToken,
        'remoteip' => $_SERVER['REMOTE_ADDR'] ?? '',
    ]),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => true,
    CURLOPT_SSL_VERIFYHOST => 2,
    CURLOPT_CONNECTTIMEOUT => 5,
    CURLOPT_TIMEOUT        => 10,
]);
$result = curl_exec($ch);
// curl_close() is a no-op since PHP 8.0 and deprecated in 8.5; the handle is freed automatically.

$responseData = is_string($result) ? json_decode($result, true) : null;
if (
    !is_array($responseData)
    || empty($responseData['success'])
    || (float) ($responseData['score'] ?? 0) < 0.5
) {
    fail(400, 'CAPTCHA verification failed. Please go back and try again.');
}

// ---- Input validation ----
$name    = post_string('your-name', 100);
$email   = post_string('your-email', 254);
$phone   = post_string('phone', 20);
$subject = post_string('subject', 150);
$message = post_string('your-message', 5000);

function is_input_safe(string $value): bool
{
    if ($value === '') {
        return false;
    }
    $plain = strtolower(preg_replace('/[^\w\s.,!?\-@\/:]/u', '', strip_tags($value)) ?? '');
    foreach (['youtube', 'unsubscribe', 'facebook', 'https', 'http', '//', '@', 'www', '.com', 'seo'] as $keyword) {
        if (str_contains($plain, $keyword)) {
            return false;
        }
    }
    return true;
}

$valid = is_input_safe($subject)
    && is_input_safe($name)
    && is_input_safe($message)
    && preg_match('/^\d{3}-?\d{3}-?\d{4}$/', $phone) === 1
    && filter_var($email, FILTER_VALIDATE_EMAIL) !== false
    // Reject CR/LF so nothing can inject extra mail headers.
    && !preg_match('/[\r\n]/', $name . $email . $subject);

if (!$valid) {
    fail(422, 'Your submission could not be accepted. Please check your details and try again.');
}

// ---- Send ----
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = $config['smtp_host'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $config['smtp_username'];
    $mail->Password   = $config['smtp_password'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = (int) $config['smtp_port'];
    $mail->CharSet    = PHPMailer::CHARSET_UTF8;

    // Send from our own authenticated address; the visitor's address goes in Reply-To.
    $mail->setFrom($config['mail_from'], 'Atrium Legacy Website');
    $mail->addReplyTo($email, $name);
    $mail->addAddress($config['mail_to']);

    $mail->isHTML(true);
    $mail->Subject = 'Contact Us Form - Atrium Legacy';
    $mail->Body    = '<b>Subject:</b> ' . e($subject) . '<br>'
        . '<b>Name:</b> ' . e($name) . '<br>'
        . '<b>Email:</b> ' . e($email) . '<br>'
        . '<b>Phone:</b> ' . e($phone) . '<br>'
        . '<b>Message:</b> ' . nl2br(e($message)) . '<br>';
    $mail->AltBody = "Subject: $subject\nName: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

    $mail->send();
    echo 'Thank you for contacting us. We will get back to you shortly.';
} catch (Exception $ex) {
    error_log('Contact form mail error: ' . $mail->ErrorInfo);
    http_response_code(500);
    echo 'Message could not be sent. Please try again later.';
}
