<?php
session_start();
include "start.php";
include "connect.php";

// $mail = $_SESSION['email'];
$mail = 'jane@example.com';
$query = "SELECT * FROM donor WHERE D_email = '$mail'";
$stat = mysqli_query($con, $query);
$row = mysqli_fetch_array($stat);
$did = $row['D_ID'];
$query = "SELECT * FROM appointment WHERE D_ID = '$did'";
$cmd = mysqli_query($con, $query);
?>

<head>
    <link rel='stylesheet' href="./css/table.css">
</head>

<section class="home-section">
    <div class="container">
        <table class="rwd-table">
            <tbody>
                <tr>
                    <th colspan="10" style="text-align:center;" >Previous Donation</th>
                </tr>
                <tr>
                    <th>Appointment ID</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Status</th>
                </tr>
                <?php while ($row = mysqli_fetch_array($cmd)) : ?>
                    <tr>
                        <td data-th="Appointment ID"><?php echo $row['A_ID']; ?></td>
                        <td data-th="Date"><?php echo $row['A_date']; ?></td>
                        <td data-th="Time"><?php echo $row['A_time']; ?></td>
                        <td data-th="Status"><?php echo $row['A_status']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</section>

<?php include 'end.php'; ?>
