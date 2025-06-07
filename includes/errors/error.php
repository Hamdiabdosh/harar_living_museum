<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error - Harar Living Museum</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Set content type -->
    <?php header('Content-Type: text/html; charset=utf-8'); ?>

    <!-- Set page title -->
    <?php $pageTitle = 'Error'; ?>

    <!-- Include header -->
    <?php include '../layouts/header.php'; ?>

    <!-- Include navbar -->
    <?php include '../components/navbar.php'; ?>

    <main>
        <section class="error-content">
            <h1>Oops! Something went wrong</h1>
            <p>We apologize for the inconvenience. Please try again later or contact our support team if the problem persists.</p>
            <a href="<?php echo $basePath; ?>index.php" class="btn">Return to Home</a>
        </section>
    </main>

    <?php include '../components/footer.php'; ?>

    <script src="<?php echo $basePath; ?>assets/js/main.js"></script>
</body>
</html> 