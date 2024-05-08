<?php
include "connect.php";
include 'start.php'; 
$Ap="select * from blood where Btype = 'A+';";
$An="select * from blood where Btype = 'A-';";
$Bp="select * from blood where Btype = 'B+';";
$Bn="select * from blood where Btype = 'B-';";
$ABp="select * from blood where Btype = 'AB+';";
$ABn="select * from blood where Btype = 'AB-';";
$Op="select * from blood where Btype = 'O+';";
$On="select * from blood where Btype = 'O-';";

?>

<head>
  <style>
    .Blood-Inv{
      height: 60%;
    }
    .heding{
      text-align: center;
    }
    .Blood-Inv .container1{
      display: flex;
      justify-content: center;
      margin: 20px;
    }
    .Blood-Inv .container1 .Blood-Group-A{
      display: flex;
      height: 130px;
      width: 17%;
      margin: 10px;
      text-align: center;
      vertical-align: center;
      line-height: 500%;
      margin-right: 40px;
      background-color: whitesmoke;
      border-radius: 3px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
    }
    .Blood-Inv .container1 .Blood-Group-A:hover{
      display: flex;
      background-color: #987dc8;
      color: white;
      height: 150px;
      width: 20%;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }
    .positive{
      text-align: center;
      height: 100%;
      width: 100%;
      display: block;
      font-size: larger;
    }
    .head{
      height: 50%;
      width: 100%;
      text-align: center;
    }
    .count{
      height: auto;
      text-align: top;
      vertical-align:baseline;
      line-height: 200%;
    }
    .nagativ{
      text-align: center;
      height: auto;
      width: 50%;
      font-size: larger;
    }

    .Donor-Req-Inv{
      height: 60%;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 1);
      background: #e4e9f7;
      display: block;
      text-align: center;
    }
    .Donor-Req-Inv span{
      font-weight: 100;
    }
    .con1{
      display: flex;
    }
    .container2{
      margin: 8%;
      height: auto;
      width: 33%;
      background-color: whitesmoke;
      border-radius: 3px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
    }
    .container2:hover{
      margin: 8%;
      height: auto;
      width: 40%;
      background-color: #987dc8;
      color: white;
      height: 250px;
      width: 60%;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }
    .ttl{
      text-align: center;
      justify-content: center;
      margin-top: 25%;
      line-height: 100%;
    }
    .ttl h2{
      text-align: center;
      justify-content: center;
      margin-top: 25%;
      margin-bottom: 25%;
    }
    .Apointment{
      height: 60%;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 1);
      background: #e4e9f7;
    }
  </style>
</head>
  <div class="Blood-Inv">
    <div class="heding">
      <h1>Total Blood Bags</h1>
    </div>
<?php
    $cmd=mysqli_query($con,$Ap);
    $rowcount = mysqli_num_rows($cmd);
?>
    <div class="container1">
      <div class="Blood-Group-A">
        <div class="positive">
          <div class="head">
            A+
          </div>
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
          <div class="head">
            A-
          </div>
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
          <div class="head">
            B+
          </div>
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
          <div class="head">
            B-
          </div>
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
          <div class="head">
            AB+
          </div>
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
          <div class="head">
            AB-
          </div>
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
          <div class="head">
            O+
          </div>
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
          <div class="head">
            O-
          </div>
          <div class="count">
            <h2><?php echo $rowcount;?></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
<script  src="JS/table.js"></script>

<?php 
  include 'end.php';

?>
