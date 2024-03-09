<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    // User is logged in
    header('Location: Create.html');
} else {
    // User is not logged in
    header('Location: get_started.html');
}
?>
