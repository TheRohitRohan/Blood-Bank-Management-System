<?php
    include 'connect.php';
    $rid = $_GET['rid'];
    $query="delete from request where R_ID = $rid;";
    $cmd=mysqli_query($con,$query);
    header('Location: viewreq.php');
?>