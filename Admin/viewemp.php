<?php
include 'connect.php';
include 'start.php'; 
?>
<head>
  <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
  <link rel="stylesheet" href="CSS/table.css">
</head>
  <section class="home-section">
    <div class="container">
        <table class="rwd-table" >
          <tr>
            <th colspan="10" style="text-align:center;" >Employee Details</th>
          </tr>
          <tbody>
            <tr>
              <th>Employee ID</th>
              <th>Employee Name</th>
              <th>Contact Number</th>
              <th>Address</th>
              <th>Salary</th>
              <th>Blood Group</th>
              <th>Email</th>
              <th>Password</th>
              <th>Post</th>
              <th>Action</th>
            </tr>
            <?php
    $query="select * from employee where E_post != 'Admin';";
    $cmd=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($cmd))
    {
        $did=$row['E_ID'];
        $name=$row['E_name'];
        $d_pass=$row['E_pass'];
        $d_cno=$row['E_CNO'];
		    $add=$row['E_Add'];
        $sal=$row['E_sal'];
        $BG=$row['E_btype'];
        $post=$row['E_post'];
        $Email=$row['E_email'];
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
              <?php echo $sal?>
              </td>
              <td data-th="Due Date">
              <?php echo $BG?>
              </td>
              <td data-th="Net Amount">
              <?php echo $Email?>
              </td>
              <td data-th="Invoice Number">
              <?php echo $d_pass?>
              </td>
              <td data-th="Net Amount">
              <?php echo $post?>
              </td>
              <td>
                <a href="editemp.php?did=<?php echo $did?>">
                  <lord-icon src="https://cdn.lordicon.com/bxxnzvfm.json" trigger="hover"
                    colors="primary:#3a3347,secondary:#ffc738,tertiary:#f9c9c0,quaternary:#ebe6ef"
                    state="hover-1" style="width:50px;height:40px;display:inline-block;">
                  </lord-icon>
                </a>
                <a href="deleteemp.php?did=<?php echo $did?>">
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
  include 'end.php';
?>