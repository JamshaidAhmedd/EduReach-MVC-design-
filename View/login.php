<?php
// Include database connection
include_once "db.php";

if (isset($_POST['login-btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Fetch user from database
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['user'] = $user['username'];
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Invalid email or password.";
    }
}
?>
