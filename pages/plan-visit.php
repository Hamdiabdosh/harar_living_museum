<?php
// Set content type
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan Your Visit - Harar Living Museum</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>
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
                        <h1 class="display-4 fw-bold mb-4">Plan Your Visit to Harar</h1>
                        <p class="lead">Your journey to Ethiopia's living museum begins here. Let us help you prepare for an unforgettable experience.</p>
                        <div class="mt-4">
                            <a href="#getting-here" class="btn btn-primary me-2">Getting Here</a>
                            <a href="#accommodation" class="btn btn-outline-light">Where to Stay</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quick Highlights -->
        <section class="py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center">
                                <i class="fas fa-landmark fa-3x mb-3 text-primary"></i>
                                <h3 class="h5">UNESCO World Heritage</h3>
                                <p>Explore the ancient walled city of Jugol, a living testament to Harar's rich history.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center">
                                <i class="fas fa-moon fa-3x mb-3 text-primary"></i>
                                <h3 class="h5">Hyena Feeding</h3>
                                <p>Witness the unique nightly tradition of hyena feeding, a practice unique to Harar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center">
                                <i class="fas fa-mosque fa-3x mb-3 text-primary"></i>
                                <h3 class="h5">Islamic Heritage</h3>
                                <p>Visit 82 mosques and experience the fourth holiest city in Islam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Getting to Harar -->
        <section id="getting-here" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5">Getting to Harar</h2>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="h5"><i class="fas fa-plane me-2"></i>By Air</h3>
                                <p>The nearest airports are:</p>
                                <ul>
                                    <li>Dire Dawa International Airport (DIR) - 50km from Harar</li>
                                    <li>Addis Ababa Bole International Airport (ADD) - 525km from Harar</li>
                                </ul>
                                <p class="mb-0">From Dire Dawa, you can take a bus or taxi to Harar (1-1.5 hours).</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="h5"><i class="fas fa-bus me-2"></i>By Road</h3>
                                <p>Options from Addis Ababa:</p>
                                <ul>
                                    <li>Bus: Daily services (8-10 hours)</li>
                                    <li>Private car: 7-8 hours</li>
                                    <li>Shared taxi: 6-7 hours</li>
                                </ul>
                                <p class="mb-0">From Dire Dawa: Regular buses and taxis available (1-1.5 hours).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Accommodation -->
        <section id="accommodation" class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Where to Stay</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="../assets/images/hotel.jpg" class="card-img-top" alt="Hotel">
                            <div class="card-body">
                                <h3 class="h5">Hotels</h3>
                                <p>Mid-range options with modern amenities:</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check me-2"></i>Heritage Plaza Hotel</li>
                                    <li><i class="fas fa-check me-2"></i>Ras Hotel</li>
                                    <li><i class="fas fa-check me-2"></i>Wonderland Hotel</li>
                                </ul>
                                <p class="text-muted">Price range: $30-80 per night</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="../assets/images/guesthouse.jpg" class="card-img-top" alt="Guesthouse">
                            <div class="card-body">
                                <h3 class="h5">Guesthouses</h3>
                                <p>Traditional stays for cultural immersion:</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check me-2"></i>Jugol Guesthouse</li>
                                    <li><i class="fas fa-check me-2"></i>Harar Cultural Guesthouse</li>
                                    <li><i class="fas fa-check me-2"></i>Old Town Guesthouse</li>
                                </ul>
                                <p class="text-muted">Price range: $15-40 per night</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="../assets/images/homestay.jpg" class="card-img-top" alt="Homestay">
                            <div class="card-body">
                                <h3 class="h5">Budget Stays</h3>
                                <p>Affordable options for backpackers:</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check me-2"></i>Harar Backpackers</li>
                                    <li><i class="fas fa-check me-2"></i>Jugol Hostel</li>
                                    <li><i class="fas fa-check me-2"></i>Local Homestays</li>
                                </ul>
                                <p class="text-muted">Price range: $5-20 per night</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Dining -->
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5">Where to Eat</h2>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="h5">Traditional Dishes to Try</h3>
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <strong>Harari Injera</strong>
                                        <p class="mb-0">Traditional flatbread served with various stews</p>
                                    </li>
                                    <li class="mb-3">
                                        <strong>Doro Wat</strong>
                                        <p class="mb-0">Spicy chicken stew, a national favorite</p>
                                    </li>
                                    <li class="mb-3">
                                        <strong>Harari Coffee</strong>
                                        <p class="mb-0">Experience the traditional coffee ceremony</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="h5">Popular Restaurants</h3>
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <strong>Fresh Touch Restaurant</strong>
                                        <p class="mb-0">Traditional and international cuisine</p>
                                    </li>
                                    <li class="mb-3">
                                        <strong>Hirut Restaurant</strong>
                                        <p class="mb-0">Local specialties and coffee ceremony</p>
                                    </li>
                                    <li class="mb-3">
                                        <strong>Jugol Restaurant</strong>
                                        <p class="mb-0">Authentic Harari dishes</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Transportation in Harar -->
        <section class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Getting Around Harar</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="h5"><i class="fas fa-walking me-2"></i>Walking</h3>
                                <p>The best way to explore Jugol (Old City) is on foot. The narrow streets and alleys are perfect for walking tours.</p>
                                <p class="text-muted">Tip: Wear comfortable shoes and carry water.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="h5"><i class="fas fa-taxi me-2"></i>Bajaj (Three-wheelers)</h3>
                                <p>Affordable and convenient for longer distances. Negotiate the fare before starting your journey.</p>
                                <p class="text-muted">Average fare: 20-50 ETB per trip</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="h5"><i class="fas fa-car me-2"></i>Taxis</h3>
                                <p>Available for longer trips or airport transfers. Can be arranged through your hotel.</p>
                                <p class="text-muted">Average fare: 100-200 ETB per trip</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cultural Etiquette -->
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5">Cultural Etiquette</h2>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="h5">Important Guidelines</h3>
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <i class="fas fa-tshirt me-2"></i>
                                        <strong>Dress Code:</strong> Modest clothing recommended, especially near religious sites
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-camera me-2"></i>
                                        <strong>Photography:</strong> Always ask permission before taking photos of people
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-mosque me-2"></i>
                                        <strong>Religious Sites:</strong> Remove shoes before entering mosques
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-handshake me-2"></i>
                                        <strong>Greetings:</strong> Use right hand for handshakes and giving/receiving items
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Best Time to Visit -->
        <section class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Best Time to Visit</h2>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="h5">Weather & Seasons</h3>
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <strong>October to February:</strong>
                                        <p class="mb-0">Pleasant weather, ideal for exploring</p>
                                    </li>
                                    <li class="mb-3">
                                        <strong>March to May:</strong>
                                        <p class="mb-0">Hot and dry, good for indoor activities</p>
                                    </li>
                                    <li class="mb-3">
                                        <strong>June to September:</strong>
                                        <p class="mb-0">Rainy season, fewer tourists</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="h5">Special Events</h3>
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <strong>Ashura:</strong>
                                        <p class="mb-0">Islamic celebration (dates vary)</p>
                                    </li>
                                    <li class="mb-3">
                                        <strong>Eid al-Fitr:</strong>
                                        <p class="mb-0">End of Ramadan (dates vary)</p>
                                    </li>
                                    <li class="mb-3">
                                        <strong>Harar Cultural Festival:</strong>
                                        <p class="mb-0">Annual celebration of Harari culture</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Packing Tips -->
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5">Packing Tips</h2>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="h5">Essential Items</h3>
                                        <ul class="list-unstyled">
                                            <li><i class="fas fa-check me-2"></i>Light, modest clothing</li>
                                            <li><i class="fas fa-check me-2"></i>Comfortable walking shoes</li>
                                            <li><i class="fas fa-check me-2"></i>Scarf/shawl for religious sites</li>
                                            <li><i class="fas fa-check me-2"></i>Reusable water bottle</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="h5">Health & Safety</h3>
                                        <ul class="list-unstyled">
                                            <li><i class="fas fa-check me-2"></i>First aid kit</li>
                                            <li><i class="fas fa-check me-2"></i>Sunscreen</li>
                                            <li><i class="fas fa-check me-2"></i>Insect repellent</li>
                                            <li><i class="fas fa-check me-2"></i>Basic medications</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Download Resources -->
        <section class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h2 class="mb-4">Download Helpful Resources</h2>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="h5">Visit Checklist</h3>
                                        <p>Everything you need to prepare for your trip</p>
                                        <a href="#" class="btn btn-primary">
                                            <i class="fas fa-download me-2"></i>Download PDF
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="h5">City Guide</h3>
                                        <p>Printable map and essential information</p>
                                        <a href="#" class="btn btn-primary">
                                            <i class="fas fa-download me-2"></i>Download PDF
                                        </a>
                                    </div>
                                </div>
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