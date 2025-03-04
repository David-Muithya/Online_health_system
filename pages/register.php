<?php
include('../includes/db.php');
include('../includes/auth.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    if (register($name, $email, $password, $role)) {
        header('Location: login.php');
        exit();
    } else {
        $error = "Registration failed. Please try again.";
    }
}
?>

<?php include('../includes/header.php'); ?>
<main>
    <h1>Register</h1>
    <form method="POST" action="register.php">
        <input type="text" name="name" placeholder="Full Name" required class="form-input">
        <input type="email" name="email" placeholder="Email" required class="form-input">
        <input type="password" name="password" placeholder="Password" required class="form-input">
        <select name="role" required class="form-input">
            <option value="patient">Patient</option>
            <option value="doctor">Doctor</option>
            <option value="admin">Admin</option>
        </select>
        <button type="submit" class="submit-btn">Register</button>
    </form>
    <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
</main>
<?php include('../includes/footer.php'); ?>
