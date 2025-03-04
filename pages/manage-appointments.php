<?php
include('../includes/db.php');
include('../includes/auth.php');

if (!is_logged_in() || $_SESSION['user_role'] != 'doctor') {
    header('Location: login.php');
    exit();
}

// Logic to fetch and manage appointments for the doctor
?>

<?php include('../includes/header.php'); ?>
<main>
    <h1>Manage Appointments</h1>
    <!-- Display a list of appointments and provide options to cancel, reschedule, etc. -->
</main>
<?php include('../includes/footer.php'); ?>
