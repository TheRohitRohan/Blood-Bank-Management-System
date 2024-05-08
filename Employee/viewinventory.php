<?php
include('connect.php');
$query="select * from blood;";
if(isset($_POST["sort"]))
{
  if($_POST["btype"]=='All'){
    $query="select * from blood;";
  }
  else {
    $query="select * from blood where Btype='$_POST[btype]'";
  }
}
include('start.php');
?>
<head><link rel="stylesheet" href="CSS/table.css"></head>
    <div class="container">
        <table class="rwd-table">
          <tr>
            <th colspan="3">Donor Details</th>
            <th colspan="2">
              <form method="post">
                <input list="blist" name="btype" placeholder="Blood-Type" default="All">
                  <datalist id="blist">
                    <option value="All" >All</option>
                    <option value="A+" >A+</option>
                    <option value="A-" >A-</option>
                    <option value="B+" >B+</option>
                    <option value="B-" >B-</option>
                    <option value="O+" >O+</option>
                    <option value="O-" >O-</option>
                    <option value="AB+" >AB+</option>
                    <option value="AB-" >AB-</option>
                  </datalist>
                <input type="submit" name="sort" value="Sort" style="background-color:#428bca;color:white;padding:3px;border:1px transparent" />
              </form>
            </th>
          </tr>
          <tbody>
            <tr>
              <th>Blood ID</th>
              <th>Blood Date</th>
              <th>Expiry Date</th>
              <th>Donor ID</th>
              <th>Blood Group</th>
            </tr>
            <?php
              $cmd=mysqli_query($con,$query);
              while($row=mysqli_fetch_array($cmd)){
              $bid=$row['B_ID'];
              $bdate=$row['B_date'];
              $edate=$row['B_Edate'];
              $did=$row['D_ID'];
              $BG=$row['Btype'];
            ?>
            <tr>
              <td data-th="Supplier Code">
              <?php echo $bid?>
              </td>
              <td data-th="Supplier Name">
              <?php echo $bdate?>
              </td>
              <td data-th="Invoice Number">
              <?php echo $edate?>
              </td>
              <td data-th="Invoice Date">
              <?php echo $did?>
              </td>
              <td data-th="Due Date">
              <?php echo $BG?>
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