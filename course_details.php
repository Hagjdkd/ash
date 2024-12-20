<?php
// Include database connection
include 'database.php';

// Check if the course ID is provided
if (isset($_GET['id'])) {
    $course_id = $_GET['id'];

    // Query to fetch course details based on the course ID
    $query = "SELECT `course_name`, `description`, `created_at`, `course_pdf` FROM `courses` WHERE `course_id` = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $course_id);  // 'i' means integer
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Check if course is found
    if (mysqli_num_rows($result) > 0) {
        $course = mysqli_fetch_assoc($result);
    } else {
        echo '<p>Course not found.</p>';
        exit();
    }
} else {
    echo '<p>Invalid course ID.</p>';
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $course['course_name']; ?> - Course Details</title>
    <link rel="icon" href="uploads/logo.jpg">
    <link rel="stylesheet" href="student_dashboard.css">
</head>
<body>
    <main class="main">
        <section class="course-details">
            <h2><?php echo $course['course_name']; ?></h2>
            <p><strong>Description:</strong> <?php echo nl2br($course['description']); ?></p>
            <p><strong>Created At:</strong> <?php echo $course['created_at']; ?></p>

            <?php if ($course['course_pdf']) { ?>
                <h3>Course PDF:</h3>
                <embed src="<?php echo $course['course_pdf']; ?>" width="100%" height="600px" type="application/pdf">
            <?php } else { ?>
                <p>No PDF available for this course.</p>
            <?php } ?>

            <!-- Go Back Button -->
            <button onclick="window.location.href='courses.php'">Go Back to Course List</button>
        </section>
    </main>
</body>
</html>
