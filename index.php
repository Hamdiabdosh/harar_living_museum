<?php
// Set content type
header('Content-Type: text/html; charset=utf-8');

// Set page title
$pageTitle = 'Home';

// Include header
include 'includes/header.php';

// Include navbar
include 'includes/navbar.php';
?>

<main>
    <section class="hero">
        <h1>Welcome to Harar Living Museum</h1>
        <p>Discover the rich cultural heritage of Harar, Ethiopia</p>
    </section>
</main>

<?php
// Include footer
include 'includes/footer.php';
?>

<!-- Bootstrap JS Bundle-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="assets/js/main.js"></script>
</body>
</html> 