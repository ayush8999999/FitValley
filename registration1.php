<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\Main Project\PHPMailer\PHPMailer\src\Exception.php';
require 'C:\xampp\htdocs\Main Project\PHPMailer\PHPMailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\Main Project\PHPMailer\PHPMailer\src\SMTP.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password_1"];

    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    // $verificationToken = bin2hex(random_bytes(32));

    $connection = mysqli_connect("localhost", "root", "", "test");
    $query = "INSERT INTO user1 (username, email, password) VALUES ( '$username','$email', '$password')";
    mysqli_query($connection, $query);
    mysqli_close($connection);

    // Send verification email
    $mail = new PHPMailer(true);

    $senderEmail = 'khopkarayush259@gmail.com';
    $senderPassword = 'byhtxckbwnncvswo';  // Replace with your Gmail password
    $mainName = 'Fit Valley';
    try {
        // Configure SMTP settings for Gmail
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $senderEmail;
        $mail->Password = $senderPassword;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Set sender and recipient
        $mail->setFrom($senderEmail,$mainName);
        $mail->addAddress($email);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Account Verification';
        $mail->Body = 'Thank you for registering to FitValley lets see,now you can enjoy the features of our sites . Go back to the page and try to login with the registered mail .Facing any issue try to contact us will solve your issue as soon as possible.Thanks yous :)';

        $mail->send();
        echo "Registration successful. Check your email for further instructions.";
        // header("Location: registerationmail.html");
    } catch (Exception $e) {
        echo 'Failed to send email: ', $mail->ErrorInfo;
    }
}

?>