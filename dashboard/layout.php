<?php
session_start();
require_once '../config/database.php';

// Security check
function checkAuth() {
    if (!isset($_SESSION['user_id'])) {
        header('Location: ../pages/login.php');
        exit();
    }
}

// Check if user is admin
function isAdmin() {
    return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
}

// Check if user is contributor
function isContributor() {
    return isset($_SESSION['is_contributor']) && $_SESSION['is_contributor'] === true;
}

// Get user data
function getUserData() {
    if (!isset($_SESSION['user_id'])) {
        return null;
    }

    try {
        $database = new Database();
        $db = $database->getConnection();
        
        $query = "SELECT id, full_name, email, role, is_contributor, profile_photo 
                 FROM users WHERE id = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$_SESSION['user_id']]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        error_log("Error fetching user data: " . $e->getMessage());
        return null;
    }
}

// Common header
function renderHeader($title) {
    $userData = getUserData();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo htmlspecialchars($title); ?> - Harar Living Museum</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
        <link href="../assets/css/dashboard.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="../dashboard/">Harar Living Museum</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../dashboard/user.php">Dashboard</a>
                        </li>
                        <?php if (isContributor()): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="../dashboard/contribute.php">Contribute</a>
                        </li>
                        <?php endif; ?>
                        <?php if (isAdmin()): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="../dashboard/admin.php">Admin Panel</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                    <div class="navbar-nav">
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" 
                               data-bs-toggle="dropdown">
                                <?php if ($userData && $userData['profile_photo']): ?>
                                    <img src="<?php echo htmlspecialchars($userData['profile_photo']); ?>" 
                                         class="rounded-circle" width="30" height="30" alt="Profile">
                                <?php else: ?>
                                    <i class="fas fa-user-circle"></i>
                                <?php endif; ?>
                                <?php echo htmlspecialchars($userData['full_name'] ?? 'User'); ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="../dashboard/profile.php">Profile</a></li>
                                <li><a class="dropdown-item" href="../dashboard/settings.php">Settings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#" onclick="logout()">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container-fluid py-4">
    <?php
}

// Common footer
function renderFooter() {
    ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
        function logout() {
            fetch('../handlers/auth_handler.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'action=logout'
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    window.location.href = '../pages/login.php';
                } else {
                    alert('Logout failed: ' + (data.message || 'Unknown error'));
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred during logout. Please try again.');
            });
        }
        </script>
    </body>
    </html>
    <?php
}
?> 