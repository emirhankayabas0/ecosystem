<?php

require "./vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendEmail($email, $name, $subject, $message)
{

    $mail = new PHPMailer(true); // PHPMailer Initialization - PHPMailer Başlatma

    try {

        $mail->SMTPOptions = array( // SMTP Options - SMPT Seçenekleri
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        //Server settings - Server Ayaraları
        $mail->SMTPDebug  = 0;                             // SMTP Debug
        $mail->isSMTP();                                   // Send using SMTP
        $mail->Host       = setting('smtp_host');          // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                          // Enable SMTP authentication
        $mail->Username   = setting('smtp_email');         // SMTP username
        $mail->Password   = setting('smtp_password');      // SMTP password
        $mail->SMTPSecure = setting('smtp_secure');        // Enable implicit TLS encryption
        $mail->Port       = setting('smtp_port');          // PORT Settings
        $mail->CharSet    = 'UTF-8';                       // CharSet Settings

        //Recipients
        $mail->setFrom(setting('smtp_send_email'), setting('smtp_send_name') . " - MovieJump");
        $mail->addAddress($email, $name);                  // Add a recipient

        //Content
        $mail->isHTML(true);                               // Set email format to HTML
        $mail->Subject = $subject;                         // Email Subject
        $mail->Body    = nl2br($message);                  // Email Content

        $mail->send();                                     // Send Email
        return true;
    } catch (Exception $e) {
        return false;
    }
}