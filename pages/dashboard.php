<?php
include('../includes/db.php');
include('../includes/auth.php');

if (!is_logged_in()) {
    header('Location: login.php');
    exit();
}
?>

<?php include('../includes/header.php'); ?>
<main>
    <h1>Dashboard</h1>
    <?php if ($_SESSION['user_role'] == 'patient'): ?>
        <a href="book-appointment.php">Book an Appointment</a>
    <?php elseif ($_SESSION['user_role'] == 'doctor'): ?>
        <a href="manage-appointments.php">Manage Appointments</a>
    <?php elseif ($_SESSION['user_role'] == 'admin'): ?>
        <a href="admin.php">Admin Panel</a>
    <?php endif; ?>
</main>
<?php include('../includes/footer.php'); ?>
