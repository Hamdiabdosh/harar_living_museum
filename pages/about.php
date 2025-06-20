<?php
// Set content type
header('Content-Type: text/html; charset=utf-8');

// Set page title
$pageTitle = 'About';

// Include header
include '../includes/layouts/header.php';

// Include navbar
include '../includes/components/navbar.php';
?>

<body>
    <?php ; ?>
    <header>
        <!-- Include Hero Section -->
        <?php include '../includes/heroes/hero-about.php'; ?>
    </header>

    <main class="container py-5">
        <!-- Historical Overview -->
        <section id="history" class="mb-5">
            <h2 class="mb-4">Historical Overview</h2>
            <div class="row">
                <div class="col-md-6">
                    <p>Founded in the 7th century, Harar has served as a crucial crossroads for trade and culture between Africa and the Middle East. The city's ancient walls, known as Jugol, were constructed in the 16th century and still stand as a symbol of Harar's historical significance.</p>
                </div>
                <div class="col-md-6">
                    <p>Throughout its history, Harar has been a center of Islamic scholarship and trade, attracting merchants, scholars, and travelers from across the globe. Its strategic location made it a vital hub in the Horn of Africa's commercial network.</p>
                </div>
            </div>
        </section>

        <!-- Cultural Significance -->
        <section id="culture" class="mb-5">
            <h2 class="mb-4">Cultural Significance</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card h-100 cultural-card">
                        <div class="card-body text-white" style="background: url('../assets/images/banner/harar-mosque.jpg') center/cover;">
                            <h3 class="h5"><i class="fas fa-mosque me-2"></i>Islamic Heritage</h3>
                            <p>Home to 82 mosques and 102 shrines, Harar is a center of Islamic learning and spirituality in East Africa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 cultural-card">
                        <div class="card-body text-white" style="background: url('../assets/images/banner/arc.jpg') center/cover;">
                            <h3 class="h5"><i class="fas fa-palette me-2"></i>Arts & Architecture</h3>
                            <p>Traditional Harari houses, with their distinctive interior designs and colorful facades, showcase unique architectural heritage.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 cultural-card">
                        <div class="card-body text-white" style="background: url('../assets/images/banner/Harar-Coffee.jpeg') center/cover;">
                            <h3 class="h5"><i class="fas fa-coffee me-2"></i>Coffee Culture</h3>
                            <p>Experience the world-famous Harari coffee ceremony, a UNESCO-recognized cultural tradition.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Harar Today -->
        <section id="today" class="mb-5">
            <h2 class="mb-4">Harar Today</h2>
            <div class="row">
                <div class="col-lg-8">
                    <p>Modern Harar continues to preserve its rich heritage while embracing contemporary life. The city's residents actively maintain traditions, from the nightly hyena feeding ceremony to the vibrant markets that have operated for centuries.</p>
                    <p>Local institutions and community organizations work tirelessly to document and preserve Harar's cultural heritage, ensuring that future generations can experience this unique city's magic.</p>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="h5">Quick Facts</h3>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check-circle me-2"></i>UNESCO World Heritage Site</li>
                                <li><i class="fas fa-check-circle me-2"></i>Fourth holiest city in Islam</li>
                                <li><i class="fas fa-check-circle me-2"></i>Home to 82 mosques</li>
                                <li><i class="fas fa-check-circle me-2"></i>Traditional walled city</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- UNESCO Recognitions -->
        <section id="unesco" class="mb-5">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <img src="../assets/images/banner/unisco.jpg" alt="UNESCO Heritage Site" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <h2 class="mb-4">Global Recognition</h2>
                    <p class="lead fw-bold">Did you know? Harar isn't just a city | it's a global treasure!</p>
                    <p>Harar holds an extraordinary record with 5 major international recognitions, making it one of the most celebrated heritage cities in the world:</p>
                    <div class="achievements-list">
                        <div class="achievement-item mb-3">
                            <h3 class="h5"><i class="fas fa-award me-2 text-primary"></i>UNESCO World Heritage Site</h3>
                            <p class="mb-0">The iconic Jugol Wall and ancient city architecture.</p>
                        </div>
                        <div class="achievement-item mb-3">
                            <h3 class="h5"><i class="fas fa-peace me-2 text-primary"></i>UNESCO Peace Prize Award</h3>
                            <p class="mb-0">Honored for promoting peace and coexistence.</p>
                        </div>
                        <div class="achievement-item mb-3">
                            <h3 class="h5"><i class="fas fa-city me-2 text-primary"></i>Member of OWHC</h3>
                            <p class="mb-0">Recognized by the Organization of World Heritage Cities.</p>
                        </div>
                        <div class="achievement-item mb-3">
                            <h3 class="h5"><i class="fas fa-drum me-2 text-primary"></i>UNESCO Intangible Heritage List</h3>
                            <p class="mb-0">The vibrant Shuwalid Festival lives on in cultural memory.</p>
                        </div>
                        <div class="achievement-item mb-3">
                            <h3 class="h5"><i class="fas fa-globe me-2 text-primary"></i>Member of WTCF</h3>
                            <p class="mb-0">A proud city in the World Tourism Cities Federation network.</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="fst-italic">What makes Harar truly unique is not just its history but its living culture, unmatched heritage, deep-rooted peace, and the spirit of its people. It's more than words can describe - Harar must be experienced.</p>
                        <p class="fw-bold">This is not just recognition… It's a legacy. A pride. A responsibility.<br>
                        Harar, the jewel of heritage and peace.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Project Purpose -->
        <section id="purpose" class="mb-5">
            <h2 class="mb-4">About This Project</h2>
            <div class="row">
                <div class="col-lg-8">
                    <p>"Harar: The Living Museum" was created to celebrate and preserve the rich cultural heritage of this extraordinary city. Our mission is to:</p>
                    <ul>
                        <li>Educate visitors about Harar's historical and cultural significance</li>
                        <li>Inspire cultural appreciation and understanding</li>
                        <li>Support sustainable tourism and heritage preservation</li>
                        <li>Connect researchers and enthusiasts with Harar's cultural resources</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="text-center mb-5">
            <h2 class="mb-4">Start Your Journey</h2>
            <p class="lead mb-4">Discover the magic of Harar through our interactive resources and guided tours.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="explore.php" class="btn btn-primary">Explore Harar</a>
                <a href="plan-visit.php" class="btn btn-outline-primary">Plan Your Visit</a>
            </div>
        </section>
    </main>

    <?php
    // Include footer
    include '../includes/components/footer.php';
    ?>

    <!-- Bootstrap JS Bundle-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="../assets/js/main.js"></script>

    <style>
    .cultural-card {
        border: none;
        overflow: hidden;
        transition: transform 0.3s ease;
    }

    .cultural-card:hover {
        transform: translateY(-5px);
    }

    .cultural-card .card-body {
        height: 100%;
        padding: 2rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .cultural-card h3 {
        margin-bottom: 1rem;
        font-weight: 600;
    }

    .cultural-card p {
        margin-bottom: 0;
        font-size: 0.95rem;
        line-height: 1.6;
    }
    </style>
</body>
</html> 