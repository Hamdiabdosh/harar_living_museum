<?php
// Set content type
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Tips - Harar Living Museum</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
        <section class="hero-section position-relative text-white py-5" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('../assets/images/harar-streets.jpg') center/cover;">
            <div class="container">
                <div class="row min-vh-50 align-items-center">
                    <div class="col-lg-8">
                        <h1 class="display-4 fw-bold mb-4">Travel Tips for Harar</h1>
                        <p class="lead">First time visiting Harar? These tips will help you blend in, stay safe, and get the most out of your journey.</p>
                        <div class="mt-4">
                            <a href="#language" class="btn btn-primary me-2">Language Basics</a>
                            <a href="#etiquette" class="btn btn-outline-light">Cultural Etiquette</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
asdfsdfadf
        <!-- Language Basics -->
        <section id="language" class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Language Basics</h2>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="h5">Common Languages</h3>
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <i class="fas fa-language me-2"></i>
                                        <strong>Harari (Adaregna):</strong> Local language
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-language me-2"></i>
                                        <strong>Amharic:</strong> National language
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-language me-2"></i>
                                        <strong>Oromo:</strong> Widely spoken
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-language me-2"></i>
                                        <strong>English:</strong> Spoken in tourism areas
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="h5">Useful Phrases</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>English</th>
                                                <th>Harari</th>
                                                <th>Pronunciation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Hello</td>
                                                <td>ኣሰላም ኣለይኩም</td>
                                                <td>Aselam aleykum</td>
                                            </tr>
                                            <tr>
                                                <td>Thank you</td>
                                                <td>ኣምስኩም</td>
                                                <td>Amsikum</td>
                                            </tr>
                                            <tr>
                                                <td>How much?</td>
                                                <td>ስንት እዩ?</td>
                                                <td>Sint iyu?</td>
                                            </tr>
                                            <tr>
                                                <td>Goodbye</td>
                                                <td>ኣሰላም ኣለይኩም</td>
                                                <td>Aselam aleykum</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cultural Etiquette -->
        <section id="etiquette" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5">Cultural Etiquette</h2>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="h5">Greetings & Respect</h3>
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <i class="fas fa-handshake me-2"></i>
                                        <strong>Greetings:</strong> Use right hand for handshakes
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-user me-2"></i>
                                        <strong>Elders:</strong> Stand when they enter a room
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-mosque me-2"></i>
                                        <strong>Religious Sites:</strong> Remove shoes before entering
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-camera me-2"></i>
                                        <strong>Photography:</strong> Always ask permission
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="h5">Dress Code</h3>
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <i class="fas fa-tshirt me-2"></i>
                                        <strong>Women:</strong> Modest clothing, cover shoulders and knees
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-tshirt me-2"></i>
                                        <strong>Men:</strong> Long pants, avoid sleeveless shirts
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-mosque me-2"></i>
                                        <strong>Mosques:</strong> Women should cover hair
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-shoe-prints me-2"></i>
                                        <strong>Homes:</strong> Remove shoes when entering
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Safety Tips -->
        <section class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Safety Tips</h2>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <i class="fas fa-eye me-2"></i>
                                        <strong>Stay Alert:</strong> Be aware in crowded markets
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-wallet me-2"></i>
                                        <strong>Valuables:</strong> Keep them hidden and secure
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-user-shield me-2"></i>
                                        <strong>Guides:</strong> Use registered guides for tours
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-moon me-2"></i>
                                        <strong>Night Safety:</strong> Avoid walking alone late at night
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Money & Payments -->
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5">Money & Payments</h2>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="h5">Currency</h3>
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <i class="fas fa-money-bill me-2"></i>
                                        <strong>Local Currency:</strong> Ethiopian Birr (ETB)
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-credit-card me-2"></i>
                                        <strong>Payment Methods:</strong> Cash preferred
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-atm me-2"></i>
                                        <strong>ATMs:</strong> Limited availability
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="h5">Tips for Money</h3>
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <i class="fas fa-exchange-alt me-2"></i>
                                        <strong>Exchange:</strong> Do at banks or authorized dealers
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-wallet me-2"></i>
                                        <strong>Cash:</strong> Keep small denominations for markets
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-receipt me-2"></i>
                                        <strong>Receipts:</strong> Keep all exchange receipts
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Health & Hygiene -->
        <section class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Health & Hygiene</h2>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <i class="fas fa-tint me-2"></i>
                                        <strong>Water:</strong> Drink bottled or purified water
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-hands-wash me-2"></i>
                                        <strong>Hygiene:</strong> Wash hands before meals
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-first-aid me-2"></i>
                                        <strong>Medication:</strong> Bring basic first aid supplies
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-utensils me-2"></i>
                                        <strong>Food:</strong> Be cautious with street food
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Best Time to Visit -->
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5">Best Time to Visit</h2>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="h5">Weather & Seasons</h3>
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <strong>October to February:</strong>
                                        <p class="mb-0">Cool and dry - best weather for exploring</p>
                                    </li>
                                    <li class="mb-3">
                                        <strong>March to May:</strong>
                                        <p class="mb-0">Hot and dry - good for indoor activities</p>
                                    </li>
                                    <li class="mb-3">
                                        <strong>June to September:</strong>
                                        <p class="mb-0">Rainy season - fewer tourists</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
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

        <!-- Local Transportation -->
        <section class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Local Transportation</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="h5"><i class="fas fa-walking me-2"></i>Walking</h3>
                                <p>Jugol (Old City) is best explored on foot. The narrow streets and alleys are perfect for walking tours.</p>
                                <p class="text-muted">Tip: Wear comfortable shoes and carry water.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="h5"><i class="fas fa-taxi me-2"></i>Bajaj</h3>
                                <p>Three-wheeled taxis are affordable and convenient for longer distances. Negotiate the fare before starting your journey.</p>
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

        <!-- Connectivity -->
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5">Connectivity & SIM Cards</h2>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <i class="fas fa-sim-card me-2"></i>
                                        <strong>SIM Cards:</strong> Available from Ethio Telecom
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-wifi me-2"></i>
                                        <strong>Wi-Fi:</strong> Limited free access
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-coffee me-2"></i>
                                        <strong>Cafés:</strong> Many offer hotspot internet
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-hotel me-2"></i>
                                        <strong>Hotels:</strong> Usually provide Wi-Fi
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Emergency Contacts -->
        <section class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Emergency Contacts</h2>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <i class="fas fa-hospital me-2"></i>
                                        <strong>Hospital:</strong> Harar General Hospital
                                        <p class="mb-0">Phone: +251 25 666 1234</p>
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-shield-alt me-2"></i>
                                        <strong>Tourist Police:</strong>
                                        <p class="mb-0">Phone: +251 25 666 5678</p>
                                    </li>
                                    <li class="mb-3">
                                        <i class="fas fa-ambulance me-2"></i>
                                        <strong>Emergency:</strong>
                                        <p class="mb-0">Phone: 911</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Download Quick Tips -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h2 class="mb-4">Download Quick Tips</h2>
                        <p class="mb-4">Get a printable version of these travel tips to take with you.</p>
                        <a href="#" class="btn btn-primary">
                            <i class="fas fa-download me-2"></i>Download PDF
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include '../includes/footer.php'; ?>

    <!-- Bootstrap JS Bundle-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html> 