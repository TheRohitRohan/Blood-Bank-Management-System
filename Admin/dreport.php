<?php
include('connect.php');
$query="SELECT * FROM `appointment` WHERE A_status='done'";
if(isset($_POST["submit"]))
{
    $d1=$_POST['d1'];
    $d2=$_POST['d2'];
    $query="SELECT * FROM `appointment` where A_status='done' and A_date between '$d1' and '$d2' order by A_date";
}
include('start.php');
?>
<head><link rel="stylesheet" href="CSS/table.css"></head>
    <div class="container">
        <table class="rwd-table">
            <tr>
                <th style="text-align:center;">Donation Report</th>
                <th style="text-align:right;"><h4>Search by Date Range:</h4></th>
                <th colspan="3" style="text-align:center;">
                    <form method="post">
                        <input type="text" onfocus="(this.type = 'date')" placeholder="From" name="d1">
                        <input type="text" onfocus="(this.type = 'date')" placeholder="To" name="d2">
                        <input type="submit" name="submit" value="Submit" style="background-color:#428bca;color:white;padding:3px;border:1px transparent">
                    </form>
                </th>
            </tr>
        <tbody>
            <tr>
                <th>Donor ID</th>
                <th>Donor Name</th>
                <th>Blood Group</th>
                <th>Date</th>
            </tr>
            <?php
                $cmd=mysqli_query($con,$query);
                while($row=mysqli_fetch_array($cmd)){
                    $did=$row['D_ID'];
                    $date=$row['A_date'];

                    $query2="SELECT * FROM `donor` WHERE D_ID='$did'";
                    $cmd2=mysqli_query($con,$query2);
                    $row2=mysqli_fetch_array($cmd2);

                    $name=$row2['D_name'];
                    $type=$row2['bloodtype'];?>
            <tr>
                <td><?php echo $did?></td>
                <td><?php echo $name?></td>
                <td><?php echo $type?></td>
                <td><?php echo $date?></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
<script  src="JS/table.js"></script>
<?php 
include('end.php');
?>