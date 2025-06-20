<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Determine if we're in a subdirectory (pages)
$isPage = strpos($_SERVER['PHP_SELF'], '/pages/') !== false;
$basePath = $isPage ? '../' : '';
?>
<div class ="bg-dark">
<nav class="navbar navbar-expand-lg navbar-dark  shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $basePath; ?>index.php">
            <img src="<?php echo $basePath; ?>assets/images/Horizontal-Logo.png" alt="Harar Living Museum" height="40">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $basePath; ?>pages/about.php">About</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $basePath; ?>pages/explore.php">Explore</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Tourism
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo $basePath; ?>pages/plan-visit.php">Plan Your Visit</a></li>
                        <li><a class="dropdown-item" href="<?php echo $basePath; ?>pages/tours.php">Guided Tours</a></li>
                        <li><a class="dropdown-item" href="<?php echo $basePath; ?>pages/tips.php">Travel Tips</a></li>
                    </ul>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Culture
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo $basePath; ?>pages/heritage.php">Heritage & Traditions</a></li>
                        <li><a class="dropdown-item" href="<?php echo $basePath; ?>pages/events.php">Events</a></li>
                        <li><a class="dropdown-item" href="<?php echo $basePath; ?>pages/gallery.php">Gallery</a></li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $basePath; ?>pages/research.php">Research</a>
                </li>
        
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $basePath; ?>pages/contact.php">Contact</a>
                </li>
        
                <!-- Theme Toggle -->
                <li class="nav-item">
                    <button class="theme-toggle nav-link" id="themeToggle" aria-label="Toggle theme">
                        <i class="fas fa-moon"></i>
                    </button>
                </li>
        
                <!-- Login/Register -->
                <?php if (isset($_SESSION['user_id'])): ?>
                    <!-- User is logged in -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user-circle me-1"></i>
                            <?php echo htmlspecialchars($_SESSION['user_name']); ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <?php if ($_SESSION['role'] === 'admin'): ?>
                                <li><a class="dropdown-item" href="<?php echo $basePath; ?>pages/admin_dashboard.php">Admin Dashboard</a></li>
                            <?php else: ?>
                                <li><a class="dropdown-item" href="<?php echo $basePath; ?>pages/client_dashboard.php">My Dashboard</a></li>
                            <?php endif; ?>
                            <li><a class="dropdown-item" href="<?php echo $basePath; ?>pages/profile.php">My Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?php echo $basePath; ?>handlers/logout.php">Logout</a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <!-- User is not logged in -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $basePath; ?>pages/login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-primary ms-2" href="<?php echo $basePath; ?>pages/register.php">Sign Up</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav></div>
