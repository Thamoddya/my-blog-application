<?php

require "./include/Exception.php";
require "./include/OAuth.php";
require "./include/PHPMailer.php";
require "./include/POP3.php";
require "./include/SMTP.php";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$errors = array();
if (empty($name)) {
    $errors[] = 'Name is required';
}
if (empty($email)) {
    $errors[] = 'Email is required';
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Email is invalid';
}
if (empty($message)) {
    $errors[] = 'Message is required';
}

if (!empty($errors)) {
    echo "Error: " . $errors;
    exit;
}

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'thamoddya.smtp@gmail.com';
    $mail->Password = 'vfpornoftoayuwgf';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom($email, $name);
    $mail->addAddress('thamoddyarashmithadissanayake@gmail.com', 'Blog.Thamoddyarashmitha');
    $mail->isHTML(true);
    $mail->Subject = 'New message from contact form';
    $mail->Body = $message;

    $mail->send();
    echo 'success' ;

} catch (Exception $e) {
    echo 'Error sending email: ' . $mail->ErrorInfo ;
  
}
?>