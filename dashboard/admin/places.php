<?php
require_once '../layout.php';
checkAuth();

// Check if user is admin
if (!isAdmin()) {
    header('Location: /dashboard/user.php');
    exit();
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $database = new Database();
        $db = $database->getConnection();
        
        if (isset($_POST['action'])) {
            switch ($_POST['action']) {
                case 'add':
                    $stmt = $db->prepare("INSERT INTO places (name, description, location, category, image_url) VALUES (?, ?, ?, ?, ?)");
                    $stmt->execute([
                        $_POST['name'],
                        $_POST['description'],
                        $_POST['location'],
                        $_POST['category'],
                        $_POST['image_url']
                    ]);
                    $_SESSION['success'] = "Place added successfully!";
                    break;

                case 'edit':
                    $stmt = $db->prepare("UPDATE places SET name = ?, description = ?, location = ?, category = ?, image_url = ? WHERE place_id = ?");
                    $stmt->execute([
                        $_POST['name'],
                        $_POST['description'],
                        $_POST['location'],
                        $_POST['category'],
                        $_POST['image_url'],
                        $_POST['place_id']
                    ]);
                    $_SESSION['success'] = "Place updated successfully!";
                    break;

                case 'delete':
                    $stmt = $db->prepare("DELETE FROM places WHERE place_id = ?");
                    $stmt->execute([$_POST['place_id']]);
                    $_SESSION['success'] = "Place deleted successfully!";
                    break;
            }
        }
    } catch (Exception $e) {
        error_log("Error in places management: " . $e->getMessage());
        $_SESSION['error'] = "An error occurred while processing your request.";
    }
    
    header('Location: places.php');
    exit();
}

// Get all places
try {
    $database = new Database();
    $db = $database->getConnection();
    
    $query = "SELECT * FROM places ORDER BY created_at DESC";
    $stmt = $db->query($query);
    $places = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    error_log("Error fetching places: " . $e->getMessage());
    $places = [];
}

renderHeader('Manage Places');
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

    <!-- Add Place Button -->
    <div class="mb-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPlaceModal">
            <i class="fas fa-plus"></i> Add New Place
        </button>
    </div>

    <!-- Places Table -->
    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">All Places</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Location</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($places as $place): ?>
                            <tr>
                                <td><?php echo $place['place_id']; ?></td>
                                <td><?php echo htmlspecialchars($place['name']); ?></td>
                                <td><?php echo htmlspecialchars($place['category']); ?></td>
                                <td><?php echo htmlspecialchars($place['location']); ?></td>
                                <td><?php echo date('M d, Y', strtotime($place['created_at'])); ?></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-info" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#editPlaceModal"
                                            data-place='<?php echo htmlspecialchars(json_encode($place)); ?>'>
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger"
                                            data-bs-toggle="modal"
                                            data-bs-target="#deletePlaceModal"
                                            data-place-id="<?php echo $place['place_id']; ?>"
                                            data-place-name="<?php echo htmlspecialchars($place['name']); ?>">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add Place Modal -->
<div class="modal fade" id="addPlaceModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST">
                <input type="hidden" name="action" value="add">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Place</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Location</label>
                        <input type="text" class="form-control" name="location" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select class="form-select" name="category" required>
                            <option value="historical">Historical</option>
                            <option value="cultural">Cultural</option>
                            <option value="natural">Natural</option>
                            <option value="religious">Religious</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image URL</label>
                        <input type="url" class="form-control" name="image_url" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add Place</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Place Modal -->
<div class="modal fade" id="editPlaceModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST">
                <input type="hidden" name="action" value="edit">
                <input type="hidden" name="place_id" id="edit_place_id">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Place</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="edit_name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="edit_description" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Location</label>
                        <input type="text" class="form-control" name="location" id="edit_location" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select class="form-select" name="category" id="edit_category" required>
                            <option value="historical">Historical</option>
                            <option value="cultural">Cultural</option>
                            <option value="natural">Natural</option>
                            <option value="religious">Religious</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image URL</label>
                        <input type="url" class="form-control" name="image_url" id="edit_image_url" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update Place</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Place Modal -->
<div class="modal fade" id="deletePlaceModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST">
                <input type="hidden" name="action" value="delete">
                <input type="hidden" name="place_id" id="delete_place_id">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Place</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete the place "<span id="delete_place_name"></span>"?</p>
                    <p class="text-danger">This action cannot be undone.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete Place</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
// Handle edit modal
document.getElementById('editPlaceModal').addEventListener('show.bs.modal', function (event) {
    const button = event.relatedTarget;
    const place = JSON.parse(button.getAttribute('data-place'));
    
    document.getElementById('edit_place_id').value = place.place_id;
    document.getElementById('edit_name').value = place.name;
    document.getElementById('edit_description').value = place.description;
    document.getElementById('edit_location').value = place.location;
    document.getElementById('edit_category').value = place.category;
    document.getElementById('edit_image_url').value = place.image_url;
});

// Handle delete modal
document.getElementById('deletePlaceModal').addEventListener('show.bs.modal', function (event) {
    const button = event.relatedTarget;
    const placeId = button.getAttribute('data-place-id');
    const placeName = button.getAttribute('data-place-name');
    
    document.getElementById('delete_place_id').value = placeId;
    document.getElementById('delete_place_name').textContent = placeName;
});
</script>

<?php renderFooter(); ?> 