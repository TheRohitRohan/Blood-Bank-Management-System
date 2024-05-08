
<?php
session_start();
if(isset($_SESSION['email'])) {
    $email=$_SESSION['email'];
}
else{
    header("location:forgotpass.html");
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
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'albertruffin639@gmail.com';                     //SMTP username
    $mail->Password   = 'zdyy dsgg bhsv aiqr';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->setFrom('albertruffin639@gmail.com', 'Albert');
    $mail->addAddress($email, 'Joe User'); 
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'OTP for Changing Password ';
    $mail->Body    = 'OTP-'."$otp";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    $_SESSION['otp']=$otp;
    //$_SESSION['text']="Enter New Password";
    header("location:otp1.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>