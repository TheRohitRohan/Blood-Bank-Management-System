<?php 
include('connect.php');
$xyz = mysqli_query($con,"SELECT * FROM `donor`");
while ($x = mysqli_fetch_array($xyz)){
    $id=$x['D_ID'];
}
$newid=$id+1;

if(isset($_POST["Add"]))
{
    $query="INSERT INTO `donor` (`D_ID`, `D_name`, `D_cno`, `D_pass`, `D_add`, `bloodtype`, `D_email`, `Dbdate`) VALUES ('$_POST[d_id]', '$_POST[dname]', '$_POST[cno]', '$_POST[pass]', '$_POST[address]', '$_POST[btype]', '$_POST[mail]', '$_POST[b_date]')";
    $result1=mysqli_query($con,$query);
    if(!$result1){
            echo '<script type="text/javascript"> '; 
            echo '  if (confirm("Addition Unsuccessfull")) {';  
            echo '    document.location = "viewdonor.php";';  
            echo '  }';  
            echo'</script>';
        }
        else{
            echo '<script type="text/javascript"> '; 
            echo '  if (confirm("Addition successfull")) {';  
            echo '    document.location = "Adddonor.php";';   
            echo '  }';  
            echo'</script>';
        }
}
include('start.php');
?>
<head><link rel="stylesheet" href="CSS/form.css"></head>
<div class="formcontainer">
    <div class="container">
    <div class="title">ADD New Donor</div>
    <form method="post">
        <div class="user__details">
        <div class="input__box">
            <span class="details">Donor ID</span>
            <input type="text" name="d_id" value=<?php echo $newid?> >
        </div>
        <div class="input__box">
            <span class="details">Donor Name</span>
            <input type="text" name="dname" required>
        </div>
        <div class="input__box">
            <span class="details">Phone Number</span>
            <input type="tel"  name="cno" maxlength="10"required>
        </div>
        <div class="input__box">
            <span class="details">Donor Address</span>
            <input type="text" name="address" required>
        </div>
        <div class="input__box">
            <span class="details">BirthDate</span>
            <input type="date" name="b_date" required>
        </div>
        <div class="input__box">
            <span class="details">Blood Group Type</span>
            <select class="select__box" name="btype" required>
                <option value="" disabled selected>Select Your BloodType</option>
                <option value="A+" >A+</option>
                <option value="A-" >A-</option>
                <option value="B+" >B+</option>
                <option value="B-" >B-</option>
                <option value="O+" >O+</option>
                <option value="O-" >O-</option>
                <option value="AB+" >AB+</option>
                <option value="AB-" >AB-</option>
            </select>
        </div>
        <div class="input__box">
            <span class="details">Email</span>
            <input type="email" placeholder="johnsmith@hotmail.com" name="mail" required>
        </div>
        <div class="input__box">
            <span class="details">Password</span>
            <input type="password" name="pass" placeholder="********" required>
        </div>
        </div>
        <div class="button">
        <input type="submit" name="Add" value="ADD">
        </div>
    </form>
    </div>
</div>

<?php 
include('end.php');
?>