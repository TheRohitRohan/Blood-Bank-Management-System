<?php
include "connect.php"; 
$Ap="select * from blood where Btype = 'A+';";
$An="select * from blood where Btype = 'A-';";
$Bp="select * from blood where Btype = 'B+';";
$Bn="select * from blood where Btype = 'B-';";
$ABp="select * from blood where Btype = 'AB+';";
$ABn="select * from blood where Btype = 'AB-';";
$Op="select * from blood where Btype = 'O+';";
$On="select * from blood where Btype = 'O-';";
$qurd="select * from donor;";
$qurr="select * from Request;";
$qura="select * from appointment where A_status = 'panding';";
$qure="select * from employee;";
include 'start.php';
?>

<head>
  <link rel="stylesheet" href="CSS/dashbord.css" />
</head>
<div class="Blood-Inv">
  <?php
    $cmd=mysqli_query($con,$Ap);
    $rowcount = mysqli_num_rows($cmd);
?>
  <div class="container1">
    <div class="Blood-Group-A">
      <div class="positive">
        <div class="head">A+</div>
        <div class="count">
          <h2><?php echo $rowcount;?></h2>
        </div>
      </div>
    </div>
    <div class="Blood-Group-A">
      <?php
          $cmd=mysqli_query($con,$An);
          $rowcount = mysqli_num_rows($cmd);
        ?>
      <div class="positive">
        <div class="head">A-</div>
        <div class="count">
          <h2><?php echo $rowcount;?></h2>
        </div>
      </div>
    </div>
    <?php
        $cmd=mysqli_query($con,$Bp);
        $rowcount = mysqli_num_rows($cmd);
      ?>
    <div class="Blood-Group-A">
      <div class="positive">
        <div class="head">B+</div>
        <div class="count">
          <h2><?php echo $rowcount;?></h2>
        </div>
      </div>
    </div>
    <div class="Blood-Group-A">
      <?php
          $cmd=mysqli_query($con,$Bn);
          $rowcount = mysqli_num_rows($cmd);
        ?>
      <div class="positive">
        <div class="head">B-</div>
        <div class="count">
          <h2><?php echo $rowcount;?></h2>
        </div>
      </div>
    </div>
  </div>
  <?php
      $cmd=mysqli_query($con,$ABp);
      $rowcount = mysqli_num_rows($cmd);
    ?>
  <div class="container1">
    <div class="Blood-Group-A">
      <div class="positive">
        <div class="head">AB+</div>
        <div class="count">
          <h2><?php echo $rowcount;?></h2>
        </div>
      </div>
    </div>
    <div class="Blood-Group-A">
      <?php
          $cmd=mysqli_query($con,$ABn);
          $rowcount = mysqli_num_rows($cmd);
        ?>
      <div class="positive">
        <div class="head">AB-</div>
        <div class="count">
          <h2><?php echo $rowcount;?></h2>
        </div>
      </div>
    </div>

    <?php
        $cmd=mysqli_query($con,$Op);
        $rowcount = mysqli_num_rows($cmd);
      ?>
    <div class="Blood-Group-A">
      <div class="positive">
        <div class="head">O+</div>
        <div class="count">
          <h2><?php echo $rowcount;?></h2>
        </div>
      </div>
    </div>
    <div class="Blood-Group-A">
      <?php
          $cmd=mysqli_query($con,$On);
          $rowcount = mysqli_num_rows($cmd);
        ?>
      <div class="positive">
        <div class="head">O-</div>
        <div class="count">
          <h2><?php echo $rowcount;?></h2>
        </div>
      </div>
    </div>
  </div>



  <?php
      $cmd=mysqli_query($con,$qurd);
      $rowcount = mysqli_num_rows($cmd);
  ?>
  <div class="container1">
    <div class="Blood-Group-A">
      <div class="positive">
        <div class="head">Donors</div>
        <div class="count">
          <h2><?php echo $rowcount;?></h2>
        </div>
      </div>
    </div>
    <div class="Blood-Group-A">
      <?php
          $cmd=mysqli_query($con,$qurr);
          $rowcount = mysqli_num_rows($cmd);
        ?>
      <div class="positive">
        <div class="head">Requests</div>
        <div class="count">
          <h2><?php echo $rowcount;?></h2>
        </div>
      </div>
    </div>
    <?php
        $cmd=mysqli_query($con,$qura);
        $rowcount = mysqli_num_rows($cmd);
      ?>
    <div class="Blood-Group-A">
      <div class="positive">
        <div class="head">Appointments</div>
        <div class="count">
          <h2><?php echo $rowcount;?></h2>
        </div>
      </div>
    </div>
    <div class="Blood-Group-A">
      <?php
          $cmd=mysqli_query($con,$qure);
          $rowcount = mysqli_num_rows($cmd);
        ?>
      <div class="positive">
        <div class="head">Employees</div>
        <div class="count">
          <h2><?php echo $rowcount;?></h2>
        </div>
      </div>
    </div>
  </div>
  
<?php 
  include 'end.php';
?>
