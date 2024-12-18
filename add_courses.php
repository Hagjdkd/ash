<?php

session_start();
include 'database.php';
include 'plugin/header.php';

// Check if user is a teacher
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'teacher') {
    header("Location: login.php");
    exit();
}

$teacher_id = $_SESSION['user_id'];

// Handle adding a course with file upload
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['course_name'])) {
    $course_name = trim($_POST['course_name']);
    $description = trim($_POST['description']);
    $uploaded_file = null;

    // File upload handling
    if (isset($_FILES['course_pdf']) && $_FILES['course_pdf']['error'] === UPLOAD_ERR_OK) {
        $file_tmp = $_FILES['course_pdf']['tmp_name'];
        $file_name = basename($_FILES['course_pdf']['name']);
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_ext === 'pdf') {
            $upload_dir = 'uploads/';
            if (!file_exists($upload_dir)) mkdir($upload_dir, 0777, true);
            $uploaded_file = $upload_dir . time() . "_" . $file_name;
            move_uploaded_file($file_tmp, $uploaded_file);
        }
    }

    // Insert course
    if (!empty($course_name)) {
        $insert = "INSERT INTO courses (course_name, description, teacher_id, course_pdf) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($insert);
        $stmt->bind_param("ssis", $course_name, $description, $teacher_id, $uploaded_file);
        $stmt->execute();
    }
}

// Fetch courses
$course_query = "SELECT `course_id`, `course_name`, `description`, `created_at`, `course_pdf` FROM `courses` WHERE `teacher_id` = ?";
$stmt = $conn->prepare($course_query);
$stmt->bind_param("i", $teacher_id);
$stmt->execute();
$courses = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>
    <link rel="stylesheet" href="plugin/forall.css">
    <style>
        /* Your existing styles */
        table { margin-top: 20px; width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #007BFF; color: white; }
        a { text-decoration: none; color: red; margin-right: 10px; }
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
    color: #333;
}

    </style>
</head>
<body>
    <!-- Add Course Form -->
    <h3>Add a New Course</h3>
    <form method="POST" enctype="multipart/form-data">
        <label for="course_name">Course Name:</label>
        <input type="text" name="course_name" required>

        <label for="description">Description:</label>
        <textarea name="description"></textarea>

        <label for="course_pdf">PDF File:</label>
        <input type="file" name="course_pdf" accept="application/pdf">

        <button type="submit">Add Course</button>
    </form>

    <!-- Course List -->
    <h3>My Courses</h3>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Course Name</th>
                <th>Description</th>
                <th>Created At</th>
                <th>PDF</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($courses->num_rows > 0): ?>
                <?php $i = 1; while ($row = $courses->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo htmlspecialchars($row['course_name']); ?></td>
                        <td><?php echo htmlspecialchars($row['description']); ?></td>
                        <td><?php echo $row['created_at']; ?></td>
                        <td>
                            <?php if ($row['course_pdf']): ?>
                                <a href="<?php echo htmlspecialchars($row['course_pdf']); ?>" target="_blank">View PDF</a>
                            <?php else: ?>
                                No PDF
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="edit_course.php?id=<?php echo $row['course_id']; ?>">Edit</a>
                            <a href="delete_course.php?id=<?php echo $row['course_id']; ?>" onclick="return confirm('Are you sure?');">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="6">No courses added yet.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
