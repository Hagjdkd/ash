<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizzes - Practice Quiz</title>
    <link rel="icon" href="uploads/logo.jpg">
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
                <div class="quiz-question">
                    <p>5. Which language is commonly used for system-level programming?</p>
                    <input type="radio" name="quiz_5" value="A"> C<br>
                    <input type="radio" name="quiz_5" value="B"> Python<br>
                    <input type="radio" name="quiz_5" value="C"> JavaScript<br>
                    <input type="radio" name="quiz_5" value="D"> Java<br>
                </div>
                <div class="quiz-question">
                    <p>6. Which of the following is NOT a high-level programming language?</p>
                    <input type="radio" name="quiz_6" value="A"> Assembly<br>
                    <input type="radio" name="quiz_6" value="B"> Python<br>
                    <input type="radio" name="quiz_6" value="C"> Java<br>
                    <input type="radio" name="quiz_6" value="D"> Ruby<br>
                </div>
                <div class="quiz-question">
                    <p>7. What does an operating system do?</p>
                    <input type="radio" name="quiz_7" value="A"> Manages hardware and software resources<br>
                    <input type="radio" name="quiz_7" value="B"> Runs applications<br>
                    <input type="radio" name="quiz_7" value="C"> Stores files<br>
                    <input type="radio" name="quiz_7" value="D"> All of the above<br>
                </div>
                <div class="quiz-question">
                    <p>8. What is an algorithm?</p>
                    <input type="radio" name="quiz_8" value="A"> A step-by-step procedure for solving a problem<br>
                    <input type="radio" name="quiz_8" value="B"> A type of data structure<br>
                    <input type="radio" name="quiz_8" value="C"> A kind of computer virus<br>
                    <input type="radio" name="quiz_8" value="D"> A programming language<br>
                </div>
                <div class="quiz-question">
                    <p>9. What does the term 'debugging' refer to?</p>
                    <input type="radio" name="quiz_9" value="A"> Fixing errors in code<br>
                    <input type="radio" name="quiz_9" value="B"> Writing code<br>
                    <input type="radio" name="quiz_9" value="C"> Designing a program<br>
                    <input type="radio" name="quiz_9" value="D"> Running a program<br>
                </div>
                <div class="quiz-question">
                    <p>10. What is the purpose of a compiler?</p>
                    <input type="radio" name="quiz_10" value="A"> Translates code into machine language<br>
                    <input type="radio" name="quiz_10" value="B"> Runs the program<br>
                    <input type="radio" name="quiz_10" value="C"> Stores files<br>
                    <input type="radio" name="quiz_10" value="D"> Debugs code<br>
                </div>
                <div class="quiz-question">
                    <p>11. Which of the following is a popular programming language for web development?</p>
                    <input type="radio" name="quiz_11" value="A"> JavaScript<br>
                    <input type="radio" name="quiz_11" value="B"> C++<br>
                    <input type="radio" name="quiz_11" value="C"> Pascal<br>
                    <input type="radio" name="quiz_11" value="D"> COBOL<br>
                </div>
                <div class="quiz-question">
                    <p>12. What is a function in programming?</p>
                    <input type="radio" name="quiz_12" value="A"> A block of code that performs a specific task<br>
                    <input type="radio" name="quiz_12" value="B"> A type of variable<br>
                    <input type="radio" name="quiz_12" value="C"> A data structure<br>
                    <input type="radio" name="quiz_12" value="D"> A type of loop<br>
                </div>
                <div class="quiz-question">
                    <p>13. What does the 'return' statement do in a function?</p>
                    <input type="radio" name="quiz_13" value="A"> Ends the function and optionally returns a value<br>
                    <input type="radio" name="quiz_13" value="B"> Loops through the function<br>
                    <input type="radio" name="quiz_13" value="C"> Defines the function<br>
                    <input type="radio" name="quiz_13" value="D"> Declares a variable<br>
                </div>
                <div class="quiz-question">
                    <p>14. What is the purpose of the 'if' statement in programming?</p>
                    <input type="radio" name="quiz_14" value="A"> Makes decisions based on conditions<br>
                    <input type="radio" name="quiz_14" value="B"> Loops through a block of code<br>
                    <input type="radio" name="quiz_14" value="C"> Defines a function<br>
                    <input type="radio" name="quiz_14" value="D"> Stores data<br>
                </div>
                <div class="quiz-question">
                    <p>15. Which of the following is NOT an example of a data type in programming?</p>
                    <input type="radio" name="quiz_15" value="A"> String<br>
                    <input type="radio" name="quiz_15" value="B"> Integer<br>
                    <input type="radio" name="quiz_15" value="C"> Loop<br>
                    <input type="radio" name="quiz_15" value="D"> Boolean<br>
                </div>
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
                    <input type="radio" name="quiz_4" value="C"> Writing complex algorithms<br>
                    <input type="radio" name="quiz_4" value="D"> Debugging programs<br>
                </div>
                <div class="quiz-question">
                    <p>5. In the table example, what is the name of the data structure discussed?</p>
                    <input type="radio" name="quiz_5" value="A"> Hash table<br>
                    <input type="radio" name="quiz_5" value="B"> Array<br>
                    <input type="radio" name="quiz_5" value="C"> Linked list<br>
                    <input type="radio" name="quiz_5" value="D"> Stack<br>
                </div>
                <div class="quiz-question">
                    <p>6. What is an essential element to have in order to efficiently store and retrieve data?</p>
                    <input type="radio" name="quiz_6" value="A"> A hash function<br>
                    <input type="radio" name="quiz_6" value="B"> Recursion<br>
                    <input type="radio" name="quiz_6" value="C"> Looping<br>
                    <input type="radio" name="quiz_6" value="D"> Arrays<br>
                </div>
                <div class="quiz-question">
                    <p>7. Which algorithmic approach is essential for solving the task in the table example?</p>
                    <input type="radio" name="quiz_7" value="A"> Searching<br>
                    <input type="radio" name="quiz_7" value="B"> Sorting<br>
                    <input type="radio" name="quiz_7" value="C"> Recursion<br>
                    <input type="radio" name="quiz_7" value="D"> Dynamic programming<br>
                </div>
                <div class="quiz-question">
                    <p>8. What is a key feature of the hash table?</p>
                    <input type="radio" name="quiz_8" value="A"> It uses a key/value pair<br>
                    <input type="radio" name="quiz_8" value="B"> It uses an index for storage<br>
                    <input type="radio" name="quiz_8" value="C"> It stores data sequentially<br>
                    <input type="radio" name="quiz_8" value="D"> It requires a linked list for storage<br>
                </div>
                <div class="quiz-question">
                    <p>9. What is the concept of hash collisions?</p>
                    <input type="radio" name="quiz_9" value="A"> When two keys hash to the same index<br>
                    <input type="radio" name="quiz_9" value="B"> When two values have the same data type<br>
                    <input type="radio" name="quiz_9" value="C"> When a hash table reaches its size limit<br>
                    <input type="radio" name="quiz_9" value="D"> When two tables are compared for equality<br>
                </div>
                <div class="quiz-question">
                    <p>10. What is an essential part of a hash function?</p>
                    <input type="radio" name="quiz_10" value="A"> It takes input and returns an index<br>
                    <input type="radio" name="quiz_10" value="B"> It stores data<br>
                    <input type="radio" name="quiz_10" value="C"> It performs arithmetic operations<br>
                    <input type="radio" name="quiz_10" value="D"> It creates loops<br>
                </div>
                <div class="quiz-question">
                    <p>11. What can help reduce hash collisions?</p>
                    <input type="radio" name="quiz_11" value="A"> A better hash function<br>
                    <input type="radio" name="quiz_11" value="B"> Larger memory<br>
                    <input type="radio" name="quiz_11" value="C"> More recursion<br>
                    <input type="radio" name="quiz_11" value="D"> Avoiding data structures<br>
                </div>
                <div class="quiz-question">
                    <p>12. What is an example of a problem solved by algorithms and data structures?</p>
                    <input type="radio" name="quiz_12" value="A"> Searching for an item in a list<br>
                    <input type="radio" name="quiz_12" value="B"> Writing code<br>
                    <input type="radio" name="quiz_12" value="C"> Designing a user interface<br>
                    <input type="radio" name="quiz_12" value="D"> Compiling code<br>
                </div>
                <div class="quiz-question">
                    <p>13. Which data structure is often used to implement recursion?</p>
                    <input type="radio" name="quiz_13" value="A"> Stack<br>
                    <input type="radio" name="quiz_13" value="B"> Queue<br>
                    <input type="radio" name="quiz_13" value="C"> Array<br>
                    <input type="radio" name="quiz_13" value="D"> Linked list<br>
                </div>
                <div class="quiz-question">
                    <p>14. What is an example of a sorting algorithm?</p>
                    <input type="radio" name="quiz_14" value="A"> Quick sort<br>
                    <input type="radio" name="quiz_14" value="B"> Binary search<br>
                    <input type="radio" name="quiz_14" value="C"> BFS<br>
                    <input type="radio" name="quiz_14" value="D"> Recursion<br>
                </div>
                <div class="quiz-question">
                    <p>15. What is the time complexity of linear search?</p>
                    <input type="radio" name="quiz_15" value="A"> O(n)<br>
                    <input type="radio" name="quiz_15" value="B"> O(log n)<br>
                    <input type="radio" name="quiz_15" value="C"> O(1)<br>
                    <input type="radio" name="quiz_15" value="D"> O(n^2)<br>
                </div>
            </div>
            <button type="submit">Submit Quiz</button>
        </form>
        <div id="module2-result" class="quiz-result"></div>
        <button onclick="window.location.href='student_dashboard.php'">Back to Dashboard</button>
    </div>

    <!-- Module 3: Web Development -->
    <div class="quiz-module" id="module3">
        <h2>Module 3: Web Development</h2>
        <form id="quizForm3" onsubmit="return validateQuiz('module3', quizAnswers3)">
            <div class="quiz-questions">
                <div class="quiz-question">
                    <p>1. What does HTML stand for?</p>
                    <input type="radio" name="quiz_1" value="A"> HyperText Markup Language<br>
                    <input type="radio" name="quiz_1" value="B"> HyperText Machine Language<br>
                    <input type="radio" name="quiz_1" value="C"> HomeText Markup Language<br>
                    <input type="radio" name="quiz_1" value="D"> HyperTransfer Markup Language<br>
                </div>
                <div class="quiz-question">
                    <p>2. What does CSS stand for?</p>
                    <input type="radio" name="quiz_2" value="A"> Computer Style Sheets<br>
                    <input type="radio" name="quiz_2" value="B"> Cascading Style Sheets<br>
                    <input type="radio" name="quiz_2" value="C"> Creative Style Sheets<br>
                    <input type="radio" name="quiz_2" value="D"> Colorful Style Sheets<br>
                </div>
                <div class="quiz-question">
                    <p>3. Which tag is used to define a hyperlink in HTML?</p>
                    <input type="radio" name="quiz_3" value="A">< a ><br>
                    <input type="radio" name="quiz_3" value="B"> < link ><br>
                    <input type="radio" name="quiz_3" value="C"> < href ><br>
                    <input type="radio" name="quiz_3" value="D"> < hyperlink ><br>
                </div>
                <div class="quiz-question">
                    <p>4. Which tag is used to define the largest heading in HTML?</p>
                    <input type="radio" name="quiz_4" value="A"> < h6 ><br>
                    <input type="radio" name="quiz_4" value="B"> < h1 ><br>
                    <input type="radio" name="quiz_4" value="C"> < head ><br>
                    <input type="radio" name="quiz_4" value="D"> < header ><br>
                </div>
                <div class="quiz-question">
                    <p>5. Which attribute is used to specify the destination of a hyperlink?</p>
                    <input type="radio" name="quiz_5" value="A"> src<br>
                    <input type="radio" name="quiz_5" value="B"> href<br>
                    <input type="radio" name="quiz_5" value="C"> target<br>
                    <input type="radio" name="quiz_5" value="D"> link<br>
                </div>
                <div class="quiz-question">
                    <p>6. Which of the following is the correct syntax for a CSS comment?</p>
                    <input type="radio" name="quiz_6" value="A"> < !-- Comment -- ><br>
                    <input type="radio" name="quiz_6" value="B"> /* Comment */<br>
                    <input type="radio" name="quiz_6" value="C"> // Comment<br>
                    <input type="radio" name="quiz_6" value="D"> \\ Comment<br>
                </div>
                <div class="quiz-question">
                    <p>7. What is the purpose of JavaScript in web development?</p>
                    <input type="radio" name="quiz_7" value="A"> To structure the content of a webpage<br>
                    <input type="radio" name="quiz_7" value="B"> To style a webpage<br>
                    <input type="radio" name="quiz_7" value="C"> To add interactivity to a webpage<br>
                    <input type="radio" name="quiz_7" value="D"> To store data on the server<br>
                </div>
                <div class="quiz-question">
                    <p>8. What does the 'box model' in CSS refer to?</p>
                    <input type="radio" name="quiz_8" value="A"> The layout of elements on the page<br>
                    <input type="radio" name="quiz_8" value="B"> The size and spacing of elements<br>
                    <input type="radio" name="quiz_8" value="C"> The text formatting<br>
                    <input type="radio" name="quiz_8" value="D"> The position of the page header<br>
                </div>
                <div class="quiz-question">
                    <p>9. What is the purpose of the 'div' tag in HTML?</p>
                    <input type="radio" name="quiz_9" value="A"> To define sections of a page<br>
                    <input type="radio" name="quiz_9" value="B"> To create links<br>
                    <input type="radio" name="quiz_9" value="C"> To define tables<br>
                    <input type="radio" name="quiz_9" value="D"> To define images<br>
                </div>
                <div class="quiz-question">
                    <p>10. What is the correct way to link a CSS file in HTML?</p>
                    <input type="radio" name="quiz_10" value="A"> < link rel="stylesheet" href="style.css"><br>
                    <input type="radio" name="quiz_10" value="B"> < style src="style.css"></style><br>
                    <input type="radio" name="quiz_10" value="C"> < script src="style.css"></script><br>
                    <input type="radio" name="quiz_10" value="D"> < css link="style.css"></css><br>
                </div>
                <div class="quiz-question">
                    <p>11. What is the correct way to write a JavaScript function?</p>
                    <input type="radio" name="quiz_11" value="A"> function myFunction() {<br>
                    <input type="radio" name="quiz_11" value="B"> def myFunction() {<br>
                    <input type="radio" name="quiz_11" value="C"> func myFunction() {<br>
                    <input type="radio" name="quiz_11" value="D"> function: myFunction() {<br>
                </div>
                <div class="quiz-question">
                    <p>12. What is an event listener in JavaScript?</p>
                    <input type="radio" name="quiz_12" value="A"> A function that waits for a specific event to occur<br>
                    <input type="radio" name="quiz_12" value="B"> A function that changes the style of an element<br>
                    <input type="radio" name="quiz_12" value="C"> A function that defines an event<br>
                    <input type="radio" name="quiz_12" value="D"> A function that returns an event's details<br>
                </div>
                <div class="quiz-question">
                    <p>13. What does the 'display' property in CSS control?</p>
                    <input type="radio" name="quiz_13" value="A"> The visibility of elements<br>
                    <input type="radio" name="quiz_13" value="B"> The width of elements<br>
                    <input type="radio" name="quiz_13" value="C"> The layout of elements<br>
                    <input type="radio" name="quiz_13" value="D"> The background color<br>
                </div>
                <div class="quiz-question">
                    <p>14. What is the purpose of the 'alt' attribute in the 'img' tag?</p>
                    <input type="radio" name="quiz_14" value="A"> To specify an alternative text when the image cannot be displayed<br>
                    <input type="radio" name="quiz_14" value="B"> To define the width of the image<br>
                    <input type="radio" name="quiz_14" value="C"> To add a caption to the image<br>
                    <input type="radio" name="quiz_14" value="D"> To define the image's file path<br>
                </div>
                <div class="quiz-question">
                    <p>15. What is the function of the 'position' property in CSS?</p>
                    <input type="radio" name="quiz_15" value="A"> To define the positioning of an element<br>
                    <input type="radio" name="quiz_15" value="B"> To change the background color<br>
                    <input type="radio" name="quiz_15" value="C"> To change the font style<br>
                    <input type="radio" name="quiz_15" value="D"> To change the element's border<br>
                </div>
            </div>
            <button type="submit">Submit Quiz</button>
        </form>
        <div id="module3-result" class="quiz-result"></div>
        <button onclick="window.location.href='student_dashboard.php'">Back to Dashboard</button>
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
        const quizAnswers1 = ['A', 'B', 'C', 'D', 'A', 'B', 'A', 'B', 'A', 'A', 'A', 'A', 'A', 'A', 'A'];
    const quizAnswers2 = ['A', 'B', 'A', 'B', 'A', 'A', 'B', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A'];
    const quizAnswers3 = ['A', 'B', 'A', 'B', 'B', 'B', 'C', 'B', 'A', 'A', 'A', 'A', 'C', 'A', 'A'];

        // Function to validate quiz and show result
        function validateQuiz(module, answers) {
            const form = document.getElementById('quizForm' + module.charAt(module.length - 1));
            const resultDiv = document.getElementById(module + '-result');
            let score = 0;
            let total = answers.length;

            // Validate answers
            for (let i = 0; i < total; i++) {
                const question = form.querySelector(`input[name="quiz_${i + 1}"]:checked`);
                if (question && question.value === answers[i]) {
                    score++;
                }
            }

            // Display result
            resultDiv.innerHTML = `You scored ${score} out of ${total}.`;
            return false; // Prevent form submission
        }
    </script>
</body>
</html>
