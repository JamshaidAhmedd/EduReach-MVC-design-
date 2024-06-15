<!-- submit.php -->
<?php
require_once 'Controller.php';
$controller = new Controller();

// Example: Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process form data
    // Example:
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Example: Insert data into database
    $controller->insertUser($username, $password);
}

// Redirect or display success message
header('Location: index.html');
exit;
?>
