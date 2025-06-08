<?php
require_once '../layout.php';
require_once '../../includes/admin_helper.php';

checkAuth();

// Check if user is admin
if (!isAdmin()) {
    header('Location: /dashboard/user.php');
    exit();
}

$adminHelper = new AdminHelper();
$userData = getUserData();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        foreach ($_POST['settings'] as $key => $value) {
            $adminHelper->updateSetting($key, $value, $userData['id']);
        }
        
        // Log the activity
        $adminHelper->logActivity(
            $userData['id'],
            'update_settings',
            'Updated system settings'
        );
        
        $_SESSION['success'] = "Settings updated successfully!";
        header('Location: settings.php');
        exit();
    } catch (Exception $e) {
        $_SESSION['error'] = "Error updating settings: " . $e->getMessage();
    }
}

// Get all settings
try {
    $database = new Database();
    $db = $database->getConnection();
    
    $query = "SELECT * FROM admin_settings ORDER BY setting_key";
    $stmt = $db->query($query);
    $settings = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    error_log("Error fetching settings: " . $e->getMessage());
    $settings = [];
}

renderHeader('Admin Settings');
?>

<div class="container-fluid">
    <!-- Success/Error Messages -->
    <?php if (isset($_SESSION['success'])): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php 
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php 
            echo $_SESSION['error'];
            unset($_SESSION['error']);
            ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">System Settings</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        <?php foreach ($settings as $setting): ?>
                            <div class="mb-3">
                                <label class="form-label">
                                    <?php echo htmlspecialchars(ucwords(str_replace('_', ' ', $setting['setting_key']))); ?>
                                    <?php if ($setting['description']): ?>
                                        <small class="text-muted d-block">
                                            <?php echo htmlspecialchars($setting['description']); ?>
                                        </small>
                                    <?php endif; ?>
                                </label>
                                
                                <?php if ($setting['setting_key'] === 'maintenance_mode'): ?>
                                    <select class="form-select" name="settings[<?php echo $setting['setting_key']; ?>]">
                                        <option value="0" <?php echo $setting['setting_value'] === '0' ? 'selected' : ''; ?>>Disabled</option>
                                        <option value="1" <?php echo $setting['setting_value'] === '1' ? 'selected' : ''; ?>>Enabled</option>
                                    </select>
                                <?php else: ?>
                                    <input type="text" 
                                           class="form-control" 
                                           name="settings[<?php echo $setting['setting_key']; ?>]" 
                                           value="<?php echo htmlspecialchars($setting['setting_value']); ?>">
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                        
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">Save Settings</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php renderFooter(); ?> 