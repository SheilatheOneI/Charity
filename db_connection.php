<?php
$host = "localhost"; // Change this to your database host
$username = "root";   // Change this to your database username
$password = "";       // Change this to your database password
$database = "mydatabase"; // Change this to your database name

// Create a connection to the database
$connection = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
