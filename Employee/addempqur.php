<?php
include 'connect.php';
if(isset($_POST["Add"]))
{
    $query="insert into employee values('$_POST[d_id]', '$_POST[dname]','$_POST[pass]', '$_POST[cno]', '$_POST[address]','$_POST[sal]', '$_POST[btype]', '$_POST[post], '$_POST[mail]');";
    $result1=mysqli_query($con,$query);
    if(!$result1){
            echo '<script type="text/javascript"> '; 
            echo '  if (confirm("Addition Unsuccessfull")) {';  
            // echo '    document.location = "viewemp.php";';  
            echo '  }';  
            echo'</script>';
        }
        else{
            echo '<script type="text/javascript"> '; 
            echo '  if (confirm("Addition successfull")) {';  
            // echo '    document.location = "Addemp.php";';   
            echo '  }';  
            echo'</script>';
        }
}

?>