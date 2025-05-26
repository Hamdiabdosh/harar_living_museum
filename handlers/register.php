<?php
session_start();
require_once 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    if ($password !== $confirm_password) {
        header('Location: ../pages/register.html?error=password_mismatch');
        exit();
    }

    try {
        // Check if email already exists
        $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->fetch()) {
            header('Location: ../pages/register.html?error=email_exists');
            exit();
        }

        // Insert new user
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$fullname, $email, $hashed_password]);

        $_SESSION['user_id'] = $pdo->lastInsertId();
        header('Location: ../dashboard/tourist.php');
        exit();
    } catch(PDOException $e) {
        error_log("Registration failed: " . $e->getMessage());
        header('Location: ../error.php');
        exit();
    }
} else {
    header('Location: ../pages/register.html');
    exit();
}
?>