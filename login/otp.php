<?php
    session_start();
    include('connect.php');
    $mail=$_POST['email'];
    $_SESSION['email']=$mail;
    $query="select * from donor where D_email='$mail'";
    $cmd=mysqli_query($con,$query);
    $ans=mysqli_fetch_array($cmd,MYSQLI_ASSOC);
    
    if(isset($ans)==1)
    {
        $_SESSION['table']="donor";
    }
    else
    {
        $query1="select * from employee where E_email='$mail'";
        $cmd1=mysqli_query($con,$query1);
        $ans1=mysqli_fetch_array($cmd1,MYSQLI_ASSOC);
        
        if($cmd1)
        {
            $_SESSION['table']="employee";
        }
        else
        {
            echo '<script type="text/javascript"> '; 
            echo '  if (confirm("Email is not Registered")) {';  
            echo '    document.location = "forgotpass.html";';  
            echo '  }';  
            echo '</script>';
        }
    }
    //$_SESSION['text']="Enter New Password";
    header("location:send.php");
?>