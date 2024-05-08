<?php
    session_start();
    include('connect.php');

    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
    $email=$_POST['email'];

    $query="select * from donor where D_email='$email'";
    $cmd=mysqli_query($con,$query);
    $ans=mysqli_num_rows($cmd);
    if($ans>0){
        echo '<script type="text/javascript"> '; 
        echo '  if (confirm("Email is already has been Regestered")) {';  
        echo '    document.location = "reg.php";';  
        echo '  }';  
        echo '</script>';
    }
    else{
        if($pass1==$pass2){
            $_SESSION['pass']=$pass1;
            $_SESSION['email']=$email;
            header("location:send.php");
        }
        else{
            echo '<script type="text/javascript"> '; 
            echo '  if (confirm("Both Password must be same")) {';  
            echo '    document.location = "newpass.php";';  
            echo '  }';  
            echo '</script>';
        }
    }