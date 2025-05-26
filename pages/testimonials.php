<?php
// Set content type
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials - Harar Living Museum</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header>
        <nav>
            <?php include '../includes/navbar.php'; ?>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero-section position-relative text-white py-5" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('../assets/images/harar-visitors.jpg') center/cover;">
            <div class="container">
                <div class="row min-vh-50 align-items-center">
                    <div class="col-lg-8">
                        <h1 class="display-4 fw-bold mb-4">Visitor Reviews & Stories</h1>
                        <p class="lead">Hear what visitors have to say about their unforgettable journey to Harar.</p>
                        <div class="mt-4">
                            <a href="#featured-testimonials" class="btn btn-primary me-2">Featured Stories</a>
                            <a href="#share-story" class="btn btn-outline-light">Share Your Story</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Rating Summary -->
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5">Visitor Satisfaction</h2>
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <div class="card h-100 text-center">
                            <div class="card-body">
                                <i class="fas fa-star fa-3x text-warning mb-3"></i>
                                <h3 class="h2 mb-0">4.8</h3>
                                <p class="text-muted">Overall Rating</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card h-100 text-center">
                            <div class="card-body">
                                <i class="fas fa-hands-helping fa-3x text-primary mb-3"></i>
                                <h3 class="h2 mb-0">4.9</h3>
                                <p class="text-muted">Hospitality</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card h-100 text-center">
                            <div class="card-body">
                                <i class="fas fa-map-marked-alt fa-3x text-success mb-3"></i>
                                <h3 class="h2 mb-0">4.7</h3>
                                <p class="text-muted">Tour Quality</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card h-100 text-center">
                            <div class="card-body">
                                <i class="fas fa-landmark fa-3x text-info mb-3"></i>
                                <h3 class="h2 mb-0">4.9</h3>
                                <p class="text-muted">Cultural Richness</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Testimonials -->
        <section id="featured-testimonials" class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Featured Stories</h2>
                <div class="swiper testimonial-slider">
                    <div class="swiper-wrapper">
                        <!-- Testimonial 1 -->
                        <div class="swiper-slide">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="../assets/images/testimonials/visitor1.jpg" class="rounded-circle me-3" width="60" height="60" alt="Sarah">
                                        <div>
                                            <h5 class="mb-0">Sarah</h5>
                                            <p class="text-muted mb-0">Canada</p>
                                        </div>
                                    </div>
                                    <p class="card-text">"The hyena feeding experience was absolutely unforgettable. Our guide Ahmed was incredibly knowledgeable and made us feel safe throughout the experience."</p>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial 2 -->
                        <div class="swiper-slide">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="../assets/images/testimonials/visitor2.jpg" class="rounded-circle me-3" width="60" height="60" alt="Michael">
                                        <div>
                                            <h5 class="mb-0">Michael</h5>
                                            <p class="text-muted mb-0">Germany</p>
                                        </div>
                                    </div>
                                    <p class="card-text">"The traditional coffee ceremony was a highlight of our visit. The warmth of the local people and their willingness to share their culture was truly touching."</p>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!-- Testimonial Categories -->
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5">Browse by Experience</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="h5"><i class="fas fa-masks-theater me-2"></i>Cultural Insight</h3>
                                <p>Read about visitors' experiences with local traditions, festivals, and daily life in Harar.</p>
                                <a href="#" class="btn btn-outline-primary">Read Stories</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="h5"><i class="fas fa-mosque me-2"></i>Historical & Architecture</h3>
                                <p>Discover impressions of Harar's ancient walls, mosques, and traditional houses.</p>
                                <a href="#" class="btn btn-outline-primary">Read Stories</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="h5"><i class="fas fa-map-marked-alt me-2"></i>Tours & Guides</h3>
                                <p>Learn about guided experiences and the expertise of local tour guides.</p>
                                <a href="#" class="btn btn-outline-primary">Read Stories</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Community Stories -->
        <section class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Community Stories</h2>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- Story 1 -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="../assets/images/testimonials/researcher1.jpg" class="rounded-circle me-3" width="60" height="60" alt="Dr. Emma">
                                    <div>
                                        <h5 class="mb-0">Dr. Emma Thompson</h5>
                                        <p class="text-muted mb-0">Cultural Researcher, UK</p>
                                    </div>
                                </div>
                                <p class="card-text">"My research in Harar has been transformative. The city's living heritage, particularly in traditional crafts and oral histories, offers invaluable insights into East African cultural preservation."</p>
                                <div class="text-muted">
                                    <small>Posted: March 15, 2024</small>
                                </div>
                            </div>
                        </div>
                        <!-- Story 2 -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="../assets/images/testimonials/local1.jpg" class="rounded-circle me-3" width="60" height="60" alt="Ahmed">
                                    <div>
                                        <h5 class="mb-0">Ahmed Mohammed</h5>
                                        <p class="text-muted mb-0">Local Guide, Harar</p>
                                    </div>
                                </div>
                                <p class="card-text">"As a guide, I've had the privilege of sharing Harar's rich heritage with visitors from around the world. Their enthusiasm and respect for our culture continues to inspire me."</p>
                                <div class="text-muted">
                                    <small>Posted: March 10, 2024</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Share Your Story -->
        <section id="share-story" class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-center mb-4">Share Your Story</h2>
                                <form>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="country" class="form-label">Country</label>
                                        <input type="text" class="form-control" id="country" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="experience" class="form-label">Your Experience</label>
                                        <textarea class="form-control" id="experience" rows="4" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="rating" class="form-label">Rating</label>
                                        <select class="form-select" id="rating" required>
                                            <option value="">Select rating...</option>
                                            <option value="5">5 Stars - Excellent</option>
                                            <option value="4">4 Stars - Very Good</option>
                                            <option value="3">3 Stars - Good</option>
                                            <option value="2">2 Stars - Fair</option>
                                            <option value="1">1 Star - Poor</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="photo" class="form-label">Photo (Optional)</label>
                                        <input type="file" class="form-control" id="photo" accept="image/*">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="terms" required>
                                        <label class="form-check-label" for="terms">I agree to the terms of submission</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Submit Story</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Visitor of the Month -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card">
                            <div class="card-body text-center">
                                <h2 class="mb-4">Visitor of the Month</h2>
                                <img src="../assets/images/testimonials/visitor-month.jpg" class="rounded-circle mb-4" width="150" height="150" alt="Visitor of the Month">
                                <h3 class="h5">Maria from Spain</h3>
                                <p class="text-muted">March 2024</p>
                                <p>"My journey through Harar's ancient streets was like stepping back in time. The warmth of the people and the rich cultural experiences made this trip truly unforgettable."</p>
                                <div class="text-warning mb-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <a href="#" class="btn btn-outline-primary">Read Full Story</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include '../includes/footer.php'; ?>

    <!-- Bootstrap JS Bundle-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script>
        // Initialize Swiper
        const swiper = new Swiper('.testimonial-slider', {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
</body>
</html> 