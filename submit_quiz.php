<?php
// Include database connection
include 'database.php';

// Check if the quiz form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Initialize score
    $score = 0;

    // Iterate over all quiz questions and check the answers
    foreach ($_POST as $quiz_id => $selected_option) {
        if (strpos($quiz_id, 'quiz_') === 0) {
            // Extract the quiz ID from the form field name
            $quiz_id = substr($quiz_id, 5);
            
            // Query to fetch the correct answer for this quiz question
            $quiz_query = "SELECT `correct_option` FROM `quizzes` WHERE `quiz_id` = ?";
            $stmt = mysqli_prepare($conn, $quiz_query);
            mysqli_stmt_bind_param($stmt, "i", $quiz_id);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $quiz = mysqli_fetch_assoc($result);

            // Check if the selected option is correct
            if ($quiz && $selected_option === $quiz['correct_option']) {
                $score++;
            }
        }
    }

    // Display the result
    echo "<p>Your score: $score/20</p>";
    echo "<a href='courses.php'>Back to Courses</a>";
} else {
    echo "<p>No quiz submitted.</p>";
}
?>
