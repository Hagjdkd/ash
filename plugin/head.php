<!-- header.php -->
<style>
  
.header {
    background-color: #0056b3;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.header .logo {
    display: flex;
    align-items: center;
}

.header .logo img {
    width: 50px;
    height: 50px;
    margin-right: 10px;
    border-radius: 50%;
}

.header h1 {
    margin: 0;
    font-size: 24px;
}

.nav ul {
    list-style: none;
    display: flex;
    gap: 15px;
    margin: 0;
    padding: 0;
}

.nav ul li {
    margin: 0;
}

.nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 16px;
}

.nav ul li a:hover {
    text-decoration: underline;
}
</style>
<header class="header">
    <div class="logo">
        <img src="uploads/logo.jpg" alt="Edmodo Logo">
        <h1>Edmodo</h1>
    </div>
    <nav class="nav">
    <ul class="nav-links">
        <li><a href="student_dashboard.php">Home</a></li>
        <li><a href="about.php">About</a></li>   
        <li><a href="services.php">Services</a></li>
        <li><a href="developers.php">Developers</a></li>
        <li><a href="logout.php">Log out</a></li>
    </ul>
    </nav>
</header>
