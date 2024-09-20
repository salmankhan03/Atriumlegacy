<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

$firstName = isset($_POST['first-name']) ? htmlspecialchars($_POST['first-name']) : '';
$lastName = isset($_POST['last-name']) ? htmlspecialchars($_POST['last-name']) : '';
$email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
$address = isset($_POST['address']) ? htmlspecialchars($_POST['address']) : '';
$zip = isset($_POST['zip']) ? htmlspecialchars($_POST['zip']) : '';

$donationAmount = isset($_POST['donation_options']) ? htmlspecialchars($_POST['donation_options']) : '';
$customAmount = isset($_POST['custom_amount']) ? htmlspecialchars($_POST['custom_amount']) : '';
$paymentMethod = isset($_POST['paymentOption']) ? htmlspecialchars($_POST['paymentOption']) : '';
$recurrence = isset($_POST['recurrence']) ? htmlspecialchars($_POST['recurrence']) : '';
$campaign = isset($_POST['campaign']) ? htmlspecialchars($_POST['campaign']) : '';
$message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
$anonymous = isset($_POST['anonymous-donation']) ? 'Yes' : 'No';

if ($customAmount) {
    $donationAmount = $customAmount;
}

$mail = new PHPMailer(true);

if ($email) {
    try {
        $mail->isSMTP(); 
        $mail->Host       = 'mail.intellidt.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'developer@intellidt.com';
        $mail->Password   = 'developer@123!';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
        $mail->Port       = 587;
    
        $mail->setFrom('developer@intellidt.com', 'Sender');
        $mail->addAddress($email, $firstName); 
    
        $mail->isHTML(true);                                     
        $mail->Subject = 'Donation Form Submission';

        $body = "
            <h2>Donation Details</h2>
            <p><strong>Donation Amount:</strong> $donationAmount</p>
            <p><strong>Payment Method:</strong> $paymentMethod</p>
        ";

        if ($paymentMethod !== 'offlinePayment') {
            $body .= "<p><strong>Recurrence:</strong> $recurrence</p>";
        }

        $body .= "
            <p><strong>Campaign:</strong> $campaign</p>
            <p><strong>Message:</strong> $message</p>
            <p><strong>Anonymous Donation:</strong> $anonymous</p>
    
            <h2>Donator Details</h2>
            <p><strong>First Name:</strong> $firstName</p>
            <p><strong>Last Name:</strong> $lastName</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Address:</strong> $address</p>
            <p><strong>Postal/Zip Code:</strong> $zip</p>
        ";

        $mail->Body = $body;

        // Try to send the email
        if ($mail->send()) {
            echo "Message has been sent successfully.";
            header("Location: donate.php");  // Redirect on success
        } else {
            echo "Message could not be sent. Please try again.";
        }

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Email not provided.";
}
?>
