<?php
    session_start();
    $otp1=$_POST['otp'];
    $otp2=$_SESSION['otp'];
    
    if($otp1==$otp2)
    {
        header("location:reg2.php");
    }
    else
    {
        echo '<script type="text/javascript"> '; 
        echo '  if (confirm("Incorrect OTP")) {';  
        echo '    document.location = "otp1.html";';  
        echo '  }';  
        echo '</script>';
    }