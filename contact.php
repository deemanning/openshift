function send_mail($email='deray2manning@gmail.com', $recipient_name='deray2g@yahoo.com', $message='Testing')
{
    require("phpmailer/class.phpmailer.php");

    $mail = new PHPMailer();

    $mail->CharSet = "utf-8";
    $mail->IsSMTP();                                      // Set mailer to use SMTP
    $mail->Host = "localhost";  // Specify main and backup server
    $mail->SMTPAuth = true;     // Turn on SMTP authentication
    $mail->Username = "deray2manning";  // SMTP username
    $mail->Password = "Googs12345"; // SMTP password

    $mail->From = "deray2manning@gmail.com";
    $mail->FromName = "System-Ad";
    $mail->AddAddress($email, $recipient_name);

    $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
    $mail->IsHTML(true);                                  // Set email format to HTML (true) or plain text (false)

    $mail->Subject = "This is a Sampleenter code here Email";
    $mail->Body    = $message;
    $mail->AltBody = "This is the body in plain text for non-HTML mail clients";

    if(!$mail->Send())
    {
       echo "Message could not be sent. <p>";
       echo "Mailer Error: " . $mail->ErrorInfo;
       exit;
    }

    echo "Message has been sent";
}