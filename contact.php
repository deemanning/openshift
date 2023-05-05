<?php

$to = 'deray2g@yahoo.com';

$from = 'servicesubmission@myserver.com'

$subject = 'Hola';

$message = 'This is a test email.';

$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: ". $from. "\r\n";
$headers .= "Reply-To: ". $from. "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();
$headers .= "X-Priority: 1" . "\r\n";

$status = mail('deray2g@yahoo.com', $subject, $message, $headers);

if($status)
{
    echo '<p>Your mail has been sent!</p>';
} else {
    echo '<p>Something went wrong. Please try again!</p>';
}

?>