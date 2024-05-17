<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="dashboard">
        <div class="sidebar">
            <div class="sidebar-header">
                <h2>Dashboard</h2>
            </div>
            <ul class="sidebar-menu">
                <li><a href="login.php" id="profileLink">Profile</a></li>
                <li><a href="aboutus.php" id="aboutUsLink">About Us</a></li>
                <li><a href="services.php" id="servicesLink">Services</a></li>
                <li><a href="signup.php" id="signupLink">Signup</a></li>
                <li><a href="manage_users.php" id="manage">Manage Users</a></li>
                <li><a href="logout.php" id="logoutLink">Log Out</a></li>
            </ul>
        </div>
        <div class="main-content" id="mainContent">
        <div id="welcomeSection" class="section">
                <h1>Welcome to the Dashboard</h1>
                <p>Select an option from the sidebar to get started.</p>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>

