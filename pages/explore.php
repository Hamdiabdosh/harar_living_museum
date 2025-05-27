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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Leaflet CSS for Maps -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
    <link rel="stylesheet" href="../assets/css/style.css">
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
        <section class="hero-section position-relative text-white py-5" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('../assets/images/harar-streets.jpg') center/cover;">
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
                            <img src="../assets/images/jugol-gate.jpg" alt="Jugol Gate" class="img-fluid rounded shadow">
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
                            <img src="../assets/images/market.jpg" alt="Jama Market" class="img-fluid rounded shadow">
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
                            <img src="../assets/images/coffee-ceremony.jpg" alt="Coffee Ceremony" class="img-fluid rounded shadow">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Interactive Map -->
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-4">Interactive Map</h2>
                <div id="map" style="height: 500px;" class="rounded shadow"></div>
            </div>
        </section>

        <!-- Featured Places -->
        <section class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Featured Places</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="../assets/images/rimbaud-house.jpg" class="card-img-top" alt="Arthur Rimbaud House">
                            <div class="card-body">
                                <h3 class="h5">Arthur Rimbaud House</h3>
                                <p>Visit the former residence of the famous French poet, now a museum showcasing Harar's history.</p>
                                <a href="#" class="btn btn-outline-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="../assets/images/jugol-walls.jpg" class="card-img-top" alt="Jugol Walls">
                            <div class="card-body">
                                <h3 class="h5">Jugol Walls</h3>
                                <p>Explore the ancient defensive walls that have protected Harar for centuries.</p>
                                <a href="#" class="btn btn-outline-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="../assets/images/market-square.jpg" class="card-img-top" alt="Market Square">
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