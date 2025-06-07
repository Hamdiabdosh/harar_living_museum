<?php
// Set content type
header('Content-Type: text/html; charset=utf-8');

// Set page title
$pageTitle = 'Tours';

// Include header
include '../includes/layouts/header.php';

// Include navbar
include '../includes/components/navbar.php';
?>

<main>
    <!-- Hero Section -->
    <?php 
    // Include hero component
    include '../includes/heroes/hero-tourism.php';
    
    // Render the hero section
    renderHeroSection(
        "Discover Harar Through Guided Tours",
        "Experience the magic of Harar with our carefully curated tours, led by local experts who know every corner of this historic city.",
        "Let our experienced guides show you the hidden gems and authentic experiences that make Harar truly special."
    ); 
    ?>

    <!-- Local Guided Tours -->
    <section id="guided-tours" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Local Guided Tours</h2>
            <div class="row">
                <!-- Old Jugol Walking Tour -->
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <img src="../assets/images/jugol-tour.jpg" class="card-img-top" alt="Old Jugol Walking Tour">
                        <div class="card-body">
                            <h3 class="h5">Old Jugol Walking Tour</h3>
                            <p class="text-muted"><i class="fas fa-clock me-2"></i>Duration: 3-4 hours</p>
                            <p>Explore Harar's ancient walled city with a local guide. Discover hidden alleys, historic gates, and traditional architecture while learning about the city's rich history.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check me-2"></i>Visit all five historic gates</li>
                                <li><i class="fas fa-check me-2"></i>Explore traditional houses</li>
                                <li><i class="fas fa-check me-2"></i>Learn about local legends</li>
                            </ul>
                            <p class="mb-0"><strong>Price:</strong> $25-35 per person</p>
                        </div>
                    </div>
                </div>

                <!-- Cultural Heritage Tour -->
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <img src="../assets/images/cultural-tour.jpg" class="card-img-top" alt="Cultural Heritage Tour">
                        <div class="card-body">
                            <h3 class="h5">Cultural Heritage Tour</h3>
                            <p class="text-muted"><i class="fas fa-clock me-2"></i>Duration: 4-5 hours</p>
                            <p>Immerse yourself in Harar's rich cultural heritage. Visit shrines, museums, and local homes while experiencing traditional customs and practices.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check me-2"></i>Visit 82 mosques</li>
                                <li><i class="fas fa-check me-2"></i>Experience coffee ceremony</li>
                                <li><i class="fas fa-check me-2"></i>Meet local artisans</li>
                            </ul>
                            <p class="mb-0"><strong>Price:</strong> $30-40 per person</p>
                        </div>
                    </div>
                </div>

                <!-- Night Hyena Feeding Experience -->
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <img src="../assets/images/hyena-feeding.jpg" class="card-img-top" alt="Night Hyena Feeding Experience">
                        <div class="card-body">
                            <h3 class="h5">Night Hyena Feeding Experience</h3>
                            <p class="text-muted"><i class="fas fa-clock me-2"></i>Duration: 1-2 hours</p>
                            <p>Witness the unique tradition of hyena feeding, a practice that has been part of Harar's culture for generations.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check me-2"></i>Evening experience</li>
                                <li><i class="fas fa-check me-2"></i>Learn about hyena culture</li>
                                <li><i class="fas fa-check me-2"></i>Optional feeding participation</li>
                            </ul>
                            <p class="mb-0"><strong>Price:</strong> $15-20 per person</p>
                        </div>
                    </div>
                </div>

                <!-- Food & Market Tour -->
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <img src="../assets/images/food-tour.jpg" class="card-img-top" alt="Food & Market Tour">
                        <div class="card-body">
                            <h3 class="h5">Food & Market Tour</h3>
                            <p class="text-muted"><i class="fas fa-clock me-2"></i>Duration: 3-4 hours</p>
                            <p>Discover Harar's culinary delights through its vibrant markets and traditional food stalls.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check me-2"></i>Visit local markets</li>
                                <li><i class="fas fa-check me-2"></i>Sample traditional dishes</li>
                                <li><i class="fas fa-check me-2"></i>Learn cooking techniques</li>
                            </ul>
                            <p class="mb-0"><strong>Price:</strong> $20-30 per person</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Meet the Guides -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Meet Our Guides</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="../assets/images/guide1.jpg" class="card-img-top" alt="Guide Ahmed">
                        <div class="card-body">
                            <h3 class="h5">Ahmed Mohammed</h3>
                            <p class="text-muted">Senior Guide</p>
                            <p>With over 15 years of experience, Ahmed specializes in historical tours and cultural heritage.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-language me-2"></i>English, Arabic, Harari</li>
                                <li><i class="fas fa-star me-2"></i>15+ years experience</li>
                            </ul>
                            <blockquote class="blockquote mt-3">
                                <p class="mb-0"><i class="fas fa-quote-left me-2"></i>Every corner of Harar tells a story, and I love sharing these stories with visitors.</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="../assets/images/guide2.jpg" class="card-img-top" alt="Guide Fatima">
                        <div class="card-body">
                            <h3 class="h5">Fatima Hassan</h3>
                            <p class="text-muted">Cultural Specialist</p>
                            <p>Fatima leads our cultural tours and specializes in traditional arts and crafts.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-language me-2"></i>English, French, Harari</li>
                                <li><i class="fas fa-star me-2"></i>10+ years experience</li>
                            </ul>
                            <blockquote class="blockquote mt-3">
                                <p class="mb-0"><i class="fas fa-quote-left me-2"></i>Harar's culture is alive in its people, and I'm passionate about sharing it with the world.</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="../assets/images/guide3.jpg" class="card-img-top" alt="Guide Omar">
                        <div class="card-body">
                            <h3 class="h5">Omar Ali</h3>
                            <p class="text-muted">Food & Market Expert</p>
                            <p>Omar leads our food tours and knows every corner of Harar's markets.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-language me-2"></i>English, Italian, Harari</li>
                                <li><i class="fas fa-star me-2"></i>8+ years experience</li>
                            </ul>
                            <blockquote class="blockquote mt-3">
                                <p class="mb-0"><i class="fas fa-quote-left me-2"></i>The best way to understand Harar is through its food and markets.</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Self-Guided Routes -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Self-Guided Routes</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="h5">Jugol Heritage Walk</h3>
                            <p class="text-muted"><i class="fas fa-walking me-2"></i>Duration: 2-3 hours</p>
                            <p>Explore the walled city at your own pace with our detailed route guide.</p>
                            <a href="#" class="btn btn-outline-primary">
                                <i class="fas fa-download me-2"></i>Download Route Map
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="h5">Market Explorer Route</h3>
                            <p class="text-muted"><i class="fas fa-walking me-2"></i>Duration: 1-2 hours</p>
                            <p>Navigate Harar's vibrant markets with our insider's guide.</p>
                            <a href="#" class="btn btn-outline-primary">
                                <i class="fas fa-download me-2"></i>Download Route Map
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Section -->
    <section id="booking" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Book Your Tour</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="tourType" class="form-label">Select Tour</label>
                                    <select class="form-select" id="tourType" required>
                                        <option value="">Choose a tour...</option>
                                        <option value="jugol">Old Jugol Walking Tour</option>
                                        <option value="cultural">Cultural Heritage Tour</option>
                                        <option value="hyena">Night Hyena Feeding Experience</option>
                                        <option value="food">Food & Market Tour</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="date" class="form-label">Preferred Date</label>
                                    <input type="date" class="form-control" id="date" required>
                                </div>
                                <div class="mb-3">
                                    <label for="time" class="form-label">Preferred Time</label>
                                    <input type="time" class="form-control" id="time" required>
                                </div>
                                <div class="mb-3">
                                    <label for="participants" class="form-label">Number of Participants</label>
                                    <input type="number" class="form-control" id="participants" min="1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" required>
                                </div>
                                <div class="mb-3">
                                    <label for="notes" class="form-label">Special Requests</label>
                                    <textarea class="form-control" id="notes" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Book Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tour Tips -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Tour Tips & Etiquette</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <i class="fas fa-shoe-prints me-2"></i>
                                    <strong>Comfortable Footwear:</strong> Wear comfortable walking shoes for exploring the city
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-mosque me-2"></i>
                                    <strong>Religious Sites:</strong> Dress modestly and remove shoes before entering mosques
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-camera me-2"></i>
                                    <strong>Photography:</strong> Always ask permission before taking photos of people
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-tint me-2"></i>
                                    <strong>Stay Hydrated:</strong> Carry water, especially during afternoon walks
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
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