
<?php
    session_start();

    if(isset($_SESSION['email'])) {
        $email=$_SESSION['email'];
    }
    else{
        header("location:reg.php");
    }
    function otp($length=6)
    {
        $char='0123456789ABCDEFGHJKLMNOPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz';
        $otp='';
        for($i=0;$i<$length;$i++){
            $otp.=$char[mt_rand(0,strlen($char)-1)];
        }
        return $otp;
    }
    $otp=otp(6); 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';

    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
        $mail->isSMTP();                                           
        $mail->Host       = 'smtp.gmail.com';                 
        $mail->SMTPAuth   = true;                           
        $mail->Username   = 'albertruffin639@gmail.com';
        $mail->Password   = 'zdyy dsgg bhsv aiqr';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
        $mail->Port       = 465;
        $mail->setFrom('albertruffin639@gmail.com', 'Blood Bank');
        $mail->addAddress($email, ''); 
        $mail->isHTML(true);
        $mail->Subject = 'OTP for Registration';
        $mail->Body    = 'OTP : '."$otp";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();

        $_SESSION['otp']=$otp;
        header("location:otp.php");
    } 
    catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        echo '<script type="text/javascript"> '; 
        echo '  if (confirm("Can not send otp to this email")) {';  
        echo '    document.location = "reg.php";';  
        echo '  }';  
        echo '</script>';
    }
?>