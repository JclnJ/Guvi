<?php
// Establish database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "login";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle registration
if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){
    $username = $_POST['username'];
	$email = $_POST['email'];	
    $password = $_POST['password'];

    $sql = "INSERT INTO login (username,email, password) VALUES ('$username','$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
