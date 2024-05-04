<?php
 require 'sender.php';
 require_once "controller.session.php";

//  $response = array();
if (isset($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']) {
    $ip = isset($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
}
$mode = isset($_GET['mode']) ? $_GET['mode'] : 'none';
switch ($mode) {

    case 'email':
        $fname = $_POST['fname'];
        $num = $_POST['num'];
        $msgs = $_POST['msg'];
        $email = $_POST['email'];
        $compname = $_POST['compname'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $website = $_POST['website'];
        $fbadd = $_POST['fbadd'];
        $igadd = $_POST['igadd'];
        $msg = $_POST['msg'];

    require 'template/contact.php';
    $mail->Subject = 'Contact Form';
    $mail->AddAddress("didingbeauty@gmail.com");
    $mail->AddAddress("rivera.jerome.dc.1525@gmail.com");
    $mail->FromName = 'No Reply';
    $mail->Body = $htmlMessage;

    if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
        die();
    }
     else {
        $response = array("message"=>"Sent Succesfully");
     }
       $response = array("message"=>"Sent Succesfully");
    break;

    default:
    require 'page/404-page.php';
    break;
 }
 echo json_encode($response);
