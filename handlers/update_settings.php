<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'User not logged in']);
    exit();
}

// Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit();
}

// Get form data
$current_password = $_POST['current_password'] ?? '';
$new_password = $_POST['new_password'] ?? '';
$confirm_password = $_POST['confirm_password'] ?? '';
$email_notifications = isset($_POST['email_notifications']) ? 1 : 0;

try {
    // Include database connection
    require_once '../config/database.php';
    
    // If password change is requested
    if (!empty($current_password) && !empty($new_password)) {
        // Verify current password
        $stmt = $pdo->prepare("SELECT password FROM users WHERE id = ?");
        $stmt->execute([$_SESSION['user_id']]);
        $user = $stmt->fetch();
        
        if (!$user || !password_verify($current_password, $user['password'])) {
            echo json_encode(['success' => false, 'message' => 'Current password is incorrect']);
            exit();
        }
        
        // Validate new password
        if (strlen($new_password) < 8) {
            echo json_encode(['success' => false, 'message' => 'New password must be at least 8 characters long']);
            exit();
        }
        
        if ($new_password !== $confirm_password) {
            echo json_encode(['success' => false, 'message' => 'New passwords do not match']);
            exit();
        }
        
        // Update password
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("UPDATE users SET password = ? WHERE id = ?");
        $stmt->execute([$hashed_password, $_SESSION['user_id']]);
    }
    
    // Update email notifications preference
    $stmt = $pdo->prepare("UPDATE users SET email_notifications = ? WHERE id = ?");
    $stmt->execute([$email_notifications, $_SESSION['user_id']]);
    
    // Update session variable
    $_SESSION['email_notifications'] = $email_notifications;
    
    echo json_encode(['success' => true, 'message' => 'Settings updated successfully']);
} catch (PDOException $e) {
    error_log("Error updating settings: " . $e->getMessage());
    echo json_encode(['success' => false, 'message' => 'Error updating settings']);
} 