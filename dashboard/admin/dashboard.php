<?php
require_once '../../config/config.php';
require_once '../../includes/auth_middleware.php';

requireAdmin();
$user = getCurrentUser();

// Get user's profile picture
try {
    $conn = getDBConnection();
    $stmt = $conn->prepare("SELECT profile_picture FROM users WHERE id = ?");
    $stmt->execute([$user['id']]);
    $profile_picture = $stmt->fetchColumn() ?: '../../assets/images/default-profile.png';
} catch(PDOException $e) {
    $profile_picture = '../../assets/images/default-profile.png';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Harar Living Museum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .navbar {
            box-shadow: 0 2px 4px rgba(0,0,0,.1);
        }
        .navbar-brand {
            font-weight: bold;
        }
        .nav-link {
            padding: 0.5rem 1rem;
            transition: all 0.3s ease;
        }
        .nav-link:hover {
            background-color: rgba(255,255,255,.1);
            border-radius: 4px;
        }
        .nav-link i {
            margin-right: 0.5rem;
        }
        .profile-dropdown {
            position: relative;
        }
        .profile-dropdown-toggle {
            display: flex;
            align-items: center;
            padding: 0.5rem;
            cursor: pointer;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        .profile-dropdown-toggle:hover {
            background-color: rgba(255,255,255,.1);
        }
        .profile-picture {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 0.5rem;
            border: 2px solid rgba(255,255,255,.2);
        }
        .profile-dropdown-menu {
            position: absolute;
            right: 0;
            top: 100%;
            background: white;
            border-radius: 4px;
            box-shadow: 0 2px 10px rgba(0,0,0,.1);
            min-width: 200px;
            display: none;
            z-index: 1000;
        }
        .profile-dropdown-menu.show {
            display: block;
        }
        .profile-dropdown-header {
            padding: 1rem;
            border-bottom: 1px solid #eee;
            text-align: center;
        }
        .profile-dropdown-header .profile-picture {
            width: 64px;
            height: 64px;
            margin-bottom: 0.5rem;
        }
        .profile-dropdown-item {
            padding: 0.75rem 1rem;
            color: #333;
            text-decoration: none;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }
        .profile-dropdown-item:hover {
            background-color: #f8f9fa;
            color: #000;
        }
        .profile-dropdown-item i {
            width: 20px;
            margin-right: 0.5rem;
        }
        .profile-dropdown-divider {
            height: 1px;
            background-color: #eee;
            margin: 0.5rem 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="../../index.php">
                <i class="fas fa-landmark"></i> Harar Living Museum
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.php">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="users.php">
                            <i class="fas fa-users"></i> Manage Users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="places.php">
                            <i class="fas fa-map-marker-alt"></i> Manage Places
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">
                            <i class="fas fa-images"></i> Manage Gallery
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="settings.php">
                            <i class="fas fa-cog"></i> Settings
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="maintenance.php">
                            <i class="fas fa-tools"></i> Maintenance
                        </a>
                    </li>
                </ul>
                <div class="dropdown">
                    <a class="d-flex align-items-center text-light text-decoration-none dropdown-toggle" href="#" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?php echo htmlspecialchars($profile_picture); ?>" alt="Profile" class="profile-picture">
                        <span class="ms-2"><?php echo htmlspecialchars($user['name']); ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                        <li class="dropdown-header text-center">
                            <img src="<?php echo htmlspecialchars($profile_picture); ?>" alt="Profile" class="profile-picture" style="width:64px;height:64px;">
                            <div class="fw-bold mt-2"><?php echo htmlspecialchars($user['name']); ?></div>
                            <small class="text-muted">Administrator</small>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="profile.php"><i class="fas fa-user"></i> Edit Profile</a></li>
                        <li><a class="dropdown-item" href="../../handlers/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <h2>Admin Dashboard</h2>
                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="card-title">Quick Stats</h5>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card bg-primary text-white">
                                    <div class="card-body">
                                        <h6 class="card-title">Total Users</h6>
                                        <?php
                                        try {
                                            $conn = getDBConnection();
                                            $stmt = $conn->query("SELECT COUNT(*) FROM users");
                                            $total_users = $stmt->fetchColumn();
                                            echo "<h3>" . $total_users . "</h3>";
                                        } catch(PDOException $e) {
                                            echo "<p>Error loading stats</p>";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-success text-white">
                                    <div class="card-body">
                                        <h6 class="card-title">Total Clients</h6>
                                        <?php
                                        try {
                                            $stmt = $conn->query("SELECT COUNT(*) FROM users WHERE role = 'client'");
                                            $total_clients = $stmt->fetchColumn();
                                            echo "<h3>" . $total_clients . "</h3>";
                                        } catch(PDOException $e) {
                                            echo "<p>Error loading stats</p>";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-info text-white">
                                    <div class="card-body">
                                        <h6 class="card-title">Total Admins</h6>
                                        <?php
                                        try {
                                            $stmt = $conn->query("SELECT COUNT(*) FROM users WHERE role = 'admin'");
                                            $total_admins = $stmt->fetchColumn();
                                            echo "<h3>" . $total_admins . "</h3>";
                                        } catch(PDOException $e) {
                                            echo "<p>Error loading stats</p>";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 