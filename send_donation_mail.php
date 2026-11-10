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

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

$firstName     = post_string('first-name', 100);
$lastName      = post_string('last-name', 100);
$email         = post_string('email', 254);
$address       = post_string('address', 255);
$zip           = post_string('zip', 20);
$donationAmt   = post_string('donation_options', 10);
$customAmount  = post_string('custom_amount', 10);
$paymentMethod = post_string('paymentOption', 30);
$recurrence    = post_string('recurrence', 50);
$campaign      = post_string('campaign', 100);
$message       = post_string('message', 2000);
$anonymous     = isset($_POST['anonymous-donation']) ? 'Yes' : 'No';

if ($customAmount !== '') {
    $donationAmt = $customAmount;
}

// Strict validation: reject anything that is not a plausible value.
if (
    filter_var($email, FILTER_VALIDATE_EMAIL) === false
    || preg_match('/[\r\n]/', $firstName . $lastName . $email)
) {
    http_response_code(422);
    exit('A valid email address is required.');
}
if (preg_match('/^\d{1,7}(\.\d{1,2})?$/', $donationAmt) !== 1 || (float) $donationAmt <= 0) {
    http_response_code(422);
    exit('A valid donation amount is required.');
}
if (!in_array($paymentMethod, ['onlinePayment', 'offlinePayment'], true)) {
    http_response_code(422);
    exit('Invalid payment method.');
}

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

    // Notify the organisation (never an arbitrary user-supplied address, which would
    // make this endpoint an open mail relay); the donor's address goes in Reply-To.
    $mail->setFrom($config['mail_from'], 'Atrium Legacy Website');
    $mail->addReplyTo($email, trim("$firstName $lastName"));
    $mail->addAddress($config['mail_to']);

    $mail->isHTML(true);
    $mail->Subject = 'Donation Form Submission';

    $body = '<h2>Donation Details</h2>'
        . '<p><strong>Donation Amount:</strong> ' . e($donationAmt) . '</p>'
        . '<p><strong>Payment Method:</strong> ' . e($paymentMethod) . '</p>';

    if ($paymentMethod !== 'offlinePayment') {
        $body .= '<p><strong>Recurrence:</strong> ' . e($recurrence) . '</p>';
    }

    $body .= '<p><strong>Campaign:</strong> ' . e($campaign) . '</p>'
        . '<p><strong>Message:</strong> ' . nl2br(e($message)) . '</p>'
        . '<p><strong>Anonymous Donation:</strong> ' . $anonymous . '</p>'
        . '<h2>Donator Details</h2>'
        . '<p><strong>First Name:</strong> ' . e($firstName) . '</p>'
        . '<p><strong>Last Name:</strong> ' . e($lastName) . '</p>'
        . '<p><strong>Email:</strong> ' . e($email) . '</p>'
        . '<p><strong>Address:</strong> ' . e($address) . '</p>'
        . '<p><strong>Postal/Zip Code:</strong> ' . e($zip) . '</p>';

    $mail->Body = $body;
    $mail->AltBody = strip_tags(str_replace(['</p>', '<br>'], "\n", $body));

    $mail->send();

    // Redirect before any output is sent (the old code echoed first, so header() failed).
    header('Location: donate.php', true, 303);
    exit;
} catch (Exception $ex) {
    error_log('Donation form mail error: ' . $mail->ErrorInfo);
    http_response_code(500);
    echo 'Message could not be sent. Please try again later.';
}
