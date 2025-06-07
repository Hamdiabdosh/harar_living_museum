<?php
// Set content type
header('Content-Type: text/html; charset=utf-8');

// Set page title
$pageTitle = 'Home';

// Include header
include 'includes/header.php';

// Add background CSS
echo '<link rel="stylesheet" href="assets/css/background.css">';
echo '<link rel="stylesheet" href="assets/css/theme.css">';
echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">';

// Include navbar
include 'includes/navbar.php';
?>

<main>
    <!-- Hero Section -->
    <section class="hero py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Welcome to Harar Living Museum</h1>
                    <p class="lead mb-4">Discover the rich cultural heritage and vibrant traditions of Harar, a UNESCO World Heritage site.</p>
                    <div class="d-grid gap-2 d-md-flex">
                        <a href="pages/explore.php" class="btn btn-primary btn-lg">Start Exploring</a>
                        <a href="pages/plan-visit.php" class="btn btn-outline-primary btn-lg">Plan Your Visit</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="assets/images/hero-image.jpg" alt="Harar Heritage" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Sections -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Discover Harar</h2>
            <div class="row g-4">
                <!-- Heritage -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="assets/images/heritage.jpg" class="card-img-top" alt="Heritage">
                        <div class="card-body">
                            <h5 class="card-title">Cultural Heritage</h5>
                            <p class="card-text">Explore the rich cultural heritage and traditions that make Harar unique.</p>
                            <a href="pages/heritage.php" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- Tours -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="assets/images/tours.jpg" class="card-img-top" alt="Tours">
                        <div class="card-body">
                            <h5 class="card-title">Guided Tours</h5>
                            <p class="card-text">Experience Harar through our expert-guided tours and cultural experiences.</p>
                            <a href="pages/tours.php" class="btn btn-outline-primary">View Tours</a>
                        </div>
                    </div>
                </div>
                <!-- Events -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="assets/images/events.jpg" class="card-img-top" alt="Events">
                        <div class="card-body">
                            <h5 class="card-title">Upcoming Events</h5>
                            <p class="card-text">Stay updated with cultural events, festivals, and special exhibitions.</p>
                            <a href="pages/events.php" class="btn btn-outline-primary">See Events</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Research & Gallery Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <!-- Research -->
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title">Research & Documentation</h3>
                            <p class="card-text">Access our extensive collection of research materials and historical documentation about Harar.</p>
                            <a href="pages/research.php" class="btn btn-primary">Explore Research</a>
                        </div>
                    </div>
                </div>
                <!-- Gallery -->
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title">Photo Gallery</h3>
                            <p class="card-text">Browse through our collection of stunning photographs showcasing Harar's beauty.</p>
                            <a href="pages/gallery.php" class="btn btn-primary">View Gallery</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5 bg-primary text-white">
        <div class="container text-center">
            <h2 class="mb-4">Ready to Experience Harar?</h2>
            <p class="lead mb-4">Join us in preserving and celebrating the rich cultural heritage of Harar.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <a href="pages/register.php" class="btn btn-light btn-lg">Create Account</a>
                <a href="pages/contact.php" class="btn btn-outline-light btn-lg">Contact Us</a>
            </div>
        </div>
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
<script src="assets/js/theme.js"></script>
</body>
</html> 