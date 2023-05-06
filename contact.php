<?php
$to = "deray2g@yahoo.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: deray2g@gamil.com";

$status = mail($to,$subject,$txt,$headers);

if ($_POST['submit']); {
   if ($status)
   { 
       echo '<p>Your message has been sent!</p>';
   } else { 
       echo '<p>Something went wrong, go back and try again!</p>'; 
   }
}

?>