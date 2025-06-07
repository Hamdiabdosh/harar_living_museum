<?php
session_start();
require_once 'config/database.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    switch ($action) {
        case 'login':
            handleLogin();
            break;
        case 'register':
            handleRegister();
            break;
        case 'logout':
            handleLogout();
            break;
        default:
            echo json_encode(['success' => false, 'message' => 'Invalid action']);
    }
}

function handleLogin() {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        echo json_encode(['success' => false, 'message' => 'Please fill in all fields']);
        return;
    }

    try {
        $database = new Database();
        $db = $database->getConnection();

        $query = "SELECT * FROM users WHERE email = ? AND is_active = 1";
        $stmt = $db->prepare($query);
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password_hash'])) {
            // Update last login
            $updateQuery = "UPDATE users SET last_login = CURRENT_TIMESTAMP WHERE id = ?";
            $updateStmt = $db->prepare($updateQuery);
            $updateStmt->execute([$user['id']]);

            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['full_name'] = $user['full_name'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['is_contributor'] = $user['is_contributor'];

            // Determine redirect URL based on role
            $redirect = '/dashboard/';
            if ($user['role'] === 'admin') {
                $redirect .= 'admin.php';
            } else {
                $redirect .= 'user.php';
            }

            echo json_encode([
                'success' => true,
                'message' => 'Login successful',
                'redirect' => $redirect,
                'user' => [
                    'id' => $user['id'],
                    'full_name' => $user['full_name'],
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'is_contributor' => $user['is_contributor']
                ]
            ]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Invalid email or password']);
        }
    } catch (Exception $e) {
        error_log("Login error: " . $e->getMessage());
        echo json_encode(['success' => false, 'message' => 'An error occurred during login']);
    }
}

function handleRegister() {
    $full_name = $_POST['full_name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $wants_to_contribute = isset($_POST['wants_to_contribute']) ? true : false;

    if (empty($full_name) || empty($email) || empty($password)) {
        echo json_encode(['success' => false, 'message' => 'Please fill in all fields']);
        return;
    }

    try {
        $database = new Database();
        $db = $database->getConnection();

        // Check if email already exists
        $query = "SELECT id FROM users WHERE email = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$email]);
        if ($stmt->fetch()) {
            echo json_encode(['success' => false, 'message' => 'Email already registered']);
            return;
        }

        // Hash password
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        // Insert new user
        $query = "INSERT INTO users (full_name, email, password_hash, is_contributor) VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->execute([$full_name, $email, $password_hash, $wants_to_contribute]);

        $userId = $db->lastInsertId();

        if ($userId) {
            // Set session variables
            $_SESSION['user_id'] = $userId;
            $_SESSION['full_name'] = $full_name;
            $_SESSION['role'] = 'user';
            $_SESSION['is_contributor'] = $wants_to_contribute;

            echo json_encode([
                'success' => true,
                'message' => 'Registration successful',
                'redirect' => '/dashboard/user.php',
                'user' => [
                    'id' => $userId,
                    'full_name' => $full_name,
                    'email' => $email,
                    'role' => 'user',
                    'is_contributor' => $wants_to_contribute
                ]
            ]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Registration failed']);
        }
    } catch (Exception $e) {
        error_log("Registration error: " . $e->getMessage());
        echo json_encode(['success' => false, 'message' => 'An error occurred during registration']);
    }
}

function handleLogout() {
    session_destroy();
    echo json_encode(['success' => true, 'message' => 'Logged out successfully']);
}
?> 