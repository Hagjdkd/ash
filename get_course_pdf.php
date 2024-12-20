<?php
include 'database.php';  // Include your database connection file

// Get course ID from the URL
$course_id = $_GET['id'];

// Query to get the PDF URL for the specific course
$query = "SELECT `course_pdf` FROM `courses` WHERE `course_id` = '$course_id'";
$result = mysqli_query($conn, $query);

if ($result) {
    $course = mysqli_fetch_assoc($result);
    if ($course && !empty($course['course_pdf'])) {
        echo json_encode(['pdf_url' => $course['course_pdf']]);
    } else {
        echo json_encode(['pdf_url' => null]);
    }
} else {
    echo json_encode(['pdf_url' => null]);
}
?>
