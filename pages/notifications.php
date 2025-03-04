<?php
include('../includes/db.php');
include('../includes/auth.php');

if (!is_logged_in()) {
    header('Location: login.php');
    exit();
}

// Logic to fetch notifications
?>

<?php include('../includes/header.php'); ?>
<main>
    <h1>Notifications</h1>
    <!-- Display user notifications here -->
</main>
<?php include('../includes/footer.php'); ?>
