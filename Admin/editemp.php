<?php 
include('connect.php');
$eid = $_GET['did'];

if(isset($_POST["Update"]))
{
    $qur = "update employee set E_name='$_POST[dname]', E_pass='$_POST[pass]', E_CNO='$_POST[cno]',E_Add= '$_POST[address]',E_sal= '$_POST[sal]', E_btype='$_POST[btype]',E_post= '$_POST[post]', E_email='$_POST[mail]' where E_ID = $eid ";
    $result1 = mysqli_query($con,$qur);
    if(!$result1){
            echo '<script type="text/javascript"> '; 
            echo '  if (confirm("update Unsuccessfull")) {';  
            // echo '    document.location = "viewemp.php";';  
            echo '  }';  
            echo'</script>';

        }
        else{
            header("Location: viewemp.php");
            // echo '<script type="text/javascript"> '; 
            // echo '  if (confirm("update successfull")) {';  
            // echo '    document.location = "viewemp.php";';  
            // echo '  }';  
            // echo'</script>';
        }
}

include('start.php');

?>
<head><link rel="stylesheet" href="CSS/form.css"></head>
<div class="formcontainer">
    <div class="container">
    <div class="title">Edit Employee</div>
    <?php 
    $query="select * from employee where E_ID = '$eid'";
    $cmd = mysqli_query($con,$query);
            while($row=mysqli_fetch_array($cmd))
            {
                $did=$row['E_ID'];
                $name=$row['E_name'];
                $d_pass=$row['E_pass'];
                $d_cno=$row['E_CNO'];
                $add=$row['E_Add'];
                $sal=$row['E_sal'];
                $BG=$row['E_btype'];
                $post=$row['E_post'];
                $Email=$row['E_email'];
        ?>
    <form method="post" >
        
        <div class="user__details">
        <div class="input__box">
            <span class="details">Employee ID</span>
            <input type="text" name="d_id" value=<?php echo $did?> disabled>
        </div>
        <div class="input__box">
            <span class="details">Employee Name</span>
            <input type="text" name="dname" value=<?php echo $name?> >
        </div>
        <div class="input__box">
            <span class="details">Phone Number</span>
            <input type="tel"  name="cno" value=<?php echo $d_cno?> maxlength="10" >
        </div>
        <div class="input__box">
            <span class="details">Employee Address</span>
            <input type="text" name="address" value=<?php echo $add?> >
        </div>
        <div class="input__box">
            <span class="details">Salary</span>
            <input type="number" name="sal" value=<?php echo $sal?> >
        </div>
        <div class="input__box">
            <span class="details">Blood Group Type</span>
            <input type="text" name="btype" placeholder="Blood-Type" value=<?php echo $BG?> >
        </div>
        <div class="input__box">
            <span class="details">Email</span>
            <input type="email" placeholder="johnsmith@hotmail.com" name="mail" value=<?php echo $Email?> >
        </div>
        <div class="input__box">
            <span class="details">Password</span>
            <input type="password" name="pass" placeholder="********" value=<?php echo $d_pass?> >
        </div>
        <div class="input__box">
            <span class="details">Post</span>
            <input type="text" name="post" placeholder="Employee Post" value=<?php echo $post?> >
        </div>
        </div>
        <div class="button">
        <input type="submit" name="Update" value="Update">
        </div>
    </form>
    </div>
</div>

<?php 
}
include('end.php');
?>