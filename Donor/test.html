<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pop-up Notifications</title>
    <script>
        // Function to display a pop-up notification
        function showNotification(message) {
            // Create a new notification using the Notification API
            if (Notification.permission === "granted") {
                new Notification(message);
            } else if (Notification.permission !== "denied") {
                Notification.requestPermission().then(function(permission) {
                    if (permission === "granted") {
                        new Notification(message);
                    }
                });
            }
        }

        // Function to handle incoming notifications
        function handleNewNotification(message) {
            // Show pop-up notification
            showNotification(message);
        }
    </script>
</head>
<body>
    <!-- Include the PHP file to fetch and display notifications -->
    <?php include 'notifications.php'; ?>

    <!-- Notification list (optional) -->
    <!-- <ul id="notification-list"></ul> -->

    <!-- Check browser support for Notification API -->
    <script>
        if (!("Notification" in window)) {
            alert("This browser does not support desktop notifications.");
        } else if (Notification.permission !== "granted" && Notification.permission !== "denied") {
            Notification.requestPermission().then(function(permission) {
                if (permission === "granted") {
                    // Permission granted, can now show notifications
                }
            });
        }
    </script>
</body>
</html>
