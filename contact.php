<?php
$to = "deray2g@yahoo.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: deray2g@gamil.com";

mail($to,$subject,$txt,$headers);
?>