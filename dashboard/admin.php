<?php
require_once 'layout.php';
checkAuth();

// Check if user is admin
if (!isAdmin()) {
    header('Location: /dashboard/user.php');
    exit();
}

// Get admin's data
$userData = getUserData();
if (!$userData) {
    header('Location: /login.php');
    exit();
}

// Get dashboard statistics
try {
    $database = new Database();
    $db = $database->getConnection();
    
    // Get total users
    $usersQuery = "SELECT COUNT(*) as total FROM users";
    $usersStmt = $db->query($usersQuery);
    $totalUsers = $usersStmt->fetch(PDO::FETCH_ASSOC)['total'];

    // Get total places
    $placesQuery = "SELECT COUNT(*) as total FROM places";
    $placesStmt = $db->query($placesQuery);
    $totalPlaces = $placesStmt->fetch(PDO::FETCH_ASSOC)['total'];

    // Get total bookings
    $bookingsQuery = "SELECT COUNT(*) as total FROM bookings";
    $bookingsStmt = $db->query($bookingsQuery);
    $totalBookings = $bookingsStmt->fetch(PDO::FETCH_ASSOC)['total'];

    // Get pending approvals
    $pendingQuery = "SELECT 
        (SELECT COUNT(*) FROM media_uploads WHERE approved = 0) as pending_media";
    $pendingStmt = $db->query($pendingQuery);
    $pendingApprovals = $pendingStmt->fetch(PDO::FETCH_ASSOC);

    // Get recent activities
    $activitiesQuery = "SELECT 
        'booking' as type, booking_id as id, tour_date as date, status, created_at 
        FROM bookings 
        WHERE created_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)
        UNION ALL
        SELECT 'testimonial' as type, testimonial_id as id, NULL as date, 
        CASE WHEN approved THEN 'approved' ELSE 'pending' END as status, created_at 
        FROM testimonials 
        WHERE created_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)
        ORDER BY created_at DESC LIMIT 10";
    $activitiesStmt = $db->query($activitiesQuery);
    $recentActivities = $activitiesStmt->fetchAll(PDO::FETCH_ASSOC);

} catch (Exception $e) {
    error_log("Error fetching admin statistics: " . $e->getMessage());
    $totalUsers = 0;
    $totalPlaces = 0;
    $totalBookings = 0;
    $pendingApprovals = ['pending_media' => 0];
    $recentActivities = [];
}

renderHeader('Admin Dashboard');
?>

<div class="row">
    <!-- Statistics Cards -->
    <div class="col-md-3 mb-4">
        <div class="card bg-primary text-white">
            <div class="card-body">
                <h5 class="card-title">Total Users</h5>
                <h2 class="mb-0"><?php echo number_format($totalUsers); ?></h2>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card bg-success text-white">
            <div class="card-body">
                <h5 class="card-title">Total Places</h5>
                <h2 class="mb-0"><?php echo number_format($totalPlaces); ?></h2>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card bg-info text-white">
            <div class="card-body">
                <h5 class="card-title">Total Bookings</h5>
                <h2 class="mb-0"><?php echo number_format($totalBookings); ?></h2>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card bg-warning text-white">
            <div class="card-body">
                <h5 class="card-title">Pending Approvals</h5>
                <h2 class="mb-0">
                    <?php echo number_format($pendingApprovals['pending_media']); ?>
                </h2>
            </div>
        </div>
    </div>

    <!-- Recent Activities -->
    <div class="col-md-8 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Recent Activities</h5>
            </div>
            <div class="card-body">
                <?php if (empty($recentActivities)): ?>
                    <p class="text-muted">No recent activities found.</p>
                <?php else: ?>
                    <div class="list-group">
                        <?php foreach ($recentActivities as $activity): ?>
                            <div class="list-group-item">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">
                                        <?php if ($activity['type'] === 'booking'): ?>
                                            New Booking #<?php echo $activity['id']; ?>
                                        <?php else: ?>
                                            New Testimonial #<?php echo $activity['id']; ?>
                                        <?php endif; ?>
                                    </h6>
                                    <small class="text-<?php echo $activity['status'] === 'approved' ? 'success' : 'warning'; ?>">
                                        <?php echo ucfirst($activity['status']); ?>
                                    </small>
                                </div>
                                <?php if ($activity['type'] === 'booking' && $activity['date']): ?>
                                    <p class="mb-1">Tour Date: <?php echo date('M d, Y', strtotime($activity['date'])); ?></p>
                                <?php endif; ?>
                                <small>Created on <?php echo date('M d, Y H:i', strtotime($activity['created_at'])); ?></small>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Quick Actions</h5>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <a href="/dashboard/admin/places.php" class="btn btn-primary">
                        <i class="fas fa-map-marker-alt"></i> Manage Places
                    </a>
                    <a href="/dashboard/admin/bookings.php" class="btn btn-success">
                        <i class="fas fa-calendar-check"></i> Manage Bookings
                    </a>
                    <a href="/dashboard/admin/testimonials.php" class="btn btn-info">
                        <i class="fas fa-comments"></i> Review Testimonials
                    </a>
                    <a href="/dashboard/admin/media.php" class="btn btn-warning">
                        <i class="fas fa-images"></i> Review Media
                    </a>
                    <a href="/dashboard/admin/users.php" class="btn btn-secondary">
                        <i class="fas fa-users"></i> Manage Users
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php renderFooter(); ?> 