<?php
         $to = "donald.manning@plus3it.com";
         $subject = "New User Request";
         
         $message = $_POST['Team Name'];
         $message .= $_POST['GPOC Name'];
         $message .= $_POST['Keycloak UserName'];
         $message .= $_POST['Admin Users'];
         
         $header = "From:abc@somedomain.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
?>