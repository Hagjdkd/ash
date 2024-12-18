<?php
include 'database.php';
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'teacher') {
    header("Location: login.php");
    exit();
}

$course_id = $_GET['id'];
$delete = "DELETE FROM courses WHERE course_id = ?";
$stmt = $conn->prepare($delete);
$stmt->bind_param("i", $course_id);
$stmt->execute();
header("Location: teacher_dashboard.php");
?>
