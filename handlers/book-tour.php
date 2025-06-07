<?php
session_start();
require_once '../config/database.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: ../pages/login.html');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tour_id = filter_input(INPUT_POST, 'tour_id', FILTER_SANITIZE_NUMBER_INT);
    $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
    $participants = filter_input(INPUT_POST, 'participants', FILTER_SANITIZE_NUMBER_INT);
    
    try {
        $stmt = $pdo->prepare("INSERT INTO bookings (user_id, tour_id, tour_date, participants) VALUES (?, ?, ?, ?)");
        $stmt->execute([$_SESSION['user_id'], $tour_id, $date, $participants]);
        
        header('Location: ../dashboard/bookings.php?success=true');
        exit();
    } catch(PDOException $e) {
        error_log("Tour booking failed: " . $e->getMessage());
        header('Location: ../error.php');
        exit();
    }
} else {
    header('Location: ../pages/tours.html');
    exit();
}
?> 