<?php 
include 'plugin/head.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Events - Edmodo</title>
    <style>
      /* events.css */

/* General body and layout */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f7fc;
    margin: 0;
    padding: 0;
}

.main {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

/* Header section */
.welcome {
    text-align: center;
    margin-bottom: 30px;
}

.welcome h2 {
    font-size: 2.5rem;
    color: #333;
    margin-bottom: 10px;
}

.welcome p {
    font-size: 1.1rem;
    color: #666;
}

/* Events section */
.events {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 20px;
}

.event-card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}

.event-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

.event-card h3 {
    font-size: 1.8rem;
    color: #333;
    margin-bottom: 10px;
}

.event-card p {
    font-size: 1rem;
    color: #555;
    margin: 5px 0;
}

.event-card button {
    background-color: #007BFF;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
    text-align: center;
    margin-top: 10px;
    transition: background-color 0.3s;
}

.event-card button a {
    text-decoration: none;
    color: inherit;
}

.event-card button:hover {
    background-color: #0056b3;
}

/* Mobile responsiveness */
@media (max-width: 768px) {
    .welcome h2 {
        font-size: 2rem;
    }

    .welcome p {
        font-size: 1rem;
    }

    .event-card h3 {
        font-size: 1.5rem;
    }

    .event-card p {
        font-size: 0.95rem;
    }
}

    </style>
    <link rel="icon" href="uploads/logo.jpg" alt="Edmodo logo">
</head>
<body>
    <main class="main">
        <section class="welcome">
            <h2>Upcoming Events</h2>
            <p>Stay updated with the latest deadlines, workshops, and events!</p>
        </section>

        <section class="events">
            <div class="event-card">
                <h3>Event 1: Coding Bootcamp</h3>
                <p><strong>Date:</strong> January 10, 2024</p>
                <p><strong>Location:</strong> Online</p>
                <p>A hands-on coding workshop to level up your programming skills. All levels welcome!</p>
            </div>

            <div class="event-card">
                <h3>Event 2: Web Development Workshop</h3>
                <p><strong>Date:</strong> February 5, 2024</p>
                <p><strong>Location:</strong> Campus Auditorium</p>
                <p>Join us for an interactive session on building modern websites using HTML, CSS, and JavaScript.</p>
            </div>

            <div class="event-card">
                <h3>Event 3: Algorithm Design Challenge</h3>
                <p><strong>Date:</strong> March 15, 2024</p>
                <p><strong>Location:</strong> Online</p>
                <p>Test your problem-solving skills in our exciting algorithm challenge! Great prizes for top performers.</p>
            </div>

            <!-- Additional event cards can be added here -->

        </section>
    </main>

    <script>
        // Add any necessary JavaScript functionality here, such as event handling or dynamic content loading
    </script>
</body>
</html>
