<?php 
include('connect.php');
session_start();
$mail=$_SESSION['email'];
//$mail="rolfesruby@gmail.com";
$query="select * from donor where D_email = '$mail'";
$stat = mysqli_query($con,$query);
$data = mysqli_fetch_array($stat);
if(isset($_POST["Update"]))
{
    $result1 = mysqli_query($con,"update donor set D_name='$_POST[name]',D_cno='$_POST[cno]',D_pass='$_POST[pass]',D_email='$_POST[mail]',D_Add='$_POST[address]' where D_email = '$mail'");
    if(!$result1){
        echo '<script type="text/javascript"> '; 
        echo '  if (confirm("update Unsuccessfull")) {';  
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
            <input type="text" name="id" value="<?php echo $data['D_ID'];?>" disabled>
        </div>
        <div class="input__box">
            <span class="details">Name</span>
            <input type="text" name="name" value="<?php echo $data['D_name'];?>">
        </div>
        <div class="input__box">
            <span class="details">Phone Number</span>
            <input type="tel"  name="cno" value="<?php echo $data['D_cno'];?>" maxlength="10">
        </div>
        <div class="input__box">
            <span class="details">Address</span>
            <input type="text" name="address" value="<?php echo $data['D_add'];?>">
        </div>
        <div class="input__box">
            <span class="details">Email</span>
            <input type="email"  name="mail" value="<?php echo $data['D_email'];?>">
        </div>
        <div class="input__box">
            <span class="details">Password</span>
            <input type="text" name="pass" value="<?php echo $data['D_pass'];?>" >
        </div>
        <div class="input__box">
            <span class="details">Blood Group Type</span>
            <input type="text" name="btype"  value="<?php echo $data['bloodtype'];?>" disabled>
        </div>
        <div class="input__box">
            <span class="details">Birth Date</span>
            <input type="date" name="btype"  value="<?php echo $data['Dbdate'];?>" disabled>
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