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

        .intr {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Styling for the main features heading */
        .intr:first-child {
            font-size: 20px;
            font-family: 'Times', serif;
            margin-bottom: 10px;
        }

        .intr:nth-child(2) {
            font-size: 30px;
            font-family: 'Verdana', sans-serif;
            margin-bottom: 30px;
        }

        .subhead {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .about {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .abo {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            width: 280px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .abo img {
            width: 100%;
            height: auto;
            border-radius: 10px;
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .abo {
                width: 90%;
                margin: 10px auto;
            }
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
    </style>
</head>
<body>

    <div class="sub">
        <div style="line-height: 10px;">
            <div class="intr">FEATURES</div>
            <div class="intr">Our Features & Services</div>
        </div>
        
        <div class="subhead">
            <div class="about">
                <div class="abo">
                    <img id="image" src="uploads/adap.jpg" alt="Adaptive Learning">
                    <div class="name" id="name">Adaptive Learning Module</div>
                    <div class="description" id="description">
                        Edmodo enables the learners to adapt to changes in the studying platform where they can choose to learn general knowledge with this platform.
                    </div>
                </div>
                <div class="abo">
                    <img id="image" src="uploads/se.jpg" alt="Collaboration">
                    <div class="name" id="name">Self Learning</div>
                    <div class="description" id="description">
                    The educational platform empowers learners to take control of their learning journey by providing tools, resources, and mechanisms that enable independent exploration, practice, and progress monitoring.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>Edmodo &copy; 2024 | All Rights Reserved</p>
    </footer>

</body>
</html>
