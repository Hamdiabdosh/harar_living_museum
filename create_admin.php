<?php
require_once 'config/database.php';

// Function to create admin user
function createAdminUser($name, $email, $password) {
    try {
        $database = new Database();
        $db = $database->getConnection();

        // Check if email already exists
        $query = "SELECT user_id FROM users WHERE email = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$email]);
        if ($stmt->fetch()) {
            return ['success' => false, 'message' => 'Email already registered'];
        }

        // Hash password
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        // Insert new admin user
        $query = "INSERT INTO users (name, email, password, role, is_active) 
                 VALUES (?, ?, ?, 'admin', 1)";
        $stmt = $db->prepare($query);
        $stmt->execute([$name, $email, $password_hash]);

        $userId = $db->lastInsertId();

        if ($userId) {
            return [
                'success' => true,
                'message' => 'Admin user created successfully',
                'user_id' => $userId
            ];
        } else {
            return ['success' => false, 'message' => 'Failed to create admin user'];
        }
    } catch (Exception $e) {
        error_log("Error creating admin user: " . $e->getMessage());
        return ['success' => false, 'message' => 'An error occurred while creating admin user'];
    }
}

// Only allow this script to be run from command line
if (php_sapi_name() !== 'cli') {
    die('This script can only be run from the command line');
}

// Get admin details from command line arguments
if ($argc !== 4) {
    die("Usage: php create_admin.php 'Name' 'email@example.com' 'password'\n");
}

$name = $argv[1];
$email = $argv[2];
$password = $argv[3];

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Error: Invalid email format\n");
}

// Validate password
if (strlen($password) < 8) {
    die("Error: Password must be at least 8 characters long\n");
}

// Create admin user
$result = createAdminUser($name, $email, $password);

// Output result
if ($result['success']) {
    echo "Success: " . $result['message'] . "\n";
    echo "Admin user ID: " . $result['user_id'] . "\n";
} else {
    echo "Error: " . $result['message'] . "\n";
}
?> 