<?php
if (isset($_POST[donald.manning@plus3it.com]) && !empty($_POST[donald.manning@plus3it.com])) {
  $subject = "New User request: $_POST[New User request]";
  $message = $_POST[The following request is required for the following user.];
  $headers = From: info@website.com . "\r\n" .
             'Reply-To: ' . $_POST[donald.manning@plus3it.com]. "\r\n" .
             'X-Mailer: PHP/' . phpversion();

  mail(info@example.com, $subject, $message, $headers);

  die(Thank you for your email);
}