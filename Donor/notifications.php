<?php
$conn = mysqli_connect("localhost", "root", "", "blood_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch notifications from the database
$sql = "SELECT * FROM notifications WHERE recipient_id = 1 AND status = 'unread'";
$result = $conn->query($sql);

// Check if there are unread notifications
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        // Send notification to the client-side JavaScript
        echo "<script>handleNewNotification('" . $row["message"] . "');</script>";
        
        // You can also update the status of the notification in the database to mark it as read if needed
        // For example: $updateSql = "UPDATE notifications SET status = 'read' WHERE id = " . $row["id"];
        // $conn->query($updateSql);
    }
} else {
    echo "No unread notifications found.";
}

// Close database connection
$conn->close();
?>
