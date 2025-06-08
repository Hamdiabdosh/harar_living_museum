<?php
require_once __DIR__ . '/../includes/admin_helper.php';

function checkMaintenanceMode() {
    // Skip maintenance check for admin users
    if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
        return;
    }
    
    $adminHelper = new AdminHelper();
    
    // Check if maintenance mode is enabled
    if ($adminHelper->isMaintenanceMode()) {
        // Allow access to login page and maintenance page
        $allowed_pages = ['/pages/login.php', '/pages/maintenance.php'];
        $current_page = $_SERVER['PHP_SELF'];
        
        if (!in_array($current_page, $allowed_pages)) {
            header('Location: /pages/maintenance.php');
            exit();
        }
    }
} 