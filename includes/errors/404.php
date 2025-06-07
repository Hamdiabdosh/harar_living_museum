<?php
// Set content type
header('Content-Type: text/html; charset=utf-8');

// Set page title
$pageTitle = 'Page Not Found';

// Include header
include '../layouts/header.php';

// Include navbar
include '../components/navbar.php';
?>

<main>
    <section class="not-found-content">
        <h1>404 - Page Not Found</h1>
        <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
        <a href="<?php echo $basePath; ?>index.php" class="btn">Return to Home</a>
    </section>
</main>

<?php include '../components/footer.php'; ?>

<script src="<?php echo $basePath; ?>assets/js/main.js"></script>
</body>
</html> 