<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'mail/Exception.php';
require 'mail/PHPMailer.php';
require 'mail/SMTP.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->IsHTML(true);
$mail->Username = ("didingbeauty@gmail.com");
$mail->FromName = 'No Reply';
$mail->Password = "hfqsnnwxntcowsnb";
$mail->SetFrom("didingbeauty@gmail.com", "no-reply");

$mail->isHTML(true);