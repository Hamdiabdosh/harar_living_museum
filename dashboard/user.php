<?php
require_once 'layout.php';
checkAuth();

// Get user's data
$userData = getUserData();
if (!$userData) {
    header('Location: /login.php');
    exit();
}

// Get user's recent activities
try {
    $database = new Database();
    $db = $database->getConnection();
    
    // Get recent bookings
    $bookingsQuery = "SELECT * FROM bookings WHERE user_id = ? ORDER BY created_at DESC LIMIT 5";
    $bookingsStmt = $db->prepare($bookingsQuery);
    $bookingsStmt->execute([$userData['id']]);
    $recentBookings = $bookingsStmt->fetchAll(PDO::FETCH_ASSOC);

    // Get recent favorites
    $favoritesQuery = "SELECT p.* FROM places p 
                      JOIN favorites f ON p.place_id = f.place_id 
                      WHERE f.user_id = ? 
                      ORDER BY f.saved_at DESC LIMIT 5";
    $favoritesStmt = $db->prepare($favoritesQuery);
    $favoritesStmt->execute([$userData['id']]);
    $recentFavorites = $favoritesStmt->fetchAll(PDO::FETCH_ASSOC);

} catch (Exception $e) {
    error_log("Error fetching user activities: " . $e->getMessage());
    $recentBookings = [];
    $recentFavorites = [];
}

renderHeader('User Dashboard');
?>

<div class="row">
    <!-- Welcome Section -->
    <div class="col-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h2>Welcome, <?php echo htmlspecialchars($userData['full_name']); ?>!</h2>
                <?php if (!$userData['is_contributor']): ?>
                <p class="text-muted">
                    Want to contribute to our museum? 
                    <a href="/dashboard/request-contributor.php" class="btn btn-sm btn-primary">
                        Become a Contributor
                    </a>
                </p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Recent Bookings -->
    <div class="col-md-6 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Recent Bookings</h5>
            </div>
            <div class="card-body">
                <?php if (empty($recentBookings)): ?>
                    <p class="text-muted">No recent bookings found.</p>
                <?php else: ?>
                    <div class="list-group">
                        <?php foreach ($recentBookings as $booking): ?>
                            <div class="list-group-item">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Tour on <?php echo date('M d, Y', strtotime($booking['tour_date'])); ?></h6>
                                    <small class="text-<?php echo $booking['status'] === 'confirmed' ? 'success' : 'warning'; ?>">
                                        <?php echo ucfirst($booking['status']); ?>
                                    </small>
                                </div>
                                <p class="mb-1"><?php echo htmlspecialchars($booking['tour_details']); ?></p>
                                <small>Booked on <?php echo date('M d, Y', strtotime($booking['created_at'])); ?></small>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <a href="/dashboard/bookings.php" class="btn btn-link mt-3">View All Bookings</a>
            </div>
        </div>
    </div>

    <!-- Recent Favorites -->
    <div class="col-md-6 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Favorite Places</h5>
            </div>
            <div class="card-body">
                <?php if (empty($recentFavorites)): ?>
                    <p class="text-muted">No favorite places yet.</p>
                <?php else: ?>
                    <div class="list-group">
                        <?php foreach ($recentFavorites as $place): ?>
                            <div class="list-group-item">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1"><?php echo htmlspecialchars($place['title']); ?></h6>
                                    <small class="text-muted"><?php echo htmlspecialchars($place['category']); ?></small>
                                </div>
                                <p class="mb-1"><?php echo htmlspecialchars($place['location']); ?></p>
                                <a href="/places/view.php?id=<?php echo $place['place_id']; ?>" class="btn btn-sm btn-outline-primary">
                                    View Details
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <a href="/dashboard/favorites.php" class="btn btn-link mt-3">View All Favorites</a>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Quick Actions</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <a href="/dashboard/book-tour.php" class="btn btn-primary w-100">
                            <i class="fas fa-calendar-plus"></i> Book a Tour
                        </a>
                    </div>
                    <div class="col-md-3 mb-3">
                        <a href="/dashboard/explore.php" class="btn btn-success w-100">
                            <i class="fas fa-compass"></i> Explore Places
                        </a>
                    </div>
                    <div class="col-md-3 mb-3">
                        <a href="/dashboard/events.php" class="btn btn-info w-100">
                            <i class="fas fa-calendar-alt"></i> View Events
                        </a>
                    </div>
                    <div class="col-md-3 mb-3">
                        <a href="/dashboard/profile.php" class="btn btn-secondary w-100">
                            <i class="fas fa-user-edit"></i> Edit Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php renderFooter(); ?> 