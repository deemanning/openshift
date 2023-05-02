<?php
         $to = "donald.manning@plus3it.com";
         $subject = "New User Request";
         
         $message = $_POST['teamname'];
         $message .= $_POST['gpocname'];
         $message .= $_POST['keycloakusername'];
         $message .= $_POST['adminusers'];
         
         $retval = mail ($to,$subject,$message);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
?>