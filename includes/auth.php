<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
echo __FILE__ . " - Line: " . __LINE__;
session_start();

// Function to register a user
function register($name, $email, $password, $role) {
    global $pdo;

    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    $sql = "INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$name, $email, $hashed_password, $role]);
}

// Function to login a user
function login($email, $password) {
    global $pdo;

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['user_role'] = $user['role'];
        return true;
    }
    return false;
}

// Check if user is logged in
function is_logged_in() {
    return isset($_SESSION['user_id']);
}

// Logout the user
function logout() {
    session_destroy();
    header('Location: login.php');
    exit();
}
?>
