<?php
include 'database.php';
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'teacher') {
    header("Location: login.php");
    exit();
}

$course_id = $_GET['id'];
$query = "SELECT * FROM courses WHERE course_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $course_id);
$stmt->execute();
$result = $stmt->get_result()->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $course_name = $_POST['course_name'];
    $description = $_POST['description'];
    $update = "UPDATE courses SET course_name = ?, description = ? WHERE course_id = ?";
    $stmt = $conn->prepare($update);
    $stmt->bind_param("ssi", $course_name, $description, $course_id);
    $stmt->execute();
    header("Location: teacher_dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Course</title>
    <style>
        body {
            background-color: #f0f8ff; /* Light blue background */
            font-family: Arial, sans-serif;
            color: #003366; /* Navy blue text */
        }
        form {
            background-color: #e0f7fa; /* Light cyan background */
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            margin: 0 auto;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 2px solid #003366; /* Navy blue border */
            border-radius: 5px;
        }
        button {
            background-color: #003366; /* Navy blue background */
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }
        button:hover {
            background-color: #001a33; /* Darker navy blue */
        }
        .cancel-btn {
            background-color: #f44336; /* Red background for cancel button */
        }
        .cancel-btn:hover {
            background-color: #d32f2f; /* Darker red for cancel button hover */
        }
    </style>
</head>
<body>
    <form method="POST">
        <input type="text" name="course_name" value="<?php echo $result['course_name']; ?>" required>
        <textarea name="description" required><?php echo $result['description']; ?></textarea>
        <button type="submit">Update Course</button>
        <a href="teacher_dashboard.php"><button type="button" class="cancel-btn">Cancel</button></a>
    </form>
</body>
</html>
