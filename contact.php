<?php 
include('SMTPconfig.php');
include('SMTPmail.php');
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $to = "deray2g@yahoo.com";
    $from = "deray2manning@gmail.com";
    $subject = "Enquiry";
    $body = $_POST['teamname'].'</br>'.$_POST['gpocname'].'</br>'.$_POST['adminusers'].'</br>'.$_POST['keycloakusername'].'</br>'.'<hr />'.$_POST['justification'];
    $SMTPMail = new SMTPClient ($SmtpServer, $SmtpPort, $SmtpUser, $SmtpPass, $from, $to, $subject, $body);
    $SMTPChat = $SMTPMail->SendMail();
}
?>