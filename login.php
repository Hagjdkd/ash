<?php
// Start the session
session_start();

// Include database connection
include 'database.php'; // Assuming this contains your database credentials

// Initialize error message
$error_message = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve user input
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Query to fetch user based on email
    $query = "SELECT `user_id`, `name`, `email`, `password`, `role`, `created_at` 
              FROM `users` 
              WHERE `email` = ?";
    
    // Prepare the SQL statement
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        
        // Verify password
        if (password_verify($password, $user['password'])) {
            // Store user data in session
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['role'] = $user['role'];
            
            // Redirect to the dashboard based on role
            if ($user['role'] === 'teacher') {
                header("Location: teacher_dashboard.php");
            } else {
                header("Location: student_dashboard.php");
            }
            exit();
        } else {
            $error_message = "Incorrect password.";
        }
    } else {
        $error_message = "No account found with that email.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edmodo: A Social Learning Platform</title>
    <link rel="icon" href="uploads/logo.jpg">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="sub"><br>
        <div class="intr" style="font-size: 40px; text-align: center; margin-bottom: 30px; font-family: Calibri;">
            Good to see you again
        </div>
        <div class="subhead">
            <div class="about">
                <div class="one">
                    <div class="abo">
                        <?php if (!empty($error_message)): ?>
                            <div class="error" style="color: red; text-align: center; margin-bottom: 20px;">
                                <?php echo htmlspecialchars($error_message); ?>
                            </div>
                        <?php endif; ?>
                        <form action="" method="POST">
                            <div class="text">Your email</div>
                            <i>👤</i>
                            <input type="email" placeholder="email" name="email" required> <br>
                            <div class="text">Your password</div>
                            <i>🔒</i>
                            <input type="password" placeholder="password" name="password" required><br>
                            <button class="sign" type="submit">Sign in</button>
                        </form>
                        <button class="reg">
                            <a href="register.php" style="text-decoration: none; color: white;">Register</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
