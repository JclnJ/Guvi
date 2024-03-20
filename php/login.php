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

// Handle login
if(isset($_POST['email']) && isset($_POST['password'])){
    
	$email = $_POST['email'];	
    $password = $_POST['password'];
    $sql = "SELECT * FROM login WHERE email='$email'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc(); // Fetch the row here
        if ($password==$row['password']) {
            echo "Login successful!";
        } else {
            echo "Invalid username or password!";
        }
    } else {
        echo "Invalid username or password!";
    }
}

	$conn->close();
?>



