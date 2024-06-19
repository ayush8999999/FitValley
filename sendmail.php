<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\Main Project\PHPMailer\PHPMailer\src\Exception.php';
require 'C:\xampp\htdocs\Main Project\PHPMailer\PHPMailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\Main Project\PHPMailer\PHPMailer\src\SMTP.php';

$mail = new PHPMailer(true);

$email = 'khopkarayush259@gmail.com';
$password = 'byhtxckbwnncvswo';


try {
    // Configure SMTP settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $email;
    $mail->Password = $password;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 25;

    // Recipient information
    $mail->setFrom($email, 'KV tv');
    $mail->addAddress('vishwakarmakishan9594@gmail.com', 'kishan vishwakarma');
    $mail->addReplyTo($email, 'KV tv');

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'run hua toh acchi baat';
    $mail->Body    = 'ganes ki mkc tin baar';

    $mail->send();
    echo 'Email sent successfully';
} catch (Exception $e) {
    echo 'Failed to send email: ', $mail->ErrorInfo;
}