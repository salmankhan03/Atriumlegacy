<?php

if (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] !== 'on') {
    header("Location: https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
    exit();
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

$name = htmlspecialchars($_POST['your-name']);
$email = htmlspecialchars($_POST['your-email']);
$phone = htmlspecialchars($_POST['phone']);
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['your-message']);

$mailBody = "

    <b>Subject :-</b> $subject
    <br>
    <b>Name :-</b> $name
    <br>
    <b>Email :-</b> $email
    <br>
    <b>Phone :-</b> $phone
    <br>    
    <b>Message :-</b> $message
    <br>

";

try {

    $mail->isSMTP();                                            
    $mail->Host       = 'mail.intellidt.com';                   
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'developer@intellidt.com';                     
    $mail->Password   = 'developer@123!';                              
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;           
    $mail->Port       = 587;                                   

    $mail->setFrom('developer@intellidt.com', 'Sender');
    $mail->addAddress($email, $name);     

    $mail->isHTML(true);                                 
    $mail->Subject = 'Contact Us Form - Atriumlegacy';
    $mail->Body    = $mailBody;

    $mail->send();

    header("Location: contact_us.php");
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}