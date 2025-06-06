<?php
// Set content type
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found - Harar Living Museum</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <nav>
            <!-- Navigation will be added here -->
        </nav>
    </header>

    <main>
        <section class="not-found-content">
            <h1>404 - Page Not Found</h1>
            <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
            <a href="index.php" class="btn">Return to Home</a>
        </section>
    </main>

    <?php include '../includes/footer.php'; ?>

    <script src="assets/js/main.js"></script>
</body>
</html> 