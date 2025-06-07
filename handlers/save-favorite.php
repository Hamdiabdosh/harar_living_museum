<?php
session_start();
require_once '../config/database.php';

if (!isset($_SESSION['user_id'])) {
    http_response_code(401);
    echo json_encode(['error' => 'Unauthorized']);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $place_id = filter_input(INPUT_POST, 'place_id', FILTER_SANITIZE_NUMBER_INT);
    
    try {
        $stmt = $pdo->prepare("INSERT INTO favorites (user_id, place_id) VALUES (?, ?)");
        $stmt->execute([$_SESSION['user_id'], $place_id]);
        
        echo json_encode(['success' => true]);
    } catch(PDOException $e) {
        error_log("Save favorite failed: " . $e->getMessage());
        http_response_code(500);
        echo json_encode(['error' => 'Internal server error']);
    }
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
}
?> 