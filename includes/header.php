<?php
include('auth.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Health Appointment System</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="../pages/index.php">Home</a></li>
                <li><a href="../pages/about.php">About</a></li>
                <?php if (is_logged_in()): ?>
                    <li><a href="../pages/dashboard.php">Dashboard</a></li>
                    <li><a href="../pages/logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="../pages/login.php">Login</a></li>
                    <li><a href="../pages/register.php">Register</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
</body>
</html>
