<?php

$name = $_POST['teamname'];
$email = $_POST['gpocname'];
$message = $_POST['adminusers'];
$to = 'deray2g@yahoo.com';
$from = 'servicesubmission@myserver.com'
$subject = 'Customer Inquiry';
$body = "From:" .$name."\r\n E-Mail:" .$email."\r\n Message:\r\n" .$message;

$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: ". $from. "\r\n";
$headers .= "Reply-To: ". $from. "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();
$headers .= "X-Priority: 1" . "\r\n";

$status = mail($to, $from, $subject, $message, $headers);

if (isset($_POST['submit'])) 
{

if($status)
{
    echo '<p>Your mail has been sent!</p>';
} else {
    echo '<p>Something went wrong. Please try again!</p>';
}

?>