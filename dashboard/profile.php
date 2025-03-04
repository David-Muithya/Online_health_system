<?php
include('../includes/db.php');
include('../includes/auth.php');

if (!is_logged_in()) {
    header('Location: ../pages/login.php');
    exit();
}

// Fetch and update user profile information
?>

<?php include('../includes/header.php'); ?>
<main>
    <h1>Your Profile</h1>
    <form method="POST" action="profile.php">
        <input type="text" name="name" value="<?php echo $_SESSION['user_name']; ?>" required class="form-input">
        <input type="email" name="email" value="<?php echo $_SESSION['user_email']; ?>" required class="form-input">
        <button type="submit" class="submit-btn">Update Profile</button>
    </form>
</main>
<?php include('../includes/footer.php'); ?>
