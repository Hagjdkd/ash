<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizzes - Practice Quiz</title>
    <link rel="stylesheet" href="quiz.css">
</head>
<body>
<button onclick="window.location.href='student_dashboard.php'">Back to Dashboard</button>

    <!-- Top Navigation Buttons -->
    <div class="top-buttons">
        <button onclick="showModule('module1')">Module 1: Intro to Programming</button>
        <button onclick="showModule('module2')">Module 2: Algorithms and Data Structures</button>
        <button onclick="showModule('module3')">Module 3: Web Development</button>
    </div>

    <!-- Module 1: Intro to Programming -->
    <div class="quiz-module" id="module1">
        <h2>Module 1: Intro to Programming</h2>
        <form id="quizForm1" onsubmit="return validateQuiz('module1', quizAnswers1)">
            <div class="quiz-questions">
                <div class="quiz-question">
                    <p>1. What are the two main types of computer memory?</p>
                    <input type="radio" name="quiz_1" value="A"> RAM and ROM<br>
                    <input type="radio" name="quiz_1" value="B"> Hard Drive and SSD<br>
                    <input type="radio" name="quiz_1" value="C"> CPU and GPU<br>
                    <input type="radio" name="quiz_1" value="D"> RAM and Cache<br>
                </div>
                <div class="quiz-question">
                    <p>2. What is the difference between RAM and ROM?</p>
                    <input type="radio" name="quiz_2" value="A"> RAM is volatile and ROM is non-volatile<br>
                    <input type="radio" name="quiz_2" value="B"> RAM is used for storage while ROM is for processing<br>
                    <input type="radio" name="quiz_2" value="C"> RAM is for system software, ROM for application software<br>
                    <input type="radio" name="quiz_2" value="D"> RAM is used for input, ROM for output<br>
                </div>
                <div class="quiz-question">
                    <p>3. What is the purpose of the Arithmetic and Logic Unit (ALU)?</p>
                    <input type="radio" name="quiz_3" value="A"> To perform arithmetic and logic operations<br>
                    <input type="radio" name="quiz_3" value="B"> To supervise the overall operation of the computer<br>
                    <input type="radio" name="quiz_3" value="C"> To manage input and output devices<br>
                    <input type="radio" name="quiz_3" value="D"> To store instructions in memory<br>
                </div>
                <div class="quiz-question">
                    <p>4. What is the purpose of the Central Processing Unit (CPU)?</p>
                    <input type="radio" name="quiz_4" value="A"> To supervise the overall operation of the computer<br>
                    <input type="radio" name="quiz_4" value="B"> To store program data<br>
                    <input type="radio" name="quiz_4" value="C"> To display the user interface<br>
                    <input type="radio" name="quiz_4" value="D"> To manage network communications<br>
                </div>
                <!-- Add more questions up to 15 -->
            </div>
            <button type="submit">Submit Quiz</button>
        </form>
        <div id="module1-result" class="quiz-result"></div>
        <button onclick="window.location.href='student_dashboard.php'">Back to Dashboard</button>

    </div>

    <!-- Module 2: Algorithms and Data Structures -->
    <div class="quiz-module" id="module2">
        <h2>Module 2: Algorithms and Data Structures</h2>
        <form id="quizForm2" onsubmit="return validateQuiz('module2', quizAnswers2)">
            <div class="quiz-questions">
                <div class="quiz-question">
                    <p>1. What is the primary goal of the lecture discussed in the PDF?</p>
                    <input type="radio" name="quiz_1" value="A"> To introduce common data structures and algorithms<br>
                    <input type="radio" name="quiz_1" value="B"> To teach about algorithms only<br>
                    <input type="radio" name="quiz_1" value="C"> To explain memory management<br>
                    <input type="radio" name="quiz_1" value="D"> To discuss machine learning concepts<br>
                </div>
                <div class="quiz-question">
                    <p>2. According to Kernighan and Pike, what is a key aspect of programming that every program relies on?</p>
                    <input type="radio" name="quiz_2" value="A"> Algorithms and data structures<br>
                    <input type="radio" name="quiz_2" value="B"> Code formatting and design<br>
                    <input type="radio" name="quiz_2" value="C"> Software testing<br>
                    <input type="radio" name="quiz_2" value="D"> User interface design<br>
                </div>
                <div class="quiz-question">
                    <p>3. What is the main difference between a bad programmer and a good one, according to Linus Torvalds?</p>
                    <input type="radio" name="quiz_3" value="A"> A good programmer prioritizes data structures and their relationships<br>
                    <input type="radio" name="quiz_3" value="B"> A good programmer focuses on syntax and language<br>
                    <input type="radio" name="quiz_3" value="C"> A good programmer writes code quickly<br>
                    <input type="radio" name="quiz_3" value="D"> A good programmer avoids documentation<br>
                </div>
                <div class="quiz-question">
                    <p>4. What is the common task that the lecture uses as an example?</p>
                    <input type="radio" name="quiz_4" value="A"> Maintaining a table of key/value pairs<br>
                    <input type="radio" name="quiz_4" value="B"> Sorting numbers<br>
                    <input type="radio" name="quiz_4" value="C"> Searching for keywords<br>
                    <input type="radio" name="quiz_4" value="D"> Calculating statistics<br>
                </div>
                <!-- Add more questions up to 15 -->
            </div>
            <button type="submit">Submit Quiz</button>
        </form>
        <div id="module2-result" class="quiz-result"></div>
       
    </div>

    <!-- Module 3: Web Development -->
    <div class="quiz-module" id="module3">
        <h2>Module 3: Web Development</h2>
        <form id="quizForm3" onsubmit="return validateQuiz('module3', quizAnswers3)">
            <div class="quiz-questions">
                <div class="quiz-question">
                    <p>1. What are the three main interactive elements on the internet?</p>
                    <input type="radio" name="quiz_1" value="A"> Websites, servers, browsers<br>
                    <input type="radio" name="quiz_1" value="B"> Websites, email, file servers<br>
                    <input type="radio" name="quiz_1" value="C"> Websites, databases, APIs<br>
                    <input type="radio" name="quiz_1" value="D"> Servers, browsers, search engines<br>
                </div>
                <div class="quiz-question">
                    <p>2. What are the two main parts of a website?</p>
                    <input type="radio" name="quiz_2" value="A"> Frontend (client side) and backend (server side)<br>
                    <input type="radio" name="quiz_2" value="B"> HTML and CSS<br>
                    <input type="radio" name="quiz_2" value="C"> JavaScript and jQuery<br>
                    <input type="radio" name="quiz_2" value="D"> Web server and database<br>
                </div>
                <div class="quiz-question">
                    <p>3. What are the three primary languages used to build websites?</p>
                    <input type="radio" name="quiz_3" value="A"> HTML, CSS, JavaScript<br>
                    <input type="radio" name="quiz_3" value="B"> Python, PHP, Ruby<br>
                    <input type="radio" name="quiz_3" value="C"> Java, Swift, Kotlin<br>
                    <input type="radio" name="quiz_3" value="D"> HTML, PHP, JavaScript<br>
                </div>
                <div class="quiz-question">
                    <p>4. What is the purpose of HTML?</p>
                    <input type="radio" name="quiz_4" value="A"> To define the essential elements of a website<br>
                    <input type="radio" name="quiz_4" value="B"> To manage the appearance of a website<br>
                    <input type="radio" name="quiz_4" value="C"> To control the behavior of a website<br>
                    <input type="radio" name="quiz_4" value="D"> To store data for the website<br>
                </div>
                <!-- Add more questions up to 15 -->
            </div>
            <button type="submit">Submit Quiz</button>
        </form>
        <div id="module3-result" class="quiz-result"></div>

    </div>


    <script>
        // Function to show the selected quiz module
        function showModule(moduleId) {
            var modules = document.querySelectorAll('.quiz-module');
            modules.forEach(function(module) {
                module.style.display = 'none';
            });
            var selectedModule = document.getElementById(moduleId);
            selectedModule.style.display = 'block';
        }

        // Define correct answers for all modules
        const quizAnswers1 = ['A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A'];
        const quizAnswers2 = ['A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A'];
        const quizAnswers3 = ['A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A'];

        // Validate quiz answers
        function validateQuiz(module, answers) {
            var form = document.getElementById('quizForm' + module.charAt(module.length - 1));
            var resultDiv = document.getElementById(module + '-result');
            var score = 0;

            for (let i = 0; i < answers.length; i++) {
                var selectedAnswer = form.querySelector('input[name="quiz_' + (i + 1) + '"]:checked');
                if (selectedAnswer && selectedAnswer.value === answers[i]) {
                    score++;
                }
            }

            resultDiv.innerHTML = `You scored ${score} out of ${answers.length}.`;
            return false;
        }
    </script>
</body>
</html>
