<?php 
// Start the session
session_start();

// Include database connection
include 'plugin/head.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id']) || !isset($_SESSION['name'])) {
    header("Location: login.php");
    exit();
}

// Ensure only students can access
if ($_SESSION['role'] !== 'student') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard - Edmodo</title>
    <link rel="icon" href="uploads/logo.jpg">
    <link rel="stylesheet" href="student_dashboard.css">
</head>
<body>
    <main class="main">
        <section class="welcome">
            <!-- Welcome message with role -->
            <h2>
                Welcome 
                <?php 
                // Show "Teacher" or "Student" based on role
                echo ($_SESSION['role'] === 'teacher' ? 'Teacher ' : '') . htmlspecialchars($_SESSION['name']); 
                ?>
            </h2>
            <p>Your learning journey continues. Explore your courses and stay connected!</p>
        </section>

        <section class="cards">
            <div class="card">
                <h3>My Courses</h3>
                <p>View and learn more about your courses.</p>
                <button>
                    <a href="courses.php" style="text-decoration: none; color: inherit;">Go to Courses</a>
                </button>
            </div>

            <div class="card">
                <h3>Quizzes</h3>
                <p>Access your quizzes and test your knowledge.</p>
                <button>
                    <a href="quizzes.php" style="text-decoration: none; color: inherit;">Take Quizzes</a>
                </button>
            </div>

            <div class="card">
                <h3>Upcoming Events</h3>
                <p>Stay updated with upcoming deadlines or events.</p>
                <button>
                    <a href="events.php" style="text-decoration: none; color: inherit;">View Events</a>
                </button>
            </div>
        </section>
    </main>

    <script>
        function navigateTo(section) {
            // Add navigation logic here
            alert('Navigating to ' + section);
        }
    </script>
    <div class="footer">
    <footer >
        <p>Edmodo &copy; 2024 | All Rights Reserved</p>
    </footer>
    </div>
</body>
</html>
