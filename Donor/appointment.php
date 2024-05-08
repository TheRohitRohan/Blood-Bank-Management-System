<?php
$conn = new mysqli("localhost", "root", "", "blood_db");

function isTimeSlotAvailable($conn, $date, $start_time, $end_time) {
    $sql = "SELECT COUNT(*) AS count FROM appointment WHERE A_date = '$date' AND A_time >= '$start_time' AND A_time < '$end_time'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $appointment_count = $row['count'];
    return ($appointment_count >= 0 && $appointment_count < 3);
}

if(isset($_POST["Book"])) {
    $selected_date = $_POST['date'];
    $selected_time = $_POST['time'];

    $dayOfWeek = date('N', strtotime($selected_date));
    if ($dayOfWeek == 6 || $dayOfWeek == 7) {
        echo '<script>alert("Weekend dates are not allowed for appointments. Please select a weekday.");</script>';
        exit;
    }

    $xyz = mysqli_query($conn,"SELECT MAX(A_ID) AS max_id FROM `appointment`");
    $row = mysqli_fetch_assoc($xyz);
    $new_id = $row['max_id'] + 1;

    $query = "INSERT INTO `appointment` (`A_ID`, `D_ID`, `A_date`, `A_time`, `A_status`) VALUES ('$new_id', '2', '$selected_date', '$selected_time', 'pending')";
    $result = mysqli_query($conn, $query);
    
    if ($result) {
        echo '<script>alert("Appointment booked successfully.");</script>';
    } else {
        echo '<script>alert("Failed to book appointment. Please try again.");</script>';
    }
}
?>

<?php 
include('start.php');
?>

<head>
    <link rel="stylesheet" href="CSS/form.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<div class="formcontainer">
    <div class="container">
        <div class="title">Appointment</div>
        <form method="POST">
            <div class="user__details">
                <div class="input__box">
                    <label for="date">Select Date:</label>
                    <input type="date" id="date" name="date" required onkeydown="return false" onpaste="return false" oncut="return false" oncontextmenu="return false" min="<?php echo date('Y-m-d'); ?>" onchange="checkWeekend(this)"><br>
                </div>
                <div class="input__box">
                    <label for="time">Select Time Slot:</label>
                    <select id="time" name="time" required>
                        <option value="">Select Time Slot</option>
                    </select><br>
                </div>
            </div>
            <div class="button">
                <input type="submit" name="Book" value="Book">
            </div>
        </form>
    </div>
</div>

<script>
$(document).ready(function(){
    var today = new Date().toISOString().split('T')[0];
    $('#date').attr('min', today);
    
    $('#date').change(function(){
        var selectedDate = new Date($(this).val());
        var currentDate = new Date();
        
        if (selectedDate < currentDate) {
            alert("You cannot book appointments for past dates.");
            $(this).val(today);
        } else {
            $.ajax({
                url: 'get_available_time_slots.php',
                method: 'POST',
                data: { date: $(this).val() }, 
                dataType: 'html',
                success: function(response) {
                    $('#time').html(response);
                }
            });
        }
    });
});

function checkWeekend(input) {
    var selectedDate = new Date(input.value);
    var dayOfWeek = selectedDate.getDay();
    if (dayOfWeek == 0 || dayOfWeek == 6) {
        alert("Weekend dates are not allowed for appointments. Please select a weekday.");
        input.value = ''; 
    }
}
</script>

<?php 
include('end.php');
?>
