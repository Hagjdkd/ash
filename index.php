<?php
$server = "localhost";
$user = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "edmodo_database";

// Create connection
$conn = new mysqli($server, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error = ""; // Initialize error variable
$success = ""; // Initialize success variable

// Process form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $password_hash = password_hash($password, PASSWORD_BCRYPT); // Hash the password

    // Check if email already exists in the database
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? LIMIT 1");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        echo "<script>alert('Email already exists.')</script>";
    } else {
        // Insert new user into the database
        $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $password_hash);
        
        if ($stmt->execute()) {
            echo "<script>alert('Successfully registered.')</script>";
            require 'login.php';
        } else {
            echo "<script>alert('Invalid. Please try again.')</script>";
        }

        $stmt->close();
    }

    $conn->close();
}
?>
