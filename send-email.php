<?php

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPmailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMPTAuth = true;

$mail->Host = "smtp.example.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "you@example.com";
$mail->Password = "password";

$mail->setFrom($email,$name);
$mail->addAddress("taufiknba@example.com", "Taufik");

$mail->Subject = "Email from Website";
$mail->Body = $message;

$mail->Send();

echo "Email Send";


