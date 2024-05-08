<?php 
include('connect.php');
session_start();
$mail=$_SESSION['email'];
// $mail="emily@example.com";
$query="select * from employee where E_email = '$mail'";
$stat = mysqli_query($con,$query);
$data = mysqli_fetch_array($stat);
if(isset($_POST["Update"]))
{
    $res="update employee set E_name='$_POST[name]',E_CNO='$_POST[cno]',E_pass='$_POST[pass]',E_Add='$_POST[address]' where E_email = '$mail'";
    $result1 = mysqli_query($con,$res);
    if(!$result1){
            echo '<script type="text/javascript"> '; 
            echo '  if (confirm("update Unsuccessfull")) {';  
            // echo '    document.location = "profile.php";';  
            echo '  }';  
            echo'</script>';
    }
    else{
        echo '<script type="text/javascript"> '; 
        echo '  if (confirm("update successfull")) {';  
        echo '    document.location = "profile.php";';  
        echo '  }';  
        echo'</script>';
    }
}
include('start.php');
?>
<head><link rel="stylesheet" href="CSS/form.css"></head>
<div class="formcontainer">
    <div class="container">
    <div class="title">Profile</div>
    <form method="post">
        <div class="user__details">
        <div class="input__box">
            <span class="details">Employee ID</span>
            <input type="text" name="id" value="<?php echo $data['E_ID'];?>" disabled>
        </div>
        <div class="input__box">
            <span class="details">Name</span>
            <input type="text" name="name" value="<?php echo $data['E_name'];?>">
        </div>
        <div class="input__box">
            <span class="details">Phone Number</span>
            <input type="tel"  name="cno" value="<?php echo $data['E_CNO'];?>" maxlength="10">
        </div>
        <div class="input__box">
            <span class="details">Address</span>
            <input type="text" name="address" value="<?php echo $data['E_Add'];?>">
        </div>
        <div class="input__box">
            <span class="details">Email</span>
            <input type="email"  name="mail" value="<?php echo $data['E_email'];?>" disabled>
        </div>
        <div class="input__box">
            <span class="details">Password</span>
            <input type="text" name="pass" value="<?php echo $data['E_pass'];?>" >
        </div>
        <div class="input__box">
            <span class="details">Salary</span>
            <input type="text" name="sal" value="<?php echo $data['E_sal'];?>" disabled>
        </div>
        <div class="input__box">
            <span class="details">Designation</span>
            <input type="text" name="sal" value="<?php echo $data['E_post'];?>" disabled>
        </div>
        <div class="input__box">
            <span class="details">Blood Group Type</span>
            <input type="text" name="btype"  value="<?php echo $data['E_btype'];?>" disabled>
        </div>
        </div>
        <div class="button">
        <input type="submit" name="Update" value="Update">
        </div>
    </form>
    </div>
</div>

<?php 
include('end.php');
?>