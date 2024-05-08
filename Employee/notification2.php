<?php
session_start();

if(isset($_SESSION['notifications']) && !empty($_SESSION['notifications'])) {
    foreach($_SESSION['notifications'] as $notification) {
        echo '<div class="notification">' . $notification . '</div>';
    }
    // Clear notifications after displaying
    $_SESSION['notifications'] = array();
}
?>
