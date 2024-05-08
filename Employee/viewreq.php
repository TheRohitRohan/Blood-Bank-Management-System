<?php
include "connect.php";
include 'start.php';
?>
<head>
  <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
  <link rel="stylesheet" href="CSS/table.css">
</head>
<div class="container">
    <table class="rwd-table">
      <tbody>
        <tr>
          <th>Request ID</th>
          <th>Quantity</th>
          <th>Name</th>
          <th>Contact No</th>
          <th>Hospital Name</th>
          <th>Blood Group</th>
          <th>Date</th>
          <th>Action</th>
        </tr>
        <?php
          $query="select * from request;";
          $cmd=mysqli_query($con,$query);
          while($row=mysqli_fetch_array($cmd)){
              $rid=$row['R_ID'];
              $qty=$row['R_quantity'];
              $name=$row['R_name'];
              $cno=$row['R_cno'];
              $hpname=$row['R_hpname'];
              $BG=$row['R_btype'];
              $date=$row['R_date'];
        ?>
        <tr>
          <td data-th="Supplier Code">
          <?php echo $rid?>
          </td>
          <td data-th="Blood Qty">
          <?php echo $qty?>
          </td>
          <td data-th="Supplier Name">
          <?php echo $name?>
          </td>
          <td data-th="Invoice Number">
          <?php echo $cno?>
          </td>
          <td data-th="Invoice Date">
          <?php echo $hpname?>
          </td>
          <td data-th="Due Date">
          <?php echo $BG?>
          </td>
          <td data-th="Net Amount">
          <?php echo $date?>
          </td>
          <td>
            <a href="editreq.php?rid=<?php echo $rid?>">
              <lord-icon src="https://cdn.lordicon.com/bxxnzvfm.json" trigger="hover"
                  colors="primary:#3a3347,secondary:#ffc738,tertiary:#f9c9c0,quaternary:#ebe6ef"
                  state="hover-1" style="width:40px;height:30px;display:inline-block;padding:0px;">
              </lord-icon>
            </a>
            <a href="deletereq.php?rid=<?php echo $rid?>">
              <lord-icon class="iconx" src="https://cdn.lordicon.com/qjwkduhc.json" trigger="hover"
                  colors="primary:#646e78,secondary:#4bb3fd,tertiary:#ebe6ef" state="hover-empty"
                  style="width:40px;height:30px;display:inline-block;margin-right:0px;;padding:0px;">
              </lord-icon>
            </a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
<?php
include 'end.php';
?>