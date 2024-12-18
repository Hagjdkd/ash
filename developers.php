<?php 
include 'plugin/head.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edmodo: A Social Learning Platform for Students and Teachers</title>
    <link rel="icon" href="logo.jpg">
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

        .subhead {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .about {
            display: flex;
            gap: 30px;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }

        /* Developer Card Styling */
        .abo {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            width: 280px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .abo img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .description-container {
            margin-top: 10px;
        }

        .name {
            font-size: 22px;
            color: #0056b3;
            margin-top: 10px;
        }

        .description {
            font-size: 16px;
            color: #555;
            margin-top: 10px;
            text-align: justify;
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .abo {
                width: 90%;
                margin: 10px auto;
            }

            .subhead {
                flex-direction: column;
            }

            .nav-button {
                margin-top: 10px;
            }
        }

    </style>
</head>
<body>

    <div class="sub">
        <div class="intr">THE DEVELOPERS</div>
        
        <div class="subhead">
            <button class="nav-button prev" id="prev" disabled>&lt;</button>
            
            <div class="about">
                <div class="one">
                    <div class="abo">
                        <img id="image" src="uploads/one.jpg" alt="Developer Image">
                    </div>
                    <div class="description-container">
                        <div class="name" id="name">JOASH MERCADO</div>
                        <div class="description" id="description"></div>
                    </div>
                </div>
                <div class="dots" id="dots"></div>
            </div>
            
            <button class="nav-button next" id="next">&gt;</button>
        </div>
    </div>

    <script>
        const developers = [
            {
                src: "uploads/joashpic.png",
                name: "JOASH MERCADO",
                desc: "Joash Mercado is an inspiring IT student who exemplifies dedication and perseverance in his academic journey. His passion for technology drives him to excel in his studies, constantly seeking to expand his knowledge in the ever-evolving field of Information Technology. His disciplined approach to learning, combined with his enthusiasm for solving complex problems, sets him apart as a standout student, always striving for excellence. In addition to his academic achievements, Joash is also an active and committed ROTC cadet. Balancing his demanding studies with his responsibilities in the Reserve Officers' Training Corps, he demonstrates remarkable leadership and time management skills. His participation in ROTC not only highlights his sense of duty and discipline but also his desire to serve and contribute to his community. Joash's ability to succeed in both academics and military training serves as a powerful example of dedication and hard work."
            },
            {
                src: "uploads/maribelpic.png",
                name: "MARIBEL CINCO",
                desc: "Maribel Cinco is an active and dedicated IT student, consistently demonstrating her passion for technology and her commitment to academic excellence. She approaches her studies with a strong work ethic, always striving to enhance her skills and knowledge in the field of Information Technology. Her enthusiasm for learning drives her to engage in various projects, which helps her grow both academically and professionally. Beyond her studies, Maribel is also recognized as a hardworking college student who excels in managing her time and responsibilities. Despite the challenges that come with balancing a demanding academic schedule, she remains focused and determined to succeed. Her persistence, resilience, and proactive approach to overcoming obstacles serve as an inspiration to her peers and a testament to her dedication to achieving her goals."
            }
        ];

        let currentIndex = 0;

        const imageElement = document.getElementById("image");
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
