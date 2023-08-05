<?php
//include PHPmailer and SMTP package
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['send'])) {
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = 'smtp';

    //configuring and establishing SMTP connection
    $mail->SMTPDebug = 1;
    $mail->SMTPAuth = True;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->Host = 'smtp.gmail.com';
    $mail->Username = 'nischalshakya55@gmail.com';
    $mail->Password = 'bcjatbmmwexsruis';

    //Setting email details
    $mail->IsHTML(true);
    $mail->AddAddress($_POST['receiver'], 'Receiver User');
    $mail->SetFrom('nischalshakya55@gmail.com', 'Sender');
    $mail->Subject = $_POST['subject'];
    $mail->AddReplyTo('no-reply@gmail.com', 'No Reply');
    $mail->AddCC('no-reply@gmail.com', 'No Reply');
    $content = $_POST['message'];

    //mail sending
    $mail->MsgHTML($content);
    if (!$mail->send()) {
        echo "Email Sending Fail";
        var_dump($mail);
    } else {
        echo "Email sent Successfully";
    }
}
