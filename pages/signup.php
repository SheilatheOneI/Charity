<?php
// signup.php

// Retrieve values from the POST request
$phone_number = $_POST['phone_number'];
$username = $_POST['username'];
$password = $_POST['password'];

// Perform database operations
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mydatabase";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the username already exists
$check_query = "SELECT * FROM users WHERE username = '$username'";
$check_result = mysqli_query($conn, $check_query);

if ($check_result && mysqli_num_rows($check_result) > 0) {
    echo "Username already exists";
} else {
    // Hash the password
    //$hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into the users table
    $insert_query = "INSERT INTO users (phone_number, username, password) VALUES ('$phone_number', '$username', '$password')";
    
    if ($conn->query($insert_query) === TRUE) {
		header('Location: ../index.html');
        //echo "User registered successfully";
    } else {
        echo "Error: " . $insert_query . "<br>" . $conn->error;
    }
}

$conn->close();
?>
