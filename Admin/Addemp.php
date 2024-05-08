<?php 
include('connect.php');
$xyz = mysqli_query($con,"SELECT * FROM employee");
while ($x = mysqli_fetch_array($xyz)){
    $id=$x['E_ID'];
}
$newid=$id+1;

if(isset($_POST["Add"]))
{
    $query="INSERT INTO `employee` (`E_ID`, `E_name`, `E_pass`, `E_CNO`, `E_Add`, `E_sal`, `E_btype`, `E_post`, `E_email`) VALUES('$newid', '$_POST[ename]', '$_POST[pass]', '$_POST[cno]', '$_POST[address]', '$_POST[sal]', '$_POST[btype]', '$_POST[post]', '$_POST[mail]')";
    $result1=mysqli_query($con,$query);
    if(!$result1){
            echo '<script type="text/javascript"> '; 
            echo '  if (confirm("Addition Unsuccessfull")) {';  
            // echo '    document.location = "viewemp.php";';  
            echo '  }';  
            echo'</script>';
        }
        else{
            header("Location: viewemp.php");
            echo '<script type="text/javascript"> '; 
            echo '  if (confirm("Addition successfull")) {';   
            echo '  }';  
            echo'</script>';
        }
}
include('start.php');
?>
<head><link rel="stylesheet" href="CSS/form.css"></head>
<div class="formcontainer">
    <div class="container">
    <div class="title">ADD New Employee</div>
    <form method="post" >
        <div class="user__details">
        <div class="input__box">
            <span class="details">Employee ID</span>
            <input type="text" name="d_id" value=<?php echo $newid?> disabled >
        </div>
        <div class="input__box">
            <span class="details">Employee Name</span>
            <input type="text" name="ename" required>
        </div>
        <div class="input__box">
            <span class="details">Phone Number</span>
            <input type="tel"  name="cno" maxlength="10" required>
        </div>
        <div class="input__box">
            <span class="details">Employee Address</span>
            <input type="text" name="address" required>
        </div>
        <div class="input__box">
            <span class="details">Salary</span>
            <input type="text" name="sal" required>
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
        <!-- <div class="input__box">
            <span class="details">Blood Group Type</span>
            <input type="text" name="btype" placeholder="Blood-Type" required>
        </div> -->
        <div class="input__box">
            <span class="details">Email</span>
            <input type="email" placeholder="johnsmith@hotmail.com" name="mail" required>
        </div>
        <div class="input__box">
            <span class="details">Password</span>
            <input type="password" name="pass" placeholder="********" required>
        </div>
        <div class="input__box">
            <span class="details">Post</span>
            <input type="text" name="post" placeholder="Employee Post" required>
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