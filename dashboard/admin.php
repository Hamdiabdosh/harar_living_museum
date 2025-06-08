<?php
require_once 'layout.php';
require_once '../includes/admin_helper.php';

checkAuth();

// Check if user is admin
if (!isAdmin()) {
    header('Location: /dashboard/user.php');
    exit();
}

$adminHelper = new AdminHelper();
$userData = getUserData();

// Get system statistics
$stats = $adminHelper->getSystemStats();

// Get recent activities
$recentActivities = $adminHelper->getRecentActivities(5);

renderHeader('Admin Dashboard');
?>

<div class="container-fluid">
    <div class="row">
        <!-- Statistics Cards -->
        <div class="col-md-3 mb-4">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h5 class="card-title">Total Users</h5>
                    <h2 class="mb-0"><?php echo number_format($stats['total_users']); ?></h2>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h5 class="card-title">Total Places</h5>
                    <h2 class="mb-0"><?php echo number_format($stats['total_places']); ?></h2>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <h5 class="card-title">Total Bookings</h5>
                    <h2 class="mb-0"><?php echo number_format($stats['total_bookings']); ?></h2>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <h5 class="card-title">Pending Approvals</h5>
                    <h2 class="mb-0"><?php echo number_format($stats['pending_approvals']); ?></h2>
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
                        <a href="admin/places.php" class="btn btn-primary">
                            <i class="fas fa-map-marker-alt"></i> Manage Places
                        </a>
                        <a href="admin/bookings.php" class="btn btn-success">
                            <i class="fas fa-calendar-check"></i> Manage Bookings
                        </a>
                        <a href="admin/media.php" class="btn btn-info">
                            <i class="fas fa-images"></i> Review Media
                        </a>
                        <a href="admin/gallery.php" class="btn btn-info">
                            <i class="fas fa-images"></i> Manage Gallery
                        </a>
                        <a href="admin/settings.php" class="btn btn-warning">
                            <i class="fas fa-cog"></i> System Settings
                        </a>
                        <a href="admin/users.php" class="btn btn-secondary">
                            <i class="fas fa-users"></i> Manage Users
                        </a>
                    </div>
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
                                        <h6 class="mb-1"><?php echo htmlspecialchars($activity['action']); ?></h6>
                                        <small class="text-muted">
                                            <?php echo date('M d, Y H:i', strtotime($activity['created_at'])); ?>
                                        </small>
                                    </div>
                                    <p class="mb-1">
                                        By: <?php echo htmlspecialchars($activity['admin_name']); ?>
                                        <?php if ($activity['details']): ?>
                                            <br>
                                            <small class="text-muted">
                                                <?php echo htmlspecialchars($activity['details']); ?>
                                            </small>
                                        <?php endif; ?>
                                    </p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php renderFooter(); ?> 