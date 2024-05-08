<?php
    session_start();
    $otpx=$_POST['otp'];
    $_SESSION['text']="not";
    
    if($otpx==$_SESSION['otp'])
    {
        header("location:newpass.php");
    }
    else
    {
        echo '<script type="text/javascript"> '; 
        echo '  if (confirm("Incorrect otp")) {';  
        echo '    document.location = "otp1.php";';  
        echo '  }';  
        echo '</script>';
    }
?>