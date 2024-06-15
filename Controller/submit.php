<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactus";
$port = 3308; // specify the port number

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if POST data is set
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Debug information
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Phone: $phone<br>";
    echo "Message: $message<br>";

    // Prepare an SQL statement to insert the data into the database
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, phone, message) VALUES (?, ?, ?, ?)");
    
    // Check if statement preparation is successful
    if (!$stmt) {
        die("Statement preparation failed: " . $conn->error);
    }
    
    $stmt->bind_param("ssss", $name, $email, $phone, $message);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    echo "All fields are required.";
}

// Close the database connection
$conn->close();

// Redirect back to the form
header("Location: index.html");
?>
