<?php
    session_start();
    include('connect.php');
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    
    $query="select * from donor where D_email='$email'";
    $cmd=mysqli_query($con,$query);
    $ans=mysqli_fetch_array($cmd,MYSQLI_ASSOC);
    $_SESSION['email']=$email;
    $_SESSION['pass']=$pass;
    
    if($pass==$ans["D_pass"]){
        $_SESSION['Did']=$ans['D_ID'];
        $_SESSION['name']=$ans["D_name"];
        header("location:/blood bank/Donor/dashbord.php");
    }
    else
    {
        $query="select * from employee where E_email='$email'";
        $cmd=mysqli_query($con,$query);
        $ans=mysqli_fetch_array($cmd,MYSQLI_ASSOC);
        if($pass==$ans["E_pass"])
        {
            if($ans["E_post"]=="Admin")
            {   
                header("location:/blood bank/Admin/dashbord.php");
            }
            else
            {
                $_SESSION['post']=$ans["E_post "];
                $_SESSION['name']=$ans["E_name "];
                header("location:/blood bank/Employee/dashbord.php");
            }
        }
        else
        {
            echo '<script type="text/javascript"> '; 
            echo '  if (confirm("Invalid Username and Password !")) {';  
            echo '    document.location = "login.html";';  
            echo '  }';  
            echo '</script>'; 
        }
    }