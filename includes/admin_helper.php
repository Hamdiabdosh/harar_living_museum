<?php
require_once __DIR__ . '/../config/database.php';

class AdminHelper {
    private $db;
    
    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
    }
    
    // Log admin activity
    public function logActivity($adminId, $action, $details = null) {
        try {
            $query = "INSERT INTO admin_activity_log (admin_id, action, details, ip_address) 
                     VALUES (?, ?, ?, ?)";
            $stmt = $this->db->prepare($query);
            $stmt->execute([
                $adminId,
                $action,
                $details,
                $_SERVER['REMOTE_ADDR']
            ]);
            return true;
        } catch (Exception $e) {
            error_log("Error logging admin activity: " . $e->getMessage());
            return false;
        }
    }
    
    // Get admin settings
    public function getSetting($key) {
        try {
            $query = "SELECT setting_value FROM admin_settings WHERE setting_key = ?";
            $stmt = $this->db->prepare($query);
            $stmt->execute([$key]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result ? $result['setting_value'] : null;
        } catch (Exception $e) {
            error_log("Error getting admin setting: " . $e->getMessage());
            return null;
        }
    }
    
    // Update admin setting
    public function updateSetting($key, $value, $adminId) {
        try {
            $query = "UPDATE admin_settings 
                     SET setting_value = ?, updated_by = ? 
                     WHERE setting_key = ?";
            $stmt = $this->db->prepare($query);
            $stmt->execute([$value, $adminId, $key]);
            return $stmt->rowCount() > 0;
        } catch (Exception $e) {
            error_log("Error updating admin setting: " . $e->getMessage());
            return false;
        }
    }
    
    // Get recent admin activities
    public function getRecentActivities($limit = 10) {
        try {
            $query = "SELECT a.*, u.name as admin_name 
                     FROM admin_activity_log a 
                     JOIN users u ON a.admin_id = u.id 
                     ORDER BY a.created_at DESC 
                     LIMIT ?";
            $stmt = $this->db->prepare($query);
            $stmt->execute([$limit]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            error_log("Error getting recent activities: " . $e->getMessage());
            return [];
        }
    }
    
    // Get system statistics
    public function getSystemStats() {
        try {
            $stats = [];
            
            // Total users
            $query = "SELECT COUNT(*) as total FROM users";
            $stmt = $this->db->query($query);
            $stats['total_users'] = $stmt->fetch(PDO::FETCH_ASSOC)['total'];
            
            // Total places
            $query = "SELECT COUNT(*) as total FROM places";
            $stmt = $this->db->query($query);
            $stats['total_places'] = $stmt->fetch(PDO::FETCH_ASSOC)['total'];
            
            // Total bookings
            $query = "SELECT COUNT(*) as total FROM bookings";
            $stmt = $this->db->query($query);
            $stats['total_bookings'] = $stmt->fetch(PDO::FETCH_ASSOC)['total'];
            
            // Pending approvals
            $query = "SELECT COUNT(*) as total FROM media_uploads WHERE approved = 0";
            $stmt = $this->db->query($query);
            $stats['pending_approvals'] = $stmt->fetch(PDO::FETCH_ASSOC)['total'];
            
            return $stats;
        } catch (Exception $e) {
            error_log("Error getting system stats: " . $e->getMessage());
            return [
                'total_users' => 0,
                'total_places' => 0,
                'total_bookings' => 0,
                'pending_approvals' => 0
            ];
        }
    }
    
    // Check if maintenance mode is enabled
    public function isMaintenanceMode() {
        return $this->getSetting('maintenance_mode') === '1';
    }
    
    // Toggle maintenance mode
    public function toggleMaintenanceMode($adminId, $enable = true) {
        return $this->updateSetting('maintenance_mode', $enable ? '1' : '0', $adminId);
    }
} 