<?php 
include 'plugin/head.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edmodo: A Social Learning Platform for Students and Teachers</title>
    <link rel="icon" href="uploads/logo.jpg">
    <style>
        /* General Body Styling */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }

        .sub {
            padding: 20px;
            background-color: #f9f9f9;
            height: auto;
        }

        /* Section Title */
        .intr {
            font-size: 40px;
            text-align: center;
            margin-bottom: 30px;
            font-family: 'Times', serif;
        }

        /* Main Subhead Layout */
        .subhead {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .content-container {
            background-color: #6ea8dc;
            padding: 30px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            color: white;
            gap: 20px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            max-width: 900px;
            margin: auto;
        }

        /* Left Image Styling */
        .law-image img {
            width: 100%;
            height: 400px;
            border-radius: 10px;
        }

        /* Right Text Content */
        .text-content {
            flex: 2;
            text-align: justify;
            font-family: Times;
        }

        .text-content h2 {
            margin-bottom: 10px;
        }

        .text-content p {
            line-height: 1.6;
        }

        /* Navigation Buttons */
        .nav-button {
            background-color: #0056b3;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        .nav-button:hover {
            background-color: #003f7f;
        }

        .nav-button:disabled {
            background-color: #cccccc;
            cursor: not-allowed;
        }

        /* Dots Navigation */
        .dots {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #ddd;
            cursor: pointer;
        }

        .dot.active {
            background-color: #0056b3;
        }

        @media (max-width: 768px) {
            .content-container {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>
<body>

<div class="sub">
    <div class="intr">THE DEVELOPERS</div>
    
    <div class="subhead">
        <button class="nav-button prev" id="prev" disabled>&lt;</button>
        
        <div class="content-container">
            <!-- Left Image -->
            <div class="law-image">
                <img id="law-img" src="uploads/joashpic.png" alt="Developer Image">
            </div>
            <hr style="width: 1px; height: 300px; background-color: white; border: none">
            <!-- Right Content -->
            <div class="text-content">
                <h2 id="name">JOASH MERCADO</h2>
                <p id="description">
                    Joash Mercado is an inspiring IT student who exemplifies dedication and perseverance in his academic journey. His passion for technology drives him to excel in his studies, constantly seeking to expand his knowledge in the ever-evolving field of Information Technology. His disciplined approach to learning, combined with his enthusiasm for solving complex problems, sets him apart as a standout student.
                </p>
            </div>
        </div>
        
        <button class="nav-button next" id="next">&gt;</button>
    </div>

    <!-- Dots Navigation -->
    <div class="dots" id="dots"></div>
</div>

<script>
    const developers = [
        {
            src: "uploads/joashpic.png",
            name: "JOASH MERCADO",
            desc: "Joash Mercado is an inspiring IT student who exemplifies dedication and perseverance in his academic journey. His passion for technology drives him to excel in his studies, constantly seeking to expand his knowledge in the ever-evolving field of Information Technology. His disciplined approach to learning, combined with his enthusiasm for solving complex problems, sets him apart as a standout student."
        },
        {
            src: "uploads/maribelpic.png",
            name: "MARIBEL CINCO",
            desc: "Maribel Cinco is an active and dedicated IT student, consistently demonstrating her passion for technology and her commitment to academic excellence. She approaches her studies with a strong work ethic, always striving to enhance her skills and knowledge in the field of Information Technology."
        }
    ];

    let currentIndex = 0;

    const imageElement = document.getElementById("law-img");
    const nameElement = document.getElementById("name");
    const descriptionElement = document.getElementById("description");
    const dotsElement = document.getElementById("dots");
    const prevButton = document.getElementById("prev");
    const nextButton = document.getElementById("next");

    function updateDeveloper() {
        const currentDeveloper = developers[currentIndex];
        imageElement.src = currentDeveloper.src;
        nameElement.textContent = currentDeveloper.name;
        descriptionElement.textContent = currentDeveloper.desc;

        prevButton.disabled = currentIndex === 0;
        nextButton.disabled = currentIndex === developers.length - 1;

        document.querySelectorAll(".dot").forEach((dot, index) => {
            dot.classList.toggle("active", index === currentIndex);
        });
    }

    function createDots() {
        developers.forEach((_, index) => {
            const dot = document.createElement("div");
            dot.classList.add("dot");
            if (index === currentIndex) dot.classList.add("active");
            dot.addEventListener("click", () => {
                currentIndex = index;
                updateDeveloper();
            });
            dotsElement.appendChild(dot);
        });
    }

    prevButton.addEventListener("click", () => {
        if (currentIndex > 0) currentIndex--;
        updateDeveloper();
    });

    nextButton.addEventListener("click", () => {
        if (currentIndex < developers.length - 1) currentIndex++;
        updateDeveloper();
    });

    createDots();
    updateDeveloper();
</script>

</body>
</html>
