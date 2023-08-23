<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require './vendor/autoload.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['Subject'];
    $message = $_POST['message'];

    $mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = 'mail.tsolakidisanatolios.gr';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';

$mail->Username = 'smtp@tsolakidisanatolios.gr';
$mail->Password = '[A231594a.]';

$mail->setFrom('info@tsolakidisanatolios.gr', $name);
$mail->addReplyTo($email, $name);
$mail->addAddress('tsolakdev@gmail.com');
$mail->Subject = $subject;
$mail->Body = $message;

if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}