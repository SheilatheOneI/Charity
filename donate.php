<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $amount = $_POST["amount"];
    $campaignId = $_POST["id"];
    $note = $_POST["message"];

    // Database connection parameters
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

    // SQL query to insert donation data into the donations table
    $sql = "INSERT INTO donations (name, email, amount, campaign_id, note) VALUES ('$name', '$email', '$amount', '$campaignId', '$note')";

    if ($connection->query($sql) === TRUE) {
        echo "Donation successfully recorded! We will Contact you on how to Proceed with the payment. THANK YOU IN ADVANCE";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    // Close connection
    $connection->close();
}
?>
