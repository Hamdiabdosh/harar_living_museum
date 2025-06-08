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

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $database = new Database();
        $db = $database->getConnection();
        
        if (isset($_POST['action'])) {
            switch ($_POST['action']) {
                case 'add':
                    // Handle file upload
                    $uploadDir = '../../uploads/gallery/';
                    if (!file_exists($uploadDir)) {
                        mkdir($uploadDir, 0777, true);
                    }
                    
                    $fileName = uniqid() . '_' . basename($_FILES['image']['name']);
                    $uploadFile = $uploadDir . $fileName;
                    
                    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
                        $stmt = $db->prepare("INSERT INTO gallery (title, description, image_path, category, display_order, is_featured, created_by) 
                                            VALUES (?, ?, ?, ?, ?, ?, ?)");
                        $stmt->execute([
                            $_POST['title'],
                            $_POST['description'],
                            'uploads/gallery/' . $fileName,
                            $_POST['category'],
                            $_POST['display_order'],
                            isset($_POST['is_featured']) ? 1 : 0,
                            $userData['id']
                        ]);
                        
                        // Log activity
                        $adminHelper->logActivity(
                            $userData['id'],
                            'add_gallery_item',
                            'Added new gallery item: ' . $_POST['title']
                        );
                        
                        $_SESSION['success'] = "Gallery item added successfully!";
                    } else {
                        throw new Exception("Failed to upload image");
                    }
                    break;

                case 'edit':
                    $updates = [
                        'title' => $_POST['title'],
                        'description' => $_POST['description'],
                        'category' => $_POST['category'],
                        'display_order' => $_POST['display_order'],
                        'is_featured' => isset($_POST['is_featured']) ? 1 : 0,
                        'status' => $_POST['status']
                    ];
                    
                    // Handle new image upload if provided
                    if (!empty($_FILES['image']['name'])) {
                        $uploadDir = '../../uploads/gallery/';
                        $fileName = uniqid() . '_' . basename($_FILES['image']['name']);
                        $uploadFile = $uploadDir . $fileName;
                        
                        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
                            $updates['image_path'] = 'uploads/gallery/' . $fileName;
                            
                            // Delete old image
                            $stmt = $db->prepare("SELECT image_path FROM gallery WHERE id = ?");
                            $stmt->execute([$_POST['id']]);
                            $oldImage = $stmt->fetch(PDO::FETCH_ASSOC)['image_path'];
                            if ($oldImage && file_exists('../../' . $oldImage)) {
                                unlink('../../' . $oldImage);
                            }
                        }
                    }
                    
                    $setClause = implode(', ', array_map(function($key) {
                        return "$key = ?";
                    }, array_keys($updates)));
                    
                    $stmt = $db->prepare("UPDATE gallery SET $setClause WHERE id = ?");
                    $stmt->execute([...array_values($updates), $_POST['id']]);
                    
                    // Log activity
                    $adminHelper->logActivity(
                        $userData['id'],
                        'update_gallery_item',
                        'Updated gallery item: ' . $_POST['title']
                    );
                    
                    $_SESSION['success'] = "Gallery item updated successfully!";
                    break;

                case 'delete':
                    // Get image path before deleting
                    $stmt = $db->prepare("SELECT image_path FROM gallery WHERE id = ?");
                    $stmt->execute([$_POST['id']]);
                    $imagePath = $stmt->fetch(PDO::FETCH_ASSOC)['image_path'];
                    
                    // Delete from database
                    $stmt = $db->prepare("DELETE FROM gallery WHERE id = ?");
                    $stmt->execute([$_POST['id']]);
                    
                    // Delete image file
                    if ($imagePath && file_exists('../../' . $imagePath)) {
                        unlink('../../' . $imagePath);
                    }
                    
                    // Log activity
                    $adminHelper->logActivity(
                        $userData['id'],
                        'delete_gallery_item',
                        'Deleted gallery item ID: ' . $_POST['id']
                    );
                    
                    $_SESSION['success'] = "Gallery item deleted successfully!";
                    break;
            }
        }
    } catch (Exception $e) {
        error_log("Error in gallery management: " . $e->getMessage());
        $_SESSION['error'] = "An error occurred: " . $e->getMessage();
    }
    
    header('Location: gallery.php');
    exit();
}

// Get all gallery items
try {
    $database = new Database();
    $db = $database->getConnection();
    
    $query = "SELECT g.*, u.name as creator_name 
              FROM gallery g 
              LEFT JOIN users u ON g.created_by = u.id 
              ORDER BY g.display_order ASC, g.created_at DESC";
    $stmt = $db->query($query);
    $galleryItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Get categories
    $query = "SELECT * FROM gallery_categories ORDER BY name";
    $stmt = $db->query($query);
    $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    error_log("Error fetching gallery data: " . $e->getMessage());
    $galleryItems = [];
    $categories = [];
}

renderHeader('Manage Gallery');
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

    <!-- Add Gallery Item Button -->
    <div class="mb-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addGalleryModal">
            <i class="fas fa-plus"></i> Add New Gallery Item
        </button>
    </div>

    <!-- Gallery Grid -->
    <div class="row">
        <?php foreach ($galleryItems as $item): ?>
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                    <img src="<?php echo htmlspecialchars($item['image_path']); ?>" 
                         class="card-img-top" 
                         alt="<?php echo htmlspecialchars($item['title']); ?>"
                         style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($item['title']); ?></h5>
                        <p class="card-text small text-muted">
                            Category: <?php echo htmlspecialchars($item['category']); ?><br>
                            Status: <?php echo ucfirst($item['status']); ?><br>
                            Order: <?php echo $item['display_order']; ?><br>
                            <?php echo $item['is_featured'] ? '<span class="badge bg-warning">Featured</span>' : ''; ?>
                        </p>
                        <div class="btn-group">
                            <button type="button" 
                                    class="btn btn-sm btn-info" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#editGalleryModal"
                                    data-item='<?php echo htmlspecialchars(json_encode($item)); ?>'>
                                <i class="fas fa-edit"></i>
                            </button>
                            <button type="button" 
                                    class="btn btn-sm btn-danger"
                                    data-bs-toggle="modal"
                                    data-bs-target="#deleteGalleryModal"
                                    data-item-id="<?php echo $item['id']; ?>"
                                    data-item-title="<?php echo htmlspecialchars($item['title']); ?>">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Add Gallery Modal -->
<div class="modal fade" id="addGalleryModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" enctype="multipart/form-data">
                <input type="hidden" name="action" value="add">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Gallery Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select class="form-select" name="category" required>
                            <?php foreach ($categories as $category): ?>
                                <option value="<?php echo htmlspecialchars($category['name']); ?>">
                                    <?php echo htmlspecialchars($category['name']); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" accept="image/*" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Display Order</label>
                        <input type="number" class="form-control" name="display_order" value="0">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="is_featured" id="is_featured">
                            <label class="form-check-label" for="is_featured">Featured Item</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add Item</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Gallery Modal -->
<div class="modal fade" id="editGalleryModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" enctype="multipart/form-data">
                <input type="hidden" name="action" value="edit">
                <input type="hidden" name="id" id="edit_id">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Gallery Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="edit_title" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="edit_description" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select class="form-select" name="category" id="edit_category" required>
                            <?php foreach ($categories as $category): ?>
                                <option value="<?php echo htmlspecialchars($category['name']); ?>">
                                    <?php echo htmlspecialchars($category['name']); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" accept="image/*">
                        <small class="text-muted">Leave empty to keep current image</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Display Order</label>
                        <input type="number" class="form-control" name="display_order" id="edit_display_order">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="is_featured" id="edit_is_featured">
                            <label class="form-check-label" for="edit_is_featured">Featured Item</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select" name="status" id="edit_status">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update Item</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Gallery Modal -->
<div class="modal fade" id="deleteGalleryModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST">
                <input type="hidden" name="action" value="delete">
                <input type="hidden" name="id" id="delete_id">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Gallery Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this gallery item?</p>
                    <p class="text-danger">This action cannot be undone.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete Item</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
// Handle edit modal data
document.getElementById('editGalleryModal').addEventListener('show.bs.modal', function (event) {
    const button = event.relatedTarget;
    const item = JSON.parse(button.getAttribute('data-item'));
    
    document.getElementById('edit_id').value = item.id;
    document.getElementById('edit_title').value = item.title;
    document.getElementById('edit_description').value = item.description;
    document.getElementById('edit_category').value = item.category;
    document.getElementById('edit_display_order').value = item.display_order;
    document.getElementById('edit_is_featured').checked = item.is_featured === "1";
    document.getElementById('edit_status').value = item.status;
});

// Handle delete modal data
document.getElementById('deleteGalleryModal').addEventListener('show.bs.modal', function (event) {
    const button = event.relatedTarget;
    document.getElementById('delete_id').value = button.getAttribute('data-item-id');
});
</script>

<?php renderFooter(); ?> 