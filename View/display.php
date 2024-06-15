<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactUs";
$port = 3308; // specify the port number


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare an SQL statement to select the data from the database
$stmt = $conn->prepare("SELECT * FROM contacts");
$stmt->execute();

// Get the result
$result = $stmt->get_result();

// Loop through the result set and display the data
while ($row = $result->fetch_assoc()) {
    echo "Name: " . $row["name"] . "<br>";
    echo "Email: " . $row["email"] . "<br>";
    echo "Phone: " . $row["phone"] . "<br>";
    echo "Message: " . $row["message"] . "<br><br>";
}

// Close the prepared statement
$stmt->close();

// Close the database connection
$conn->close();
?>