<?php
include('connect.php');
$Rid = $_GET['rid'];

if (isset($_POST["Update"])) {
    $qur = "update request set R_quantity='{$_POST['qty']}', R_name='{$_POST['name']}', R_cno='{$_POST['cno']}', R_hpname='{$_POST['hname']}', R_btype='{$_POST['bg']}', R_date='{$_POST['date']}' where r_id = $Rid ";
    $result1 = mysqli_query($con, $qur);

    if (!$result1) {
        echo '<script type="text/javascript">';
        echo '  if (confirm("Update unsuccessful")) {';
        echo '    document.location = "viewreq.php";';
        echo '  }';
        echo '</script>';
    } else {
        header('Location: viewdonor.php');
        // echo '<script type="text/javascript">';
        // echo '  if (confirm("Update successful")) {';
        // echo '    document.location = "viewreq.php";';
        // echo '  }';
        // echo '</script>';
    }
}

include('start.php');
?>
<head> <link rel="stylesheet" href="CSS/form.css"> </head>
<div class="formcontainer">
<div class="container">
    <div class="title">Edit Request</div>
    <?php
    $query = "select * from request where r_id = '$Rid'";
    $cmd = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($cmd)) {
        $rid = $row['R_ID'];
        $qty = $row['R_quantity'];
        $name = $row['R_name'];
        $cno = $row['R_cno'];
        $hpname = $row['R_hpname'];
        $bg = $row['R_btype'];
        $date = $row['R_date'];
    ?>
    <form method="post">
        <div class="user__details">
            <div class="input__box">
                <span class="details">Request ID</span>
                <input type="text" name="id" value="<?php echo $rid; ?>" disabled>
            </div>
            <div class="input__box">
                <span class="details">Name</span>
                <input type="text" name="name" value="<?php echo $name; ?>">
            </div>
            <div class="input__box">
                <span class="details">Phone Number</span>
                <input type="tel" name="cno" value="<?php echo $cno; ?>">
            </div>
            <div class="input__box">
                <span class="details">Quantity</span>
                <input type="text" name="qty" value="<?php echo $qty; ?>">
            </div>
            <div class="input__box">
                <span class="details">Hospital</span>
                <input type="text" name="hname" value="<?php echo $hpname; ?>">
            </div>
            <div class="input__box">
                <span class="details">Password</span>
                <input type="text" name="date" value="<?php echo $date; ?>">
            </div>
            <div class="input__box">
                <span class="details">Blood Group</span>
                <input type="text" name="bg" value="<?php echo $bg; ?>">
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