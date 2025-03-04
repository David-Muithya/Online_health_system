<?php
include('../includes/db.php');
include('../includes/auth.php');

if (!is_logged_in() || $_SESSION['user_role'] != 'patient') {
    header('Location: login.php');
    exit();
}

// Handle booking logic here
?>

<?php include('../includes/header.php'); ?>
<main>
    <h1>Book Appointment</h1>
    <form method="POST" action="book-appointment.php">
        <!-- Add fields to select a doctor, time, etc. -->
        <input type="text" name="doctor" placeholder="Doctor Name" required class="form-input">
        <input type="datetime-local" name="appointment_time" required class="form-input">
        <button type="submit" class="submit-btn">Book Appointment</button>
    </form>
</main>
<?php include('../includes/footer.php'); ?>
