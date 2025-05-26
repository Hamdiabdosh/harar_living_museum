<?php
session_start();
require_once '../handlers/db_connect.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: ../pages/login.html');
    exit();
}

// Handle story submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Story submission logic will be added here
}

// Fetch stories from database
$stories = []; // Will be populated from database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Stories - Harar Living Museum</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header>
        <nav>
            <!-- Navigation will be added here -->
        </nav>
    </header>

    <main>
        <section class="stories-content">
            <h1>User Submitted Stories</h1>
            <div class="story-submission">
                <h2>Share Your Story</h2>
                <form action="stories.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Story Title:</label>
                        <input type="text" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="content">Your Story:</label>
                        <textarea id="content" name="content" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="images">Add Images:</label>
                        <input type="file" id="images" name="images[]" multiple accept="image/*">
                    </div>
                    <button type="submit">Submit Story</button>
                </form>
            </div>
            <div class="stories-list">
                <!-- Stories will be displayed here -->
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Harar Living Museum. All rights reserved.</p>
    </footer>

    <script src="../assets/js/main.js"></script>
</body>
</html> 