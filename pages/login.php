<?php
include('../includes/db.php');
include('../includes/auth.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (login($email, $password)) {
        header('Location: dashboard.php');
        exit();
    } else {
        $error = "Invalid credentials. Please try again.";
    }
}
?>

<?php include('../includes/header.php'); ?>
<main>
    <h1>Login</h1>
    <form method="POST" action="login.php">
        <input type="email" name="email" placeholder="Email" required class="form-input">
        <input type="password" name="password" placeholder="Password" required class="form-input">
        <button type="submit" class="submit-btn">Login</button>
    </form>
    <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
</main>
<?php include('../includes/footer.php'); ?>
