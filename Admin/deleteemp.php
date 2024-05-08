<?php
    include 'connect.php';
    include 'start.php';

    $rid = $_GET['did'];

    $query="delete from employee where E_ID = $rid;";
    $cmd=mysqli_query($con,$query);

    header('Location: viewemp.php');
    include 'end.php'
?>