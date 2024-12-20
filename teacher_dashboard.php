<?php 
// Start the session
session_start();

// Include database connection and head
include 'plugin/header.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id']) || !isset($_SESSION['name'])) {
    header("Location: login.php");
    exit();
}

// Ensure only teachers can access
if ($_SESSION['role'] !== 'teacher') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard - Edmodo</title>
    <link rel="icon" href="uploads/logo.jpg">
    <style>
      /* General Styles */
/* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
    color: #333;
    height: 100%;  /* Make body take full height of the viewport */
    display: flex;
    flex-direction: column;
}

.main {
    padding: 20px;
    flex: 1;  /* Allow the main content to take up all available space */
}

/* Welcome Section */
.welcome {
    text-align: center;
    margin-bottom: 30px;
}

h2 {
    color: #007BFF;
    margin-bottom: 10px;
}

p {
    font-size: 16px;
    color: #555;
}

/* Cards Section */
.cards {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    gap: 20px;
}

.card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    width: 30%;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: box-shadow 0.3s;
}

.card h3 {
    margin: 0 0 10px;
    color: #333;
}

.card p {
    font-size: 14px;
    margin-bottom: 15px;
    color: #666;
}

.card button {
    padding: 8px 12px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.card button a {
    text-decoration: none;
    color: inherit;
}

.card button:hover {
    background-color: #0056b3;
}

.card:hover {
    box-shadow: 0 4px 8px rgba(42, 32, 233, 0.2);
}
.footer{
  color: white;
}

/* Responsive Design */
@media (max-width: 768px) {
    .card {
        width: 100%;
    }
}

/* Footer Styles */
.footer {
    background-color:#0056b3;
    color: white;
    text-align: center;
    padding: 10px;
    width: 100%;
    margin-top: auto;  /* Ensures the footer is at the bottom */
}


    </style>
    <link rel="icon" href="uploads/logo.jpg" alt="Edmodo logo">
</head>
<body>
    <main class="main">
        <section class="welcome">
            <!-- Welcome message for Teacher -->
            <h2>
                Welcome, Teacher <?php echo htmlspecialchars($_SESSION['name']); ?>
            </h2>
            <p>Manage your courses, view students, and stay organized!</p>
        </section>

        <section class="cards">
            <!-- Card 1: Manage Courses -->
            <div class="card">
                <h3>Manage Courses</h3>
                <p>View and learn more about your courses.</p>
                <button>
                    <a href="t_courses.php" style="text-decoration: none; color: inherit;">Go to Courses</a>
                </button>
            </div>

            <!-- Card 2: Student List -->
            <div class="card">
                <h3>Student List</h3>
                <p>View all enrolled students and their details.</p>
                <button>
                    <a href="student_list.php" style="text-decoration: none; color: inherit;">View Students</a>
                </button>
            </div>

            <div class="card">
                <h3>Quizzes</h3>
                <p>Train your mind.</p>
                <button>
                    <a href="t_quizzes.php" style="text-decoration: none; color: inherit;">Quizzes</a>
                </button>
            </div>

            <!-- Card 3: Upcoming Events -->
            <div class="card">
                <h3>Upcoming Events</h3>
                <p>Plan and stay updated with upcoming deadlines.</p>
                <button>
                    <a href="t_events.php" style="text-decoration: none; color: inherit;">View Events</a>
                </button>
            </div>
        </section>
    </main>

    <script>
        function navigateTo(section) {
            alert('Navigating to ' + section);
        }
    </script>
    <footer class="footer">
        <p style ="color:white;">Edmodo &copy; 2024 | All Rights Reserved</p>
    </footer>
</body>

</html>
