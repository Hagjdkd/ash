<?php 
include 'plugin/head.php';
include 'database.php';  // Include your database connection file
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Courses - Edmodo</title>
    <link rel="stylesheet" href="student_dashboard.css">
    <link rel="icon" href="uploads/logo.jpg" alt="Edmodo logo">
</head>
<body>
    <main class="main">
        <section class="welcome">
            <h2>Courses</h2>
           
        </section>

        <section class="courses-list">
    <?php
    // Database query to fetch courses
    $query = "SELECT `course_id`, `course_name`, `description`, `teacher_id`, `created_at`, `course_pdf` FROM `courses` WHERE 1";
    $result = mysqli_query($conn, $query); // Assuming $conn is your DB connection variable

    // Check if there are any courses returned
    if (mysqli_num_rows($result) > 0) {
        // Loop through the courses and display them
        while ($course = mysqli_fetch_assoc($result)) {
            echo '<div class="course-card">';
            echo '<h3>' . $course['course_name'] . '</h3>';
            echo '<p>' . $course['description'] . '</p>';
            if (!empty($course['course_pdf'])) {
                echo '<button onclick="viewCourseDetails(\'' . $course['course_id'] . '\')">View Course</button>';
            }
            echo '</div>';
        }
    } else {
        echo '<p>No courses available.</p>';
    }
    ?>
</section>

        <section id="pdf-viewer" style="display: none;">
            <h2>Course PDF</h2>
            <iframe id="pdf-frame" style="width: 100%; height: 600px;" frameborder="0"></iframe>
            <button onclick="closePdfViewer()">Close</button>
        </section>

    </main>

    <script>
        function viewCourseDetails(courseId) {
            // Fetch the course PDF path from the server using AJAX or fetch.
            fetch('get_course_pdf.php?id=' + courseId)
                .then(response => response.json())
                .then(data => {
                    if (data.pdf_url) {
                        // Show the PDF viewer section
                        document.getElementById('pdf-viewer').style.display = 'block';
                        document.getElementById('pdf-frame').src = data.pdf_url;
                    } else {
                        alert('PDF not available for this course.');
                    }
                })
                .catch(error => {
                    console.error('Error fetching PDF:', error);
                    alert('Error fetching PDF.');
                });
        }

        function closePdfViewer() {
            // Hide the PDF viewer
            document.getElementById('pdf-viewer').style.display = 'none';
            document.getElementById('pdf-frame').src = ''; // Clear the iframe
        }
    </script>
</body>
</html>
