<?php
$host = "localhost";
$dbname = "contactus";
$username = "root";
$password = "";
$port = 3308; // specify the port number

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connection successful.";
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}
?>
