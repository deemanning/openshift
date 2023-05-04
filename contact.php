<?php

$to = "deray2g@yahoo.com";

$subject = Hola;

$message = This is a test email.;

$retval = mail($to, $subject, $message);

if( $retval == true ) {
    echo "Message sent successfully...";
 }else {
    echo "Message could not be sent...";
 }

?>