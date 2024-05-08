<?php

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "blood_db"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to check if a specific time slot on a given date is available
function isTimeSlotAvailable($date, $start_time, $end_time) {
    global $conn;
    $sql = "SELECT COUNT(*) AS count FROM appointment WHERE A_date = '$date' AND A_time >= '$start_time' AND A_time < '$end_time'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $appointment_count = $row['count'];
    return ($appointment_count >= 0 && $appointment_count < 3); // Return true if the count of appointments for the slot is less than 3
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Appointment Booking</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<form action="process_booking.php" method="POST">
    <label for="date">Select Date:</label>
    <input type="date" id="date" name="date" required><br>

    <label for="time">Select Time Slot:</label>
    <select id="time" name="time" required>
        <option value="">Select Time Slot</option>
    </select><br>

    <input type="submit" value="Book Appointment">
</form>

<script>
$(document).ready(function(){
    $('#date').change(function(){
        var selectedDate = $(this).val();
        $.ajax({
            url: 'get_available_time_slots.php',
            method: 'POST',
            data: { date: selectedDate },
            dataType: 'html',
            success: function(response) {
                $('#time').html(response);
            }
        });
    });
});
</script>

</body>
</html>