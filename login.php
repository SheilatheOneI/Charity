<?php
// Assuming your database connection is established in a separate file.
include 'db_connection.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate user credentials
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Valid credentials, redirect to index.html
        session_start();
        $_SESSION['username'] = $username;
        header('Location: Create.html');
        exit();
    } else {
        // Invalid credentials, redirect back to login.html
        header('Location: get_started.html');
        exit();
    }
} else {
    // Redirect back to login.html if accessed directly without submitting the form
    header('Location: get_started.html');
    exit();
}
?>
