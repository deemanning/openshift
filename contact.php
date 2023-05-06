<?php

$message = $_POST['teamname'];
$message.= $_POST['gpocname'];
$message.= $_POST['keycloakusername'];
$message.= $_POST['adminusers'];
$message.= $_POST['justification'];
$to = 'deray2g@yahoo.com';
$from = 'servicesubmission@myserver.com';
$subject = 'Customer Inquiry';
$body = "From:" .$from."\r\n E-Mail:" .$subject."\r\n Message:\r\n" .$message;

$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: ". $from. "\r\n";
$headers .= "Reply-To: ". $from. "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();
$headers .= "X-Priority: 1" . "\r\n";

$status= mail('deray2g@yahoo.com', $subject, $body, $from, $headers);

if "$_POST['submit']"; {
   if ($status)
   { 
       echo '<p>Your message has been sent!</p>';
   } else { 
       echo '<p>Something went wrong, go back and try again!</p>'; 
   }
}

?>