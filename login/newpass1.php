<?php
    session_start();
    include('connect.php');
    $user=$_SESSION['email'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
    if($pass1==$pass2)
    {
        if($_SESSION['table']=="donor")
        {
            $query="UPDATE donor SET D_pass = '$pass1' WHERE D_email='$user'";
            $cmd=mysqli_query($con,$query);
            if($cmd)
            {
                header("location:login.html");
            }
            else
            {
                echo '<script type="text/javascript"> '; 
                echo '  if (confirm("Update error donor")) {';  
                //echo '    document.location = "login.html";';  
                echo '  }';  
                echo '</script>';
            }
        }
        else
        {
            $query="UPDATE employee SET E_pass = '$pass1' WHERE E_email='$user'";
            $cmd=mysqli_query($con,$query);
            if($cmd)
            {
                header("location:login.html");
            }
            else
            {
                echo '<script type="text/javascript"> '; 
                echo '  if (confirm("Update error employee")) {';  
                //echo '    document.location = "login.html";';  
                echo '  }';  
                echo '</script>';
            }
        }
    }
    else
    {
        echo '<script type="text/javascript"> '; 
        echo '  if (confirm("Both Password must be same")) {';  
        echo '    document.location = "newpass.php";';  
        echo '  }';  
        echo '</script>';  
    }
?>