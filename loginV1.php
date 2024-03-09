<?php
// Assuming your database connection is established in a separate file.
include 'db_connection.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Retrieve hashed password from the database
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password'];

        // Hash the entered password for comparison
        $entered_password_hashed = password_hash($password, PASSWORD_DEFAULT);
		echo "$entered_password_hashed";

        if (password_verify($entered_password_hashed, $hashed_password)) {
            // Valid credentials, redirect to index.html
            session_start();
            $_SESSION['username'] = $username;
            header('Location: Create.html');
            exit();
        }
    }

    // Invalid credentials, redirect back to login.html
    header('Location: get_started.html');
	echo "Invalid credentials";
    exit();
} else {
    // Redirect back to login.html if accessed directly without submitting the form
    header('Location: get_started.html');
    exit();
}
?>
