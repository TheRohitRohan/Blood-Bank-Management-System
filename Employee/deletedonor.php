<?php
    include 'connect.php';
    $did = $_GET['did'];
    $query="delete from donor where d_id = $did;";
    $cmd=mysqli_query($con,$query);
    header('Location: viewdonor.php');
?>
