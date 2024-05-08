<?php
include('connect.php');
include('start.php');
?>
<head>
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
    <link rel="stylesheet" href="CSS/table.css">
    <link rel="stylesheet" href="CSS/add.css" />
    <script>
        function openPopup() {
            document.getElementById("popupForm").style.display = "block";
        }
        function closePopup() {
            document.getElementById("popupForm").style.display = "none";
        }
        function openPopup1(empId) {
            localStorage.setItem("popupOpen", "true");
            window.location.href = "?empid=" + empId;
        }
        document.addEventListener("DOMContentLoaded", function() {
            var popupOpen = localStorage.getItem("popupOpen");
            var popupForm = document.getElementById("popupForm1");
            
            // Check if popupForm is initially opened
            if (popupOpen === "true") {
                popupForm.style.display = "block"; // Display the popup form initially
            } else {
                popupForm.style.display = "none"; // Hide the popup form initially
            }
            
            // Close the popup form if it's initially opened
            if (popupForm.style.display === "block") {
                localStorage.setItem("popupOpen", "false"); // Set popupOpen to "false" in localStorage
            }
        });
        function closePopup1() {
            document.getElementById("popupForm1").style.display = "none";
        }
    </script>
    <?php if(isset($_GET['empid'])) {
        $empid = $_GET['empid'];
        $query="select * from appointment where A_ID  = '$empid'";
        $stat = mysqli_query($con,$query);
        $data = mysqli_fetch_array($stat);
        }
    ?>
</head>
    <div class="container">
        <table class="rwd-table">
            <tr>
                <th colspan="8" style="text-align:center;" >Appointment</th>
            </tr>
            <tbody>
            <tr>
                <th>Appointment ID</th>
                <th>Donor ID</th>
                <th>Donor Name</th>
                <th>Appointment Date</th>
                <th>Appointment Time</th>
                <th>Blood Group</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <?php
            $query="SELECT * FROM `appointment`";
            $cmd=mysqli_query($con,$query);

            while($row=mysqli_fetch_array($cmd)){
                $aid=$row['A_ID'];
                $did=$row['D_ID'];
                $date=$row['A_date'];
                $time=$row['A_time'];
                $status=$row['A_status'];
                $query2="SELECT * FROM `donor` WHERE D_ID='$did'";
                $cmd2=mysqli_query($con,$query2);
                $row2=mysqli_fetch_array($cmd2);
                $name=$row2['D_name'];
                $type=$row2['bloodtype'];
            ?>
            <tr>
                <td><?php echo $aid?></td>
                <td><?php echo $did?></td>
                <td><?php echo $name?></td>
                <td><?php echo $date?></td>
                <td><?php echo $time?></td>
                <td><?php echo $type?></td>
                <td><?php echo $status?></td>
                <td>
                    <a  class="myLink"  onclick="openPopup1('<?=  $aid;?>')"  >
                    <lord-icon src="https://cdn.lordicon.com/bxxnzvfm.json" trigger="hover"
                        colors="primary:#3a3347,secondary:#ffc738,tertiary:#f9c9c0,quaternary:#ebe6ef"
                        state="hover-1" style="width:40px;height:30px;display:inline-block;padding:0px;">
                    </lord-icon>
                    </a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    
<div id="popupForm1" class="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup1()">&times;</span>
        <div class="container-popup">
            <div class="formcontainer">
                <div class="container">
                    <form method="post" Action="appupdate.php">
                        <div class="user__details">
                        <div class="input__box">
                            <span class="details">Status : </span>
                            <?php //echo $data['A_ID'];?>
                            <input type="hidden" name="id" value="<?php echo $data['A_ID'];?>">
                            <select name="Status" require>
                                <option value="done" >Done</option>
                                <option value="aproved" >Aproved</option>
                                <option value="panding" >Panding</option>
                                <option value="cancel" >Canceled</option>
                            </select> 
                        </div>
                        <div class="button">
                        <input type="submit" name="Update" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
                
<script  src="JS/table.js"></script>
<?php 
include('end.php');
?>