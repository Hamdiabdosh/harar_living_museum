<?php
session_start();
require_once 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    try {
        $stmt = $pdo->prepare("SELECT id, password FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header('Location: ../dashboard/tourist.php');
            exit();
        } else {
            header('Location: ../pages/login.html?error=invalid');
            exit();
        }
    } catch(PDOException $e) {
        error_log("Login failed: " . $e->getMessage());
        header('Location: ../error.php');
        exit();
    }
} else {
    header('Location: ../pages/login.html');
    exit();
}
?>