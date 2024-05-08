<?php
    include 'connect.php';
    $id=$_POST['id'];
    $status = $_POST['Status'];

    echo $id;
    echo $status;

    if($status=="done"){
        $query="SELECT * FROM `appointment` WHERE A_ID='$id'";
        $cmd=mysqli_query($con,$query);
        $row=mysqli_fetch_array($cmd);
        $date=$row['A_date'];
        $did=$row['D_ID'];
    
        echo $date;
        echo $did;
    
        $query2="SELECT * FROM `donor` WHERE D_ID='$did'";
        $cmd2=mysqli_query($con,$query2);
        $row2=mysqli_fetch_array($cmd2);
        $type=$row2['bloodtype'];

        echo $type;

        $xyz = mysqli_query($con,"SELECT * FROM `blood`");
        while ($x = mysqli_fetch_array($xyz)){
            $theid=$x['B_ID'];
        }
        $newid=$theid+1;
        echo $newid;
        // $now_date = date('Y-m-d');
        $exp_date = date('Y-m-d', strtotime($date . ' +2 months'));
        
        $add="INSERT INTO `blood` (`B_ID`, `B_date`, `B_Edate`, `D_ID`, `Btype`) VALUES ('$newid', '$date', '$exp_date', '$did', '$type');";
        $addresult=mysqli_query($con,$add);
        if(!$addresult){
            echo '<script type="text/javascript"> '; 
            echo '  if (confirm("Addition Unsuccessfull")) {';  
            echo '    document.location = "appointment.php";';  
            echo '  }';  
            echo'</script>';
        }
        else{
            $qur = "update appointment set A_status='done' where A_ID='$id'";
            $upresult = mysqli_query($con, $qur);

            if (!$upresult) {
                echo '<script type="text/javascript">';
                echo '  if (confirm("update Unsuccessfull")) {';
                echo '    document.location = "appointment.php";';
                echo '  }';
                echo '</script>';
            } else {
                header('Location: appointment.php');
            }
        }
    }
    elseif($status=="aproved"){
        $qur = "update appointment set A_status='aproved' where A_ID='$id'";
        $upresult = mysqli_query($con, $qur);

        if (!$upresult) {
            echo '<script type="text/javascript">';
            echo '  if (confirm("update Unsuccessfull")) {';
            // echo '    document.location = "appointment.php";';
            echo '  }';
            echo '</script>';
        } else {
            header('Location: appointment.php');
        }
    }
    elseif($status=="cancel"){
        $qur = "delete from appointment where A_ID='$id'";
        $upresult = mysqli_query($con, $qur);

        if (!$upresult) {
            echo '<script type="text/javascript">';
            echo '  if (confirm("Delete Unsuccessfull")) {';
            // echo '    document.location = "appointment.php";';
            echo '  }';
            echo '</script>';
        } else {
            header('Location: appointment.php');
        }
    }
?>
