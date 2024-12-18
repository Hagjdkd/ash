
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>
    <style>
        /* Header Styles */
        nav {
            background-color: #007BFF;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        nav .logo {
            font-size: 1.5rem;
            font-weight: bold;
            text-transform: uppercase;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #FFD700; /* Gold Color */
        }

        .logout {
            background-color: red;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .logout:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">Edmodo</div>
        <ul>
            <li><a href="teacher_dashboard.php">Home</a></li>
            <li><a href="add_courses.php">Add Courses</a></li>
            <li><a href="learn.php">About Us</a></li>
            <li><a href="logout.php" class="logout">Log Out</a></li>
        </ul>
    </nav>
</body>
</html>
