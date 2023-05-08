<?php 
include('SMTPconfig.php');
include('SMTPmail.php');
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $to = "deray2g@yahoo.com";
    $from = $_POST['email'];
    $subject = "Enquiry";
    $body = $_POST['name'].'</br>'.$_POST['companyName'].'</br>'.$_POST['tel'].'</br>'.'<hr />'.$_POST['message'];
    $SMTPMail = new SMTPClient ($SmtpServer, $SmtpPort, $SmtpUser, $SmtpPass, $from, $to, $subject, $body);
    $SMTPChat = $SMTPMail->SendMail();
}
?>