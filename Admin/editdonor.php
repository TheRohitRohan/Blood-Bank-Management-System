<?php
include('connect.php');
$mail = $_GET['did'];

// if (isset($_POST["cancel"])){
//     header('Location: viewdonor.php');
// }
if (isset($_POST["Update"])) {
    $qur = "update donor set D_name='$_POST[name]',D_cno='$_POST[cno]',D_pass='$_POST[pass]',D_add='$_POST[address]',bloodtype='$_POST[bg]',D_email='$_POST[email]' where D_id = $mail ";
    $result1 = mysqli_query($con, $qur);

    if (!$result1) {
        echo '<script type="text/javascript">';
        echo '  if (confirm("update Unsuccessfull")) {';
        echo '    document.location = "viewdonor.php";';
        echo '  }';
        echo '</script>';
    } else {
        header('Location: viewdonor.php');
        // echo '<script type="text/javascript">';
        // echo '  if (confirm("update successfull")) {';
        // echo '    document.location = "viewdonor.php";';
        // echo '  }';
        // echo '</script>';
    }
}

include('start.php');
?>
<head> <link rel="stylesheet" href="CSS/form.css"> </head>
<div class="formcontainer">
    <div class="container">
        <div class="title">Edit Donor</div>
        <?php
        $query = "select * from donor where D_id = '$mail'";
        $cmd = mysqli_query($con, $query);
        while ($row = mysqli_fetch_array($cmd)) {
            $did = $row['D_ID'];
            $name = $row['D_name'];
            $d_cno = $row['D_cno'];
            $add = $row['D_add'];
            $pass = $row['D_pass'];
            $bg = $row['bloodtype'];
            $Email = $row['D_email'];
        ?>
        <form method="post">
            <div class="user__details">
                <div class="input__box">
                    <span class="details">Donor ID</span>
                    <input type="text" name="id" value="<?php echo $did; ?>" disabled>
                </div>
                <div class="input__box">
                    <span class="details">Name</span>
                    <input type="text" name="name" value="<?php echo $name; ?>">
                </div>
                <div class="input__box">
                    <span class="details">Phone Number</span>
                    <input type="tel" name="cno" value="<?php echo $d_cno; ?>">
                </div>
                <div class="input__box">
                    <span class="details">Address</span>
                    <input type="text" name="address" value="<?php echo $add; ?>">
                </div>
                <div class="input__box">
                    <span class="details">Email</span>
                    <input type="email" name="email" value="<?php echo $Email; ?>">
                </div>
                <div class="input__box">
                    <span class="details">Password</span>
                    <input type="text" name="pass" value="<?php echo $pass; ?>">
                </div>
                <div class="input__box">
                    <span class="details">Blood Group</span>
                    <input type="text" name="bg" value="<?php echo $bg; ?>">
                </div>
            </div>
            <!-- <div class="button">
                <input type="submit" name="cancel" value="Cancel">
            </div> -->
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