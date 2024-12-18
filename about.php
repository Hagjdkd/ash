<?php 
include 'plugin/head.php'; // This will include your external head content
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- The head content from 'plugin/head.php' will be inserted here -->
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

        .welcome {
            background-color: #e0f7fa;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .welcome h2 {
            margin: 0 0 10px;
            color: #0056b3;
        }

        .subhead {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .about {
            max-width: 60%;
            text-align: center;
            margin: 0 auto; /* Center the section horizontally */
        }

        .name {
            font-size: 30px;
            margin-top: 10px;
            text-align: left;
        }

        .description {
            font-family: 'Calibri', sans-serif;
            font-size: 18px;
            color: #555;
            margin-top: 10px;
            text-align: justify;
            text-indent: 50px;
            line-height: 1.6;
        }

        .cards {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }

        .card h3 {
            margin: 0 0 10px;
            color: #0056b3;
        }

        .card p {
            color: #666;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .card button {
            background-color: #0056b3;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
        }

        .card button:hover {
            background-color: #003f7f;
        }

        .footer {
            background-color: #0056b3;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        @media (max-width: 768px) {
            /* Adjust the width of the about section for smaller screens */
            .about {
                max-width: 90%;
            }

            /* Reduce the font size for mobile screens */
            .name {
                font-size: 24px;
            }

            .description {
                font-size: 16px;
            }

            .cards {
                flex-direction: column; /* Stack the cards vertically */
                gap: 10px;
            }
        }
    </style>
</head>
<body>

    <div class="sub">
        <div class="welcome">
            <h2>Welcome to Edmodo</h2>
            <p>A Social Learning Platform for Students and Teachers</p>
        </div>

        <div class="subhead">
            <div class="about">
                <div class="one">
                    <div class="abo">
                        <div class="name" id="name">Edmodo - Behind The Scene</div>
                        <div class="description" id="description">
                            Edmodo was inspired by the challenges educators faced in connecting with students and fostering collaborative learning in the digital age. On November 01, 2023, founders Joash Mercado and Maribel Cinco, both curious about what they could achieve as IT students, envisioned a platform where learning could transcend traditional classroom boundaries. The idea was born when a friend suggested creating a web system to manage their meetings. Joash and his partner, Maribel, both students at the time, embraced the concept enthusiastically. This marked the beginning of their journey to develop Edmodo. Initial development was met with hurdles. Limited funding and technical barriers meant the duo often worked late nights, balancing academic responsibilities and their passion project. Despite setbacks, they remained committed to creating a user-centric platform. The first prototype of Edmodo launched earlier this year. The launch was a success, earning positive feedback, attracting investors, and even becoming a highlight in their academic performance, securing them an ace to their grade. Securing funding was a significant challenge. Early investors were skeptical about the profitability of an education-focused platform. However, a few saw the potential and provided the seed capital necessary to expand development efforts. As the user base grew, so did technical demands. Scaling servers to accommodate thousands of users required continuous innovation. The team expanded, bringing in engineers and educators to bridge technology and pedagogy seamlessly. Edmodo officially became a recognized platform in early 2024, gaining traction globally. Its features, such as assignment sharing, quizzes, and discussion boards, resonated with educators seeking to engage students in a dynamic, interactive way. The journey wasn’t without challenges. Competing with larger tech companies in the education sector and navigating data privacy concerns required constant adaptation. Transparency and trust became core principles of Edmodo’s ethos. Today, Edmodo serves millions worldwide, empowering teachers and students through a blend of social interaction and academic tools. It stands as a testament to the power of persistence and the importance of community-driven innovation in education. Looking back, the founders credit Edmodo’s success to their unwavering belief in the platform’s mission. From humble beginnings to a global impact, Edmodo remains dedicated to shaping the future of learning through technology.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cards">
            <div class="card">
                <h3>Feature 1</h3>
                <p>Learn more about our features and how they enhance learning.</p>
                <button>Explore</button>
            </div>
            <div class="card">
                <h3>Feature 2</h3>
                <p>Access resources to help with your educational journey.</p>
                <button>Explore</button>
            </div>
       

    <footer class="footer">
        <p>Edmodo &copy; 2024 | All Rights Reserved</p>
    </footer>

</body>
</html>
