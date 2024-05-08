<?php 
    session_start();
    include('connect.php');
    $pass=$_SESSION['pass'];
    $email=$_SESSION['email'];

    $xyz=mysqli_query($con,"SELECT * FROM `donor`");
    while($x=mysqli_fetch_array($xyz)){
        $id=$x['D_ID'];
    }
    $newid=$id+1;


    if(isset($_POST["add"]))
    {
        $query="INSERT INTO `donor` (`D_ID`, `D_name`, `D_cno`, `D_pass`, `D_add`, `bloodtype`, `D_email`, `Dbdate`) VALUES
        ('$newid', '$_POST[name]', '$_POST[cno]', '$pass', '$_POST[address]', '$_POST[btype]', '$email', '$_POST[bdate]')";
        $result1=mysqli_query($con,$query);
        if(!$result1){
                echo '<script type="text/javascript"> '; 
                echo '  if (confirm("Addition Unsuccessfull")) {';  
                echo '    document.location = "reg2.php";';  
                echo '  }';  
                echo'</script>';
            }
            else{
                echo '<script type="text/javascript"> '; 
                echo '  if (confirm("Addition successfull")) {';  
                echo '    document.location = "/blood bank/Donor/dashbord.php";';  
                echo '  }';  
                echo'</script>';
            }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NAME" name="name">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Address" name="address">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <!-- class="input--style-1 js-datepicker"  -->
                                    <input class="input--style-1" type="text" onfocus="(this.type = 'date')" placeholder="BirthDate" name="bdate">
                                    <!-- <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i> -->
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Contact Number" name="cno">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">GENDER</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="btype">
                                            <option disabled="disabled" selected="selected">Blood Type</option>
                                            <option>A+</option>
                                            <option>A-</option>
                                            <option>B+</option>
                                            <option>B-</option>
                                            <option>O+</option>
                                            <option>O-</option>
                                            <option>AB+</option>
                                            <option>AB-</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="add">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <!-- <script src="vendor/datepicker/moment.min.js"></script> -->
    <!-- <script src="vendor/datepicker/daterangepicker.js"></script> -->

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body> 

</html>
<!-- end document-->
