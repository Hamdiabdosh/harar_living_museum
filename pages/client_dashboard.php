<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: /pages/login.php');
    exit();
}

// Set content type and page title
header('Content-Type: text/html; charset=utf-8');
$page_title = 'My Dashboard';

// Include header
include '../includes/layouts/header.php';
include '../includes/components/navbar.php';
?>

<main class="py-5">
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <img src="/assets/images/default-avatar.png" alt="Profile" class="rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: cover;">
                            <h5 class="mb-1"><?php echo htmlspecialchars($_SESSION['user_name']); ?></h5>
                            <p class="text-muted mb-0"><?php echo htmlspecialchars($_SESSION['email']); ?></p>
                        </div>
                        <div class="list-group list-group-flush">
                            <a href="#profile" class="list-group-item list-group-item-action active" data-bs-toggle="list">
                                <i class="fas fa-user me-2"></i> Profile
                            </a>
                            <a href="#bookings" class="list-group-item list-group-item-action" data-bs-toggle="list">
                                <i class="fas fa-calendar-check me-2"></i> My Bookings
                            </a>
                            <a href="#favorites" class="list-group-item list-group-item-action" data-bs-toggle="list">
                                <i class="fas fa-heart me-2"></i> Favorites
                            </a>
                            <a href="#settings" class="list-group-item list-group-item-action" data-bs-toggle="list">
                                <i class="fas fa-cog me-2"></i> Settings
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9">
                <div class="tab-content">
                    <!-- Profile Section -->
                    <div class="tab-pane fade show active" id="profile">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Profile Information</h4>
                                <form id="profileForm">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control" value="<?php echo htmlspecialchars($_SESSION['first_name']); ?>" readonly>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control" value="<?php echo htmlspecialchars($_SESSION['last_name']); ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" value="<?php echo htmlspecialchars($_SESSION['email']); ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Phone</label>
                                        <input type="tel" class="form-control" value="<?php echo htmlspecialchars($_SESSION['phone'] ?? ''); ?>" readonly>
                                    </div>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                                        Edit Profile
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Bookings Section -->
                    <div class="tab-pane fade" id="bookings">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h4 class="card-title mb-4">My Bookings</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Booking ID</th>
                                                <th>Tour/Event</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Bookings will be loaded dynamically -->
                                            <tr>
                                                <td colspan="5" class="text-center">No bookings found</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Favorites Section -->
                    <div class="tab-pane fade" id="favorites">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h4 class="card-title mb-4">My Favorites</h4>
                                <div class="row">
                                    <!-- Favorites will be loaded dynamically -->
                                    <div class="col-12 text-center">
                                        <p class="text-muted">No favorites added yet</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Settings Section -->
                    <div class="tab-pane fade" id="settings">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Account Settings</h4>
                                <form id="settingsForm">
                                    <div class="mb-3">
                                        <label class="form-label">Change Password</label>
                                        <input type="password" class="form-control mb-2" placeholder="Current Password">
                                        <input type="password" class="form-control mb-2" placeholder="New Password">
                                        <input type="password" class="form-control" placeholder="Confirm New Password">
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="emailNotifications">
                                            <label class="form-check-label" for="emailNotifications">Email Notifications</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Edit Profile Modal -->
<div class="modal fade" id="editProfileModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="editProfileForm">
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" name="first_name" value="<?php echo htmlspecialchars($_SESSION['first_name']); ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="last_name" value="<?php echo htmlspecialchars($_SESSION['last_name']); ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="tel" class="form-control" name="phone" value="<?php echo htmlspecialchars($_SESSION['phone'] ?? ''); ?>">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="saveProfileBtn">Save Changes</button>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/layouts/footer.php'; ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle profile form submission
    const saveProfileBtn = document.getElementById('saveProfileBtn');
    if (saveProfileBtn) {
        saveProfileBtn.addEventListener('click', function() {
            const form = document.getElementById('editProfileForm');
            const formData = new FormData(form);
            
            // Add AJAX call to update profile
            fetch('/handlers/update_profile.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success message and reload page
                    alert('Profile updated successfully');
                    location.reload();
                } else {
                    alert(data.message || 'Error updating profile');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error updating profile');
            });
        });
    }

    // Handle settings form submission
    const settingsForm = document.getElementById('settingsForm');
    if (settingsForm) {
        settingsForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            
            // Add AJAX call to update settings
            fetch('/handlers/update_settings.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Settings updated successfully');
                } else {
                    alert(data.message || 'Error updating settings');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error updating settings');
            });
        });
    }
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 