<?php
$conn = new mysqli("localhost", "root", "", "blood_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$time_slots = array(
    array("09:00:00", "10:00:00"),
    array("10:00:00", "11:00:00"),
    array("11:00:00", "12:00:00"),
    array("12:00:00", "13:00:00"),
    array("14:00:00", "15:00:00"),
    array("15:00:00", "16:00:00"),
    array("16:00:00", "17:00:00")
);

if(isset($_POST['date'])) {
    $selected_date = $_POST['date'];
    
    $available_time_slots = '';

    foreach ($time_slots as $slot) {
        $start_time = $slot[0];
        $end_time = $slot[1];
        
        $sql = "SELECT COUNT(*) AS count FROM appointment WHERE A_date = '$selected_date' AND A_time >= '$start_time' AND A_time < '$end_time'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $appointment_count = $row['count'];

        if ($appointment_count < 3) {
            $formatted_start_time = date("h:i A", strtotime($start_time));
            $formatted_end_time = date("h:i A", strtotime($end_time));
            $formatted_slot = $formatted_start_time . " - " . $formatted_end_time;
            $available_time_slots .= "<option value=\"$start_time\">$formatted_slot</option>";
        }
    }
    
    if (!empty($available_time_slots)) {
        echo $available_time_slots;
    } else {
        echo "<option value=''>No available time slots</option>";
    }
}

$conn->close();
?>
