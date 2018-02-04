<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "../vendor/autoload.php";

function checkValue($d, $k)
{
    return isset($d->{$k}) and strlen($d->{$k}) != 0;
}

if($_SERVER['REQUEST_METHOD'] != "POST") {
    http_response_code(405);
    die;
}

if($_GET['action'] == "mail"){
    $data_back = json_decode(file_get_contents('php://input'));

    if (!is_object($data_back))
    {
        http_response_code(400);
        die;
    }

    if (!checkValue($data_back, "email") || !checkValue($data_back, "name") || !checkValue($data_back, "lastname") || !checkValue($data_back, "message"))
    {
        http_response_code(400);
        die;
    }

    $mail = new PHPMailer(true);
    try {
        //$mail->isSMTP();
        $mail->CharSet = 'utf-8';
        $mail->addReplyTo($data_back->{"email"});
        $mail->setFrom($data_back->{"email"});
        $mail->addAddress('elidescarlata@gmail.com', 'Elide Scarlata');
        $mail->Subject = "Email from elidescarlata.com";
        $mail->Body = $data_back->{"message"};

        $mail->send();
    } catch(Exception $e) {
        http_response_code(500);
        die;
    }
}
else{
    http_response_code(400);
    die;
}

