<?php

$to = "deray2g@yahoo.com";

$subject = "Hola";

$message = "This is a test email.";

$retval = mail($to, $subject, $message);

if( $retval == true ) {
    echo "Message sent successfully...";
 }else {
    echo "Message could not be sent...";
    error_reporting(-1);
    ini_set('display_errors', 'On');
    set_error_handler("var_dump");
 }

?>