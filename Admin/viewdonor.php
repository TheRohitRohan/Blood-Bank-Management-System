<?php
include('connect.php');
include('start.php');
?>
<head>
  <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
  <link rel="stylesheet" href="CSS/table.css">
</head>
    <div class="container">
        <table class="rwd-table">
            <tr>
              <th colspan="8" style="text-align:center;" >Donor Details</th>
            </tr>
          <tbody>
            <tr>
              <th>Donor ID</th>
              <th>Donor Name</th>
              <th>Contact Number</th>
              <th>Address</th>
              <th>Blood Group</th>
              <th>Email</th>
              <th>Birth Date</th>
              <th>Action</th>
            </tr>
            <?php
    $query="select * from donor;";
    $cmd=mysqli_query($con,$query);

    while($row=mysqli_fetch_array($cmd)){
        $did=$row['D_ID'];
        $name=$row['D_name'];
        $d_cno=$row['D_cno'];
		    $add=$row['D_add'];
        $BG=$row['bloodtype'];
        $Email=$row['D_email'];
        $BD=$row['Dbdate'];
        ?>
            <tr>
              <td data-th="Supplier Code">
              <?php echo $did?>
              </td>
              <td data-th="Supplier Name">
              <?php echo $name?>
              </td>
              <td data-th="Invoice Number">
              <?php echo $d_cno?>
              </td>
              <td data-th="Invoice Date">
              <?php echo $add?>
              </td>
              <td data-th="Due Date">
              <?php echo $BG?>
              </td>
              <td data-th="Net Amount">
              <?php echo $Email?>
              </td>
              <td data-th="Net Amount">
              <?php echo $BD?>
              </td>
              <td>
                <a href="editdonor.php?did=<?php echo $did?>">
                  <lord-icon src="https://cdn.lordicon.com/bxxnzvfm.json" trigger="hover"
                    colors="primary:#3a3347,secondary:#ffc738,tertiary:#f9c9c0,quaternary:#ebe6ef"
                    state="hover-1" style="width:50px;height:40px;display:inline-block;">
                  </lord-icon>
                </a>
                <a href="deletedonor.php?did=<?php echo $did?>">
                  <lord-icon class="iconx" src="https://cdn.lordicon.com/qjwkduhc.json" trigger="hover"
                    colors="primary:#646e78,secondary:#4bb3fd,tertiary:#ebe6ef" state="hover-empty"
                    style="width:50px;height:40px;display:inline-block;margin-right:0px;">
                  </lord-icon>
                </a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
  <script  src="JS/table.js"></script>
<?php 
include('end.php');
?>