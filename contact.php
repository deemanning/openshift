<?php
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.example.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'user@example.com';                     
    $mail->Password   = 'secret';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('donald.manning@plus3it.com', 'Test User');     
    $mail->addAddress('ellen@example.com');               
    $mail->addReplyTo('info@example.com', 'Information');   

    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = 'New Service Request';
    $mail->Body    = $_POST['teamname'];
    $mail->Body.    = $_POST['gpocname'];
    $mail->Body.    = $_POST['keycloakusername'];
    $mail->Body.    = $_POST['adminusers'];

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}