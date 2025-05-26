<?php
session_start();
require_once '../handlers/db_connect.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: ../pages/login.html');
    exit();
}

// Handle comment submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Comment submission logic will be added here
}

// Fetch comments from database
$comments = []; // Will be populated from database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussions - Harar Living Museum</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header>
        <nav>
            <!-- Navigation will be added here -->
        </nav>
    </header>

    <main>
        <section class="comments-content">
            <h1>Community Discussions</h1>
            <div class="comment-submission">
                <h2>Start a Discussion</h2>
                <form action="comments.php" method="POST">
                    <div class="form-group">
                        <label for="topic">Topic:</label>
                        <input type="text" id="topic" name="topic" required>
                    </div>
                    <div class="form-group">
                        <label for="comment">Your Comment:</label>
                        <textarea id="comment" name="comment" required></textarea>
                    </div>
                    <button type="submit">Post Comment</button>
                </form>
            </div>
            <div class="comments-list">
                <!-- Comments will be displayed here -->
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Harar Living Museum. All rights reserved.</p>
    </footer>

    <script src="../assets/js/main.js"></script>
</body>
</html> 