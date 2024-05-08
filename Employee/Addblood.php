<?php 
include('connect.php');
$xyz = mysqli_query($con,"SELECT * FROM `blood`");
while ($x = mysqli_fetch_array($xyz)){
    $id=$x['B_ID'];
}
$newid=$id+1;

if(isset($_POST["Add"]))
{
    $query="INSERT INTO `blood` (`B_ID`, `B_date`, `B_Edate`, `D_ID`, `Btype`) VALUES ('$_POST[b_id]', '$_POST[b_date]', '$_POST[e_date]', '$_POST[d_id]', '$_POST[btype]');";
    $result1=mysqli_query($con,$query);
    if(!$result1){
            echo '<script type="text/javascript"> '; 
            echo '  if (confirm("Addition Unsuccessfull")) {';  
            // echo '    document.location = "addbranch.php";';  
            echo '  }';  
            echo'</script>';
        }
        else{
            echo '<script type="text/javascript"> '; 
            echo '  if (confirm("Addition successfull")) {';  
            // echo '    document.location = "addbranch.php";';  
            echo '  }';  
            echo'</script>';
        }
}
include('start.php');
?>
<head><link rel="stylesheet" href="CSS/form.css"></head>
<div class="formcontainer">
    <div class="container">
    <div class="title">ADD Blood Bag</div>
    <form method="post">
        <div class="user__details">
        <div class="input__box">
            <span class="details">Blood Bag ID</span>
            <input type="text" name="b_id" value=<?php echo $newid?>>
        </div>
        <div class="input__box">
            <span class="details">Donor ID</span>
            <input type="text" name="d_id">
        </div>
        <div class="input__box">
            <span class="details">Donation Date</span>
            <input type="date" name="b_date">
        </div>
        <div class="input__box">
            <span class="details">Expiration Date</span>
            <input type="date" name="e_date">
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
            <input type="text" name="btype" placeholder="Blood-Type" >
            <span class="btype">Blood Group Type</span>
                <select name="Status" require>
                    <option value="A+" >A+</option>
                    <option value="A-" >A-</option>
                    <option value="B+" >B+</option>
                    <option value="B-" >B-</option>
                    <option value="O+" >O+</option>
                    <option value="O-" >O-</option>
                    <option value="AB+" >AB+</option>
                    <option value="AB-" >AB-</option>
                </select>
        </div> -->
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