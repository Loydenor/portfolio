﻿<?php
echo 1;
error_reporting(E_ALL);
ini_set("display_errors", 1);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/phpmailer/src/SMTP.php';

try {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host        = 'smtp.gmail.com';
    $mail->SMTPAuth    = true;
    $mail->SMTPSecure  = 'tls';
    $mail->Debugoutput = 'html';
    $mail->SMTPDebug   = 2;
    $mail->Port        = 587;
    $mail->Username    = 'glebv9461@gmail.com';
    $mail->Password    = 'xsnceyycjvewbjjb';

    $mail->setFrom($_POST['email']);
    $mail->addAddress('Playmaster712@mail.ru');
    $mail->Subject = '. Пользователь: ' . $_POST['name'];
    $mail->Body = $_POST['message'] . "\nEmail пользователя: " . $_POST['email'] . "\nДанное сообщение было отправленно с https://vinogradovglob.herokuapp.com";

    $mail->send();
    header("Location: ./index.php");
} catch (Throwable $tr) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
echo 2;