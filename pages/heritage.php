<?php
// Set content type
header('Content-Type: text/html; charset=utf-8');

// Set page title
$pageTitle = 'Heritage';

// Include header
include '../includes/header.php';

// Include navbar
include '../includes/navbar.php';
?>

<main>
    <!-- Hero Section -->
    <section class="hero-section position-relative text-white py-5" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('../assets/images/banner/shewal eid2.jpg') center/cover;">
        <div class="container">
            <div class="row min-vh-50 align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4">Harari Heritage & Traditions</h1>
                    <p class="lead">Discover the living culture of Harar, where ancient traditions continue to thrive in the heart of Ethiopia.</p>
                    <blockquote class="blockquote mt-4">
                        <p class="mb-0"><i class="fas fa-quote-left me-2"></i>Harar is not just a city of walls and gates, but a living museum of traditions that have been preserved and cherished for centuries.</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- Religious Significance -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Religious Significance</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="h5"><i class="fas fa-mosque me-2"></i>Fourth Holiest City in Islam</h3>
                            <p>Harar is celebrated as the fourth holiest city in Islam, boasting over 80 mosques and numerous shrines. The Harari people primarily practice Sunni Islam and Sufism, with spiritual events such as Ashura holding deep significance.</p>
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <h4 class="h6">Key Religious Events</h4>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check-circle me-2"></i>Ashura Commemoration</li>
                                        <li><i class="fas fa-check-circle me-2"></i>Eid al-Fitr Celebrations</li>
                                        <li><i class="fas fa-check-circle me-2"></i>Eid al-Adha Observances</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="h6">Spiritual Practices</h4>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check-circle me-2"></i>Daily Prayers</li>
                                        <li><i class="fas fa-check-circle me-2"></i>Sufi Traditions</li>
                                        <li><i class="fas fa-check-circle me-2"></i>Shrine Visitations</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Traditional Wedding Customs -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Traditional Wedding Customs</h2>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="h5"><i class="fas fa-ring me-2"></i>Nikkah & Sirri</h3>
                                    <p>The formal marriage contract (Nikkah) is followed by the Sirri tradition, where elderly women prepare special bread and take it to the shrine of Ay Abida for blessings.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="h5"><i class="fas fa-bread-slice me-2"></i>Waqaalim & Bun Wa Halawa</h3>
                                    <p>Traditional celebrations include Waqaalim distribution and the bride's family bringing coffee and sweets to the Jumuah Mosque for blessings.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="h5"><i class="fas fa-users me-2"></i>Aruz Mawalal</h3>
                                    <p>The bride, accompanied by single ladies in cultural attire, walks through Jugol streets to invite family and friends to the wedding celebration.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="h5"><i class="fas fa-music me-2"></i>Raga Karabu & Zagan Karabu</h3>
                                    <p>Traditional songs and dances performed by elderly women, celebrating the union and demonstrating the bride's readiness for marriage.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Traditional Houses -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Traditional Houses (Gey Gar)</h2>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="h5">Architectural Heritage</h3>
                            <p>Harari traditional houses, known as Gey Gar, are a hallmark of Harari architectural genius and cultural identity. These homes feature:</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check-circle me-2"></i>Central courtyard (Gidir Magala)</li>
                                <li><i class="fas fa-check-circle me-2"></i>Intricate Islamic art</li>
                                <li><i class="fas fa-check-circle me-2"></i>Colorful wall baskets</li>
                                <li><i class="fas fa-check-circle me-2"></i>Handwoven carpets</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="../assets/images/traditional-house.jpg" alt="Traditional Harari House" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Cultural Traditions -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Cultural Traditions</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="h5"><i class="fas fa-coffee me-2"></i>Coffee Ceremony</h3>
                            <p>The Harari coffee ceremony is a UNESCO-recognized cultural tradition that reflects the community's deep-rooted appreciation for hospitality. The ritual involves roasting beans, grinding them by hand, and brewing in a traditional jebena.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="h5"><i class="fas fa-music me-2"></i>Music & Oral Traditions</h3>
                            <p>Traditional instruments like the kabaro (drum), masenqo (lute), and washint (flute) are used in musical sessions led by elders, passing down centuries-old compositions and stories.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="h5"><i class="fas fa-paw me-2"></i>Hyena Feeding</h3>
                            <p>A unique tradition where "hyena men" feed hyenas, helping maintain city cleanliness and believed to protect residents from evil spirits. This practice demonstrates the community's harmonious relationship with wildlife.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Traditional Crafts -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Traditional Crafts</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="../assets/images/basket-weaving.jpg" class="card-img-top" alt="Basket Weaving">
                        <div class="card-body">
                            <h3 class="h5">Basketry & Mesob</h3>
                            <p>Harari basketry is renowned for its colorful designs and complex geometric patterns. The Mesob, a traditional basket used to store injera, is a cultural symbol of Ethiopia and showcases exceptional craftsmanship.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="../assets/images/embroidery.jpg" class="card-img-top" alt="Embroidery">
                        <div class="card-body">
                            <h3 class="h5">Embroidery & Textiles</h3>
                            <p>Traditional Harari embroidery adorns clothing and household items with beautiful patterns that have been passed down through generations, reflecting the community's artistic heritage.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Download Guide -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="mb-4">Download Our Heritage Guide</h2>
                    <p class="lead mb-4">Get a comprehensive guide to Harar's cultural heritage, including traditions, customs, and practical information for visitors.</p>
                    <a href="#" class="btn btn-primary btn-lg">
                        <i class="fas fa-download me-2"></i>Download Guide
                    </a>
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