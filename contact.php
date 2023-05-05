<?php

$name = $_POST['teamname'];
$email = $_POST['gpocname'];
$message = $_POST['adminusers'];
$to = 'deray2g@yahoo.com';
$from = 'servicesubmission@myserver.com'

$status = mail($to, $from, $message, $name, $email);

if (isset($_POST['submit'])) 
{

if($status)
{
    echo '<p>Your mail has been sent!</p>';
} else {
    echo '<p>Something went wrong. Please try again!</p>';
}

?>