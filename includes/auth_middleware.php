<?php
session_start();

function requireLogin() {
    if (!isset($_SESSION['user_id'])) {
        header("Location: /pages/login.php");
        exit();
    }
}

function requireAdmin() {
    requireLogin();
    if ($_SESSION['role'] !== 'admin') {
        header("Location: /pages/client_dashboard.php");
        exit();
    }
}

function requireClient() {
    requireLogin();
    if ($_SESSION['role'] !== 'client') {
        header("Location: /pages/admin_dashboard.php");
        exit();
    }
}

function getCurrentUser() {
    if (!isset($_SESSION['user_id'])) {
        return null;
    }
    
    return [
        'id' => $_SESSION['user_id'],
        'name' => $_SESSION['user_name'],
        'role' => $_SESSION['role']
    ];
}

function logout() {
    session_destroy();
    header("Location: /index.php");
    exit();
} 