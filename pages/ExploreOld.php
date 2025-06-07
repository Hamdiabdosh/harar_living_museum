<?php
// Set content type
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore - Harar Living Museum</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Leaflet CSS for Maps -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/background.css">
</head>
<body>
    <?php ; ?>
    <header>
        
        <!-- Include Navbar -->
        <?php 
        include '../includes/layouts/header.php';
        include '../includes/components/navbar.php'; ?>
    </header>

    <main>
                <!-- Hero Section -->
        <section class="hero-section position-relative text-white py-5" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('../assets/images/explore/hero-bg.jpg') center/cover;">
            <div class="container">
                <div class="row min-vh-50 align-items-center">
                    <div class="col-lg-8">
                        <h1 class="display-4 fw-bold mb-4">Step into Harar's Timeless Charm</h1>
                        <p class="lead">Discover a city where ancient traditions meet vibrant culture, where every corner tells a story, and where history comes alive in the streets of Jugol.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Explore Categories -->
        <section class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Explore by Category</h2>
                
                <!-- Historic & Cultural Landmarks -->
                <div class="category-section mb-5">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3><i class="fas fa-mosque me-2"></i>Historic & Cultural Landmarks</h3>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h4 class="h5">Jugol (Walled City)</h4>
                                    <p>Explore the ancient walled city with its five historic gates, narrow alleyways, and traditional architecture that has stood the test of time.</p>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h4 class="h5">Harar Museums</h4>
                                    <p>Visit the Arthur Rimbaud House and Sherif Harar City Museum to discover the city's rich history and cultural heritage.</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="h5">Mosques & Shrines</h4>
                                    <p>Experience the spiritual heart of Harar through its 82 mosques and numerous shrines, each with its own unique story.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="../assets/images/explore/jugol-gate.jpg" alt="Jugol Gate" class="img-fluid rounded shadow">
                        </div>
                    </div>
                </div>

                <!-- Local Markets & Bazaars -->
                <div class="category-section mb-5">
                    <div class="row align-items-center">
                        <div class="col-md-6 order-md-2">
                            <h3><i class="fas fa-store me-2"></i>Local Markets & Bazaars</h3>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h4 class="h5">Jama Market</h4>
                                    <p>Immerse yourself in the vibrant atmosphere of Harar's largest market, where you'll find everything from traditional textiles to aromatic spices.</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="h5">Food Stalls</h4>
                                    <p>Savor the authentic flavors of Harar through its street food, including fresh injera, traditional coffee, and local delicacies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 order-md-1">
                            <img src="../assets/images/explore/market.jpg" alt="Jama Market" class="img-fluid rounded shadow">
                        </div>
                    </div>
                </div>

                <!-- Local Life & Experiences -->
                <div class="category-section mb-5">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3><i class="fas fa-users me-2"></i>Local Life & Experiences</h3>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h4 class="h5">Hyena Feeding Ceremony</h4>
                                    <p>Witness the unique nightly tradition where locals feed hyenas, a practice that has been part of Harar's culture for generations.</p>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h4 class="h5">Coffee Culture</h4>
                                    <p>Experience the world-famous Harari coffee ceremony, a UNESCO-recognized cultural tradition that brings communities together.</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="h5">Traditional Homes</h4>
                                    <p>Visit traditional Harari houses to learn about their unique architecture, interior design, and family life.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="../assets/images/explore/coffee-ceremony.jpg" alt="Coffee Ceremony" class="img-fluid rounded shadow">
                        </div>
                    </div>
                </div>
            </div>
        </section>

       

        <!-- Featured Places -->
        <section class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Featured Places</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="../assets/images/explore/rimbaud-house.jpg" class="card-img-top" alt="Arthur Rimbaud House">
                            <div class="card-body">
                                <h3 class="h5">Arthur Rimbaud House</h3>
                                <p>Visit the former residence of the famous French poet, now a museum showcasing Harar's history.</p>
                                <a href="#" class="btn btn-outline-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="../assets/images/explore/jugol-walls.jpg" class="card-img-top" alt="Jugol Walls">
                            <div class="card-body">
                                <h3 class="h5">Jugol Walls</h3>
                                <p>Explore the ancient defensive walls that have protected Harar for centuries.</p>
                                <a href="#" class="btn btn-outline-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="../assets/images/explore/market-square.jpg" class="card-img-top" alt="Market Square">
                            <div class="card-body">
                                <h3 class="h5">Market Square</h3>
                                <p>Experience the vibrant heart of Harar's commercial and social life.</p>
                                <a href="#" class="btn btn-outline-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Arthur Rimbaud Cultural Center -->
        <section class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Explore the Legacy of Arthur Rimbaud in Harar</h2>
                
                <!-- Image Gallery -->
                <div class="row mb-5">
                    <div class="col-md-4 mb-4">
                        <img src="../assets/images/explore/rambo1 (1).jpg" alt="Rimbaud Center" class="img-fluid rounded shadow">
                    </div>
                    <div class="col-md-4 mb-4">
                        <img src="../assets/images/explore/rambo1 (2).jpg" alt="Rimbaud Center Interior" class="img-fluid rounded shadow">
                    </div>
                    <div class="col-md-4 mb-4">
                        <img src="../assets/images/explore/rambo1 (3).jpg" alt="Rimbaud Center View" class="img-fluid rounded shadow">
                    </div>
                    <div class="col-md-4 mb-4">
                        <img src="../assets/images/explore/rambo1 (4).jpg" alt="Rimbaud Center Details" class="img-fluid rounded shadow">
                    </div>
                    <div class="col-md-4 mb-4">
                        <img src="../assets/images/explore/rambo1 (5).jpg" alt="Rimbaud Center Architecture" class="img-fluid rounded shadow">
                    </div>
                    <div class="col-md-4 mb-4">
                        <img src="../assets/images/explore/rambo1 (6).jpg" alt="Rimbaud Center Surroundings" class="img-fluid rounded shadow">
                    </div>
                </div>

                <!-- Content -->
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h4 mb-4">The Arthur Rimbaud Cultural Center</h3>
                                <p>The Arthur Rimbaud Cultural Center in Harar, Ethiopia, offers a unique journey into the life of the iconic French poet, Arthur Rimbaud, who spent pivotal years in this historic city during the 1880s.</p>
                                
                                <p>Housed in a beautifully restored building originally constructed by Indian merchant Jiwaji, the center immerses visitors in Rimbaud's transformation from a rebellious literary figure to an influential force in African trade and culture. With historical documents, rare photographs, and personal artifacts, the museum offers a deeper understanding of Rimbaud's significant contributions to Harar and beyond.</p>

                                <div class="features-list mt-4">
                                    <h4 class="h5 mb-3">Center Features:</h4>
                                    <ul class="list-unstyled">
                                        <li class="mb-3">
                                            <i class="fas fa-book me-2 text-primary"></i>
                                            <strong>Research & Documentation Space</strong>
                                            <p class="mb-0">Located on the ground floor for scholars and visitors</p>
                                        </li>
                                        <li class="mb-3">
                                            <i class="fas fa-bed me-2 text-primary"></i>
                                            <strong>Guesthouse</strong>
                                            <p class="mb-0">Stay and reflect on Rimbaud's legacy</p>
                                        </li>
                                        <li class="mb-3">
                                            <i class="fas fa-shopping-bag me-2 text-primary"></i>
                                            <strong>Souvenir Shop</strong>
                                            <p class="mb-0">Exclusive items inspired by Rimbaud's life and Harar's heritage</p>
                                        </li>
                                    </ul>
                                </div>

                                <div class="location-info mt-4">
                                    <h4 class="h5 mb-3">Location & Surroundings</h4>
                                    <p>Located near the vibrant Makina Girgir area, the center provides a stunning view of Harari's traditional architecture and lively markets, making it a perfect destination for those seeking to experience the intersection of literature, history, and local culture.</p>
                                </div>

                                <div class="cta-section text-center mt-5">
                                    <p class="lead">Step into the world of Arthur Rimbaud and discover how his life in Harar shaped his legacy and how his influence continues to resonate today.</p>
                                    <a href="#" class="btn btn-primary mt-3">
                                        <i class="fas fa-ticket-alt me-2"></i>Book Your Visit
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Harari Basketry Section -->
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5">The Timeless Art of Harari Basketry | Gey Moté</h2>
                
                <!-- Image Gallery -->
                <div class="row mb-5 justify-content-center">
                    <div class="col-md-4 mb-4">
                        <img src="../assets/images/explore/mot1.jpg" alt="Harari Basketry" class="img-fluid rounded shadow">
                    </div>
                    <div class="col-md-4 mb-4">
                        <img src="../assets/images/explore/mot2.jpg" alt="Basket Making Process" class="img-fluid rounded shadow">
                    </div>
                    <div class="col-md-4 mb-4">
                        <img src="../assets/images/explore/mot3.jpg" alt="Traditional Patterns" class="img-fluid rounded shadow">
                    </div>
                    <div class="col-md-4 mb-4">
                        <img src="../assets/images/explore/mot4.jpg" alt="Basket Designs" class="img-fluid rounded shadow equal-size" style="width: 400px; height: 300px; object-fit: cover;">
                    </div>
                    <div class="col-md-4 mb-4">
                        <img src="../assets/images/explore/mot5.jpg" alt="Artisan Work" class="img-fluid rounded shadow equal-size" style="width: 400px; height: 300px; object-fit: cover;">
                    </div>
                </div>

                <!-- Content -->
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h3 class="h4 mb-4">Cultural Heritage & Artistry</h3>
                                        <p>Harari basketry stands as a vibrant and timeless commercial art form, intricately weaving together the cultural heritage and economic development of the Harari people. Crafted primarily by skilled indigenous women using locally sourced grass and straw, these baskets are not merely functional items but captivating embodiments of tradition and artistry.</p>
                                        
                                        <p>Renowned globally for their exquisite designs, Harari baskets serve as powerful symbols of identity, fulfilling decorative, ceremonial, and utilitarian roles within Harari society. With approximately 37 distinct designs, each basket reflects a unique representation of sophistication and cultural expression.</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card bg-light">
                                            <div class="card-body">
                                                <h4 class="h5 mb-3">Key Features</h4>
                                                <ul class="list-unstyled">
                                                    <li class="mb-2"><i class="fas fa-check-circle me-2 text-primary"></i>37 distinct designs</li>
                                                    <li class="mb-2"><i class="fas fa-check-circle me-2 text-primary"></i>Handcrafted by women</li>
                                                    <li class="mb-2"><i class="fas fa-check-circle me-2 text-primary"></i>Local materials</li>
                                                    <li class="mb-2"><i class="fas fa-check-circle me-2 text-primary"></i>Geometric patterns</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="artistic-techniques mt-4">
                                    <h4 class="h5 mb-3">Artistic Excellence</h4>
                                    <p>The artistry of Harari basketry transcends mere craftsmanship; it showcases mastery in color manipulation through intricate dyeing techniques. Characterized by ingenious geometric patterns woven into continuous coils of grass and accentuated by bright, contrasting colors, these baskets exhibit a refined aesthetic that highlights the meticulous skill involved in transforming simple materials into luxurious objects.</p>
                                </div>

                                <div class="basket-types mt-4">
                                    <h4 class="h5 mb-3">Types of Baskets</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <h5 class="h6">Utilitarian Baskets</h5>
                                                    <ul class="list-unstyled">
                                                        <li><i class="fas fa-circle me-2 text-primary"></i>Afuftu - for winnowing grains</li>
                                                        <li><i class="fas fa-circle me-2 text-primary"></i>Eraz Mudai - for clothes storage</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <h5 class="h6">Ceremonial Baskets</h5>
                                                    <ul class="list-unstyled">
                                                        <li><i class="fas fa-circle me-2 text-primary"></i>Hamat Moté - bridal gifts</li>
                                                        <li><i class="fas fa-circle me-2 text-primary"></i>Decorative wall pieces</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="cultural-legacy mt-4">
                                    <h4 class="h5 mb-3">Cultural Legacy</h4>
                                    <p>The establishment of the first handcraft house in 1960 marked a pivotal moment in promoting Harari basketry, preserving its legacy under the guidance of visionary creators like Ametula Gerad Turky. Modern artisans like Shamitu and Auma Rewda Ahmed Ali Shami carry this rich tradition forward, ensuring that the cultural heritage woven into each basket remains vibrant for future generations.</p>
                                </div>

                                <div class="cta-section text-center mt-5">
                                    <p class="lead">Experience the beauty and significance of Harari basketry firsthand.</p>
                                    <a href="#" class="btn btn-primary mt-3">
                                        <i class="fas fa-map-marker-alt me-2"></i>Visit Harar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Traveler Tips -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="mb-4">Traveler Tips</h2>
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h5">Best Times to Visit</h3>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-clock me-2"></i>Early morning for market visits</li>
                                    <li><i class="fas fa-moon me-2"></i>Evening for hyena feeding ceremony</li>
                                    <li><i class="fas fa-calendar me-2"></i>October to February for pleasant weather</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h3 class="h5">Fun Facts</h3>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-info-circle me-2"></i>Harar has over 350 alleyways in Jugol</li>
                                    <li><i class="fas fa-info-circle me-2"></i>Known as the fourth holiest city in Islam</li>
                                    <li><i class="fas fa-info-circle me-2"></i>Home to the world's first coffee ceremony</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="h5">Download Guide</h3>
                                <p>Get our comprehensive guide to exploring Harar</p>
                                <a href="#" class="btn btn-primary w-100">
                                    <i class="fas fa-download me-2"></i>Download PDF
                                </a>
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
    <!-- Leaflet JS for Maps -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="../assets/js/main.js"></script>
    
    <script>
        // Initialize map
        const map = L.map('map').setView([9.3114, 42.1283], 14);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Add markers for key locations
        const locations = [
            {name: 'Jugol Gate', lat: 9.3114, lng: 42.1283},
            {name: 'Arthur Rimbaud House', lat: 9.3120, lng: 42.1290},
            {name: 'Jama Market', lat: 9.3100, lng: 42.1270}
        ];

        locations.forEach(loc => {
            L.marker([loc.lat, loc.lng])
                .bindPopup(loc.name)
                .addTo(map);
        });
    </script>
</body>
</html> 