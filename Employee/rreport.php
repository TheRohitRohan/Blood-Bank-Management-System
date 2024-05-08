<?php
include('connect.php');
error_reporting(0);
$query="SELECT * FROM `blood_record` order by R_C_date";
if(isset($_POST["submit"]))
{
    $d1=$_POST['d1'];
    $d2=$_POST['d2'];
    $query="select * from blood_record where R_C_date between '$d1' and '$d2' order by R_C_date";
}
include('start.php');
?>
<head><link rel="stylesheet" href="CSS/table.css"></head>
    <div class="container">
        <table class="rwd-table">
            <tr>
                <th colspan="3" style="text-align:left;">Request Report</th>
                <th style="text-align:right;"><h4>Search by Date Range:</h4></th>
                <th colspan="4" style="text-align:center;">
                    <form method="post">
                        <input type="text" onfocus="(this.type = 'date')" placeholder="From" name="d1">
                        <input type="text" onfocus="(this.type = 'date')" placeholder="To" name="d2">
                        <input type="submit" name="submit" value="Submit" style="background-color:#428bca;color:white;padding:3px;border:1px transparent">
                    </form>
                </th>
            </tr>
        <tbody>
            <tr>
                <th>Record ID</th>
                <th>Request ID</th>
                <th>Requester Name</th>
                <th>Hospital Name</th>
                <th>Blood Group</th>
                <th>Donor ID</th>
                <th>Donor Name</th>
                <th>Date</th>
            </tr>
            <?php
                $cmd=mysqli_query($con,$query);
                while($row=mysqli_fetch_array($cmd)){
                    $brid=$row['BR_ID'];   
                    $did=$row['D_ID'];
                    $rid=$row['R_ID'];

                    $query2="SELECT * FROM `donor` WHERE D_ID='$did'";
                    $cmd2=mysqli_query($con,$query2);
                    $row2=mysqli_fetch_array($cmd2);
                    $dname=$row2['D_name'];

                    $query3="SELECT * FROM `request` WHERE R_ID='$rid'";
                    $cmd3=mysqli_query($con,$query3);
                    $row3=mysqli_fetch_array($cmd3);
                    $rname=$row3['R_name'];
                    $hname=$row3['R_hpname'];
                    $type=$row3['R_btype'];
                    $date=$row3['R_date'];
            ?>
            <tr>
                <td><?php echo $brid?></td>
                <td><?php echo $rid?></td>
                <td><?php echo $rname?></td>
                <td><?php echo $hname?></td>
                <td><?php echo $type?></td>
                <td><?php echo $did?></td>
                <td><?php echo $dname?></td>
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