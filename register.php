<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="icon" href="uploads/logo.jpg">

    <link rel="stylesheet" href="login.css">
   
  
</head>
<body>
    <div class="sub">
        <div class="intr" style="font-size: 40px; text-align: center; margin-bottom: 30px; font-family: Calibri;">Welcome!</div>
        <div class="subhead">
            <div class="about">
                <div class="one">
                    <div class="abo">
                        <form action="" method="POST">
                            <div class="text">Your name</div>
                            <i>👤</i>
                            <!-- Added the `name` attribute here -->
                            <input type="text" placeholder="name" name="name" required>
                            <div class="text">Your email</div>
                            <i>👤</i>
                            <input type="email" placeholder="email" name="email" required> <br>
                            <div class="text">Your password</div>
                            <i>🔒</i>
                            <input type="password" placeholder="password" name="password" required><br>
                            <div class="text">Select Role</div>
                            <select class="role" name="role" required>
                                <option value="student">Student</option>
                                <option value="teacher">Teacher</option>
                            </select>
                            <button class="reg">Register</button>
                        </form>
                        <button style="background-color: rgba(0, 0, 255, 0.3);"><a href="login.php">Sign in</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'database.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $role = $_POST['role'];

    $conn = new mysqli('localhost', 'root', '', 'edmodo_database');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the email already exists
    $check_email_query = "SELECT email FROM users WHERE email = ?";
    $stmt = $conn->prepare($check_email_query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "<script>alert('Email already registered. Please use a different email or sign in.');</script>";
        echo "<script>window.location.href = 'register.php';</script>";
    } else {
        // Proceed with the insertion
        $sql = "INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $name, $email, $password, $role);

        if ($stmt->execute()) {
            echo "<script>alert('Registration successful!');</script>";
            echo "<script>window.location.href = 'login.php';</script>";
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    $stmt->close();
    $conn->close();
}
?>

</body>
</html>
