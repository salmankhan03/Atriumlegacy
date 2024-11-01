<?php

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

    $mail->send();
    echo "Thank you for contacting us. We will get back to you shortly.";

    // header("Location: contact_us.php");
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>