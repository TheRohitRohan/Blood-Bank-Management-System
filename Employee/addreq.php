<?php 
include('connect.php');
$xyz = mysqli_query($con,"SELECT * FROM `request`");
while ($x = mysqli_fetch_array($xyz)){
    $id=$x['R_ID'];
}
$newid=$id+1;

if(isset($_POST["Add"]))
{
    $bg = $_POST['btype'];
    $qua = $_POST['quantity'];

    $query_count_blood = "SELECT COUNT(*) AS blood_count FROM `blood` WHERE `Btype` = '$bg'";
    $result_count_blood = mysqli_query($con, $query_count_blood);

    $row_count_blood = mysqli_fetch_assoc($result_count_blood);

    if($row_count_blood['blood_count'] >= $qua && $qua > 0){
        $query="INSERT INTO `request` (`R_ID`, `R_quantity`, `R_name`, `R_cno`, `R_hpname`, `R_btype`, `R_date`) VALUES ('$newid', '$qua', '$_POST[rname]', '$_POST[cno]', '$_POST[hname]', '$bg', '$_POST[date]')";
        $result1=mysqli_query($con,$query);
        if(!$result1){
                echo '<script type="text/javascript"> '; 
                echo '  if (confirm("Addition Unsuccessfull")) {';  
                // echo '    document.location = ".php";';  
                echo '  }';  
                echo'</script>';
        }
        else{
            for ($c=$qua; $c>0; $c--) {
                $qur = "DELETE FROM `blood` WHERE `Btype` = '$bg' LIMIT 1";
                $upresult = mysqli_query($con, $qur);

                if (!$upresult) {
                    echo '<script type="text/javascript">';
                    echo '  if (confirm("Delete Unsuccessfull")) {';
                    echo $c;
                    // echo '    document.location = " .php";';
                    echo '  }';
                    echo '</script>';
                } else {
                    header('Location: viewreq.php');
                }
            }
        }
    } else {
        // If there's not enough blood, show an alert
        echo '<script type="text/javascript">';
        echo '  if (confirm("Quantity Not Available")) {';
        echo '    document.location = "addreq.php";'; // Redirect to your_page.php
        echo '  }';
        echo '</script>';
    }
}
include('start.php');
?>
<head><link rel="stylesheet" href="CSS/form.css"></head>
<div class="formcontainer">
    <div class="container">
    <div class="title">ADD Request</div>
    <form method="post">
        <div class="user__details">
        <div class="input__box">
            <span class="details">Request ID</span>
            <input type="text" name="rid" value=<?php echo $newid?> disabled>
        </div>
        <div class="input__box">
            <span class="details">Requester Name</span>
            <input type="text" name="rname">
        </div>
        <!-- <div class="input__box">
            <span class="details">Blood Group Type</span>
            <input type="text" name="btype" placeholder="Blood-Type" >
        </div> -->
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
            <span class="details">Quantity</span>
            <input type="text" name="quantity">
        </div>
        <div class="input__box">
            <span class="details">Contect Number</span>
            <input type="tel" name="cno" maxlength="10">
        </div>
        <div class="input__box">
            <span class="details">Hospital Name</span>
            <input type="text" name="hname">
        </div>
        <div class="input__box">
            <span class="details">Date</span>
            <input type="date" name="date">
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