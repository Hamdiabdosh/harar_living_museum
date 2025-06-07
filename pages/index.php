<?php
// Set content type
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harar Living Museum - Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>
    <?php include '../includes/background.php'; ?>
    <header>
        <!-- Include Navbar -->
        <?php include '../includes/navbar.php'; ?>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero-section py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-4 fw-bold mb-4">Welcome to Harar Living Museum</h1>
                        <p class="lead mb-4">Discover the rich cultural heritage and vibrant traditions of Harar, a UNESCO World Heritage site.</p>
                        <div class="d-grid gap-2 d-md-flex">
                            <a href="explore.php" class="btn btn-primary btn-lg">Start Exploring</a>
                            <a href="plan-visit.php" class="btn btn-outline-primary btn-lg">Plan Your Visit</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="../assets/images/hero-image.jpg" alt="Harar Heritage" class="img-fluid rounded shadow">
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
                            <img src="../assets/images/heritage.jpg" class="card-img-top" alt="Heritage">
                            <div class="card-body">
                                <h5 class="card-title">Cultural Heritage</h5>
                                <p class="card-text">Explore the rich cultural heritage and traditions that make Harar unique.</p>
                                <a href="heritage.php" class="btn btn-outline-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Tours -->
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">
                            <img src="../assets/images/tours.jpg" class="card-img-top" alt="Tours">
                            <div class="card-body">
                                <h5 class="card-title">Guided Tours</h5>
                                <p class="card-text">Experience Harar through our expert-guided tours and cultural experiences.</p>
                                <a href="tours.php" class="btn btn-outline-primary">View Tours</a>
                            </div>
                        </div>
                    </div>
                    <!-- Events -->
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">
                            <img src="../assets/images/events.jpg" class="card-img-top" alt="Events">
                            <div class="card-body">
                                <h5 class="card-title">Upcoming Events</h5>
                                <p class="card-text">Stay updated with cultural events, festivals, and special exhibitions.</p>
                                <a href="events.php" class="btn btn-outline-primary">See Events</a>
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
                                <a href="research.php" class="btn btn-primary">Explore Research</a>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery -->
                    <div class="col-lg-6">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h3 class="card-title">Photo Gallery</h3>
                                <p class="card-text">Browse through our collection of stunning photographs showcasing Harar's beauty.</p>
                                <a href="gallery.php" class="btn btn-primary">View Gallery</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Preview -->
        <section class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Visitor Experiences</h2>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="text-center mb-4">
                                    <i class="fas fa-quote-left fa-3x text-primary opacity-25"></i>
                                </div>
                                <p class="lead text-center mb-4">"An unforgettable experience that truly captures the essence of Harar's living heritage."</p>
                                <div class="text-center">
                                    <a href="testimonials.php" class="btn btn-outline-primary">Read More Stories</a>
                                </div>
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
                    <a href="register.php" class="btn btn-light btn-lg">Create Account</a>
                    <a href="contact.php" class="btn btn-outline-light btn-lg">Contact Us</a>
                </div>
            </div>
        </section>
    </main>

    <div id="footer-placeholder"></div>

    <!-- Bootstrap JS Bundle-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="../assets/js/main.js"></script>
</body>
</html> 