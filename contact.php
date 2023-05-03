<?php
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

//Load Composer's autoloader
require '../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer();

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.example.com';           
    $mail->Port       = 25;                                    

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('donald.manning@plus3it.com', 'Test User');              
    $mail->addReplyTo('info@example.com', 'Information');   

    //Content                                  
    $mail->Subject = 'New Service Request';
    $mail->AltBody    = 'This is the HTML message body <b>in bold!</b>';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}