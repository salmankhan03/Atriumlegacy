<?php

// Enable error reporting for debugging (remove in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
$config = require 'config.php';

$mail = new PHPMailer(true);


$name = htmlspecialchars($_POST['your-name']);
$email = htmlspecialchars($_POST['your-email']);
$phone = htmlspecialchars($_POST['phone']);
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['your-message']);

// Google reCAPTCHA v3 server-side validation
$recaptchaSecret = "6LcdmPkrAAAAAH8myh62SD8JsKlyYRoUQxHOsYb4";
$recaptchaResponse = $_POST['recaptcha_token'] ?? '';

if (!empty($recaptchaResponse)) {
    $verifyUrl = "https://www.google.com/recaptcha/api/siteverify";
    $data = [
        'secret' => $recaptchaSecret,
        'response' => $recaptchaResponse
    ];
    
    // Use cURL instead of file_get_contents for better reliability
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $verifyUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
    
    $responseData = json_decode($result, true);
    
    // reCAPTCHA v3 returns a score from 0.0 to 1.0 (1.0 is very likely a good interaction, 0.0 is very likely a bot)
    if (!isset($responseData["success"]) || !$responseData["success"] || (isset($responseData["score"]) && $responseData["score"] < 0.5)) {
        echo "<div style='color:red;'>CAPTCHA verification failed. Please go back and try again.</div>";
        exit;
    }
} else {
    echo "<div style='color:red;'>CAPTCHA token is missing. Please go back and try again.</div>";
    exit;
}


function isInputSafe($string){
    
    if (empty($string)){
        return false;
    }
    
    $originalString = $string;
    
    $string = htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    
    $string = strip_tags($string);
    
    $string = preg_replace('/[^\w\s\.\,\!\?\-]/', '', $string);

    $string = trim(preg_replace('/\s+/', ' ', $string));
    
    $spamKeywords = ["youtube" , "unsubscribe" , "facebook" , "https" , "http" , "//" , "@" , "www" , ".com" , "SEO"];    
    
    $string = strtolower($string); // Convert to lowercase for comparison
    
    foreach ($spamKeywords as $keyword) {
        if (strpos($string, strtolower($keyword)) !== false) {
            return false; // Contains spam
        }
    }
    
    return true;
    
    
}

function isValidEmail($email) {
    
    if (empty($email)){
        return false;
    }

    $sanitized = filter_var(trim($email), FILTER_SANITIZE_EMAIL);
    return filter_var($sanitized, FILTER_VALIDATE_EMAIL) !== false;
}

function isValidPhone($phone) {
    
    if (empty($phone)){
        return false;
    }
    
    $pattern = '/^(\d{3}-?\d{3}-?\d{4})$/';
    return preg_match($pattern, $phone) === 1;
}

$mailBody = "";

if (
    isInputSafe($subject) &&
    isInputSafe($name) &&
    isInputSafe($message) &&
    isInputSafe($phone) &&
    
    isValidPhone($phone) &&
    isValidEmail($email)
) {
    
    $mailBody = "

        <b>Subject: </b> $subject
        <br>
        <b>Name: </b> $name
        <br>
        <b>Email: </b> $email
        <br>
        <b>Phone: </b> $phone
        <br>    
        <b>Message: </b> $message
        <br>
    
    ";
    
}



try {

    $mail->isSMTP();
    // $mail->Host = 'localhost'; // MailHog
    // $mail->Port = 1025; // MailHog port
    $mail->Host       = 'mail.atriumlegacy.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = $config['smtp_username'];
    $mail->Password   = $config['smtp_password'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $mail->setFrom($email, 'Sender');
    $mail->addAddress('inquiry@atriumlegacy.com', $name);

    $mail->isHTML(true);
    $mail->Subject = 'Contact Us Form - Atrium Legacy';
    $mail->Body    = $mailBody;
    // $mail->Body    = 'Test Email from Localhost';
    
    if (!empty($mailBody)){
        
        $mail->send();
    }
    
    echo "Thank you for contacting us. We will get back to you shortly.";

    // header("Location: contact_us.php");
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>