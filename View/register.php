   <?php
    // Include database connection
    include_once "db.php";

    if (isset($_POST['register-btn'])) {
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Check if user already exists
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->fetch()) {
            echo "User already exists.";
            exit;
        }

        // Insert new user into database
        $stmt = $pdo->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
        if ($stmt->execute([$email, $password])) {
            echo "Registration successful.";
        } else {
            echo "Registration failed.";
        }
    }
    ?>
</body>
</html>
