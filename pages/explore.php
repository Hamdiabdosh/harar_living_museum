<?php
// Set content type
header('Content-Type: text/html; charset=utf-8');

// Set page title
$pageTitle = 'Explore';

// Include header
include '../includes/layouts/header.php';

// Include navbar
include '../includes/components/navbar.php';
?>

<div class="container-fluid px-4 py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
            <h1 class="text-center mb-5">Explore Harar</h1>
            
            <!-- Navigation Tabs -->
            <ul class="nav nav-tabs nav-fill mb-5" id="exploreTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="jugol-tab" data-bs-toggle="tab" data-bs-target="#jugol" type="button" role="tab" aria-controls="jugol" aria-selected="true">Jugol Wall</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="markets-tab" data-bs-toggle="tab" data-bs-target="#markets" type="button" role="tab" aria-controls="markets" aria-selected="false">Markets</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="mosques-tab" data-bs-toggle="tab" data-bs-target="#mosques" type="button" role="tab" aria-controls="mosques" aria-selected="false">Mosques</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="museums-tab" data-bs-toggle="tab" data-bs-target="#museums" type="button" role="tab" aria-controls="museums" aria-selected="false">Museums</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="eagle-tab" data-bs-toggle="tab" data-bs-target="#eagle" type="button" role="tab" aria-controls="eagle" aria-selected="false">Eagle Feeding</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="hyena-tab" data-bs-toggle="tab" data-bs-target="#hyena" type="button" role="tab" aria-controls="hyena" aria-selected="false">Hyena Feeding</button>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content" id="exploreTabsContent">
                <!-- Jugol Wall Section -->
                <div class="tab-pane fade show active" id="jugol" role="tabpanel" aria-labelledby="jugol-tab">
                    <h2 class="mb-4 text-center">The Jugol Wall and Its Five Gates</h2>
                    
                    <!-- Historical Overview -->
                    <div class="card shadow-sm mb-5">
                        <div class="card-body p-4">
                            <h3 class="card-title">Historical Significance</h3>
                            <p class="card-text">
                                Built in 1551/52 by Amir Nur bin Mujahid, the Jugol wall stands as a testament to Harar's resilience and strategic importance. 
                                This remarkable fortification was constructed following years of military vulnerability after Imam Ahmed bin Ibrahim al Ghazi's campaigns.
                            </p>
                        </div>
                    </div>

                    <!-- Technical Specifications -->
                    <div class="card shadow-sm mb-5">
                        <div class="card-body p-4">
                            <h3 class="card-title">Technical Specifications</h3>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex align-items-center">
                                            <span class="me-3">🏰</span>
                                            <div>
                                                <strong>Area Covered:</strong> 48 hectares
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <span class="me-3">📏</span>
                                            <div>
                                                <strong>Circumference:</strong> 6666 cubits
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <span class="me-3">🧱</span>
                                            <div>
                                                <strong>Height:</strong> 4 meters
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <span class="me-3">⚒️</span>
                                            <div>
                                                <strong>Thickness:</strong> 50–75 cm
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex align-items-center">
                                            <span class="me-3">🪨</span>
                                            <div>
                                                <strong>Material:</strong> "Hashi une" — porous limestone
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h4 class="card-title">Religious and Cultural Significance</h4>
                                            <p>The dimensions of the wall and the number of gates hold deep Islamic symbolism:</p>
                                            <ul class="list-unstyled">
                                                <li class="mb-2">• 6666 cubits: Resembles the number of verses in the Holy Qur'an</li>
                                                <li>• Five gates: Represent the Five Pillars of Islam and the Five Daily Prayers</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- The Five Gates -->
                    <div class="card shadow-sm mb-5">
                        <div class="card-body p-4">
                            <h3 class="card-title">The Five Gates</h3>
                            <p class="card-text mb-4">
                                Each gate was strategically built near a water stream to provide residents with easy access to water, 
                                reinforcing the wall's role not just in protection, but in urban planning and survival. Each gate is known by different names in various languages, reflecting Harar's rich multicultural heritage.
                            </p>
                            
                            <div class="row g-4">
                                <!-- Gate cards with improved layout -->
                                <div class="col-md-4">
                                    <div class="card h-100 shadow-sm">
                                        <img src="../assets/images/5gates/sudugat beri.jpg" class="card-img-top" alt="Suqutat Gate" style="height: 200px; object-fit: cover;">
                                        <div class="card-body">
                                            <h5 class="card-title">Suqutat Gate</h5>
                                            <div class="small text-muted">
                                                <p class="mb-1">Harari: Suqutat Bari</p>
                                                <p class="mb-1">Amharic: Sanga Ber</p>
                                                <p class="mb-1">Arabic: Babu-Salam</p>
                                                <p class="mb-0">Oromo: Kara Sofi</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Argob Gate -->
                                <div class="col-md-4">
                                    <div class="card h-100 shadow-sm">
                                        <img src="../assets/images/5gates/argoberi.jpg" class="card-img-top" alt="Argob Gate" style="height: 200px; object-fit: cover;">
                                        <div class="card-body">
                                            <h5 class="card-title">Argob Gate</h5>
                                            <div class="small text-muted">
                                                <p class="mb-1">Harari: Argob Bari</p>
                                                <p class="mb-1">Amharic: Erer Ber</p>
                                                <p class="mb-1">Arabic: Babu-Rahmah</p>
                                                <p class="mb-0">Oromo: Kara Erer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Assumiy Gate -->
                                <div class="col-md-4">
                                    <div class="card h-100 shadow-sm">
                                        <img src="../assets/images/5gates/asumiberi.jpg" class="card-img-top" alt="Assumiy Gate" style="height: 200px; object-fit: cover;">
                                        <div class="card-body">
                                            <h5 class="card-title">Assumiy Gate</h5>
                                            <div class="small text-muted">
                                                <p class="mb-1">Harari: Assumiy Bari</p>
                                                <p class="mb-1">Amharic: Fallana Ber</p>
                                                <p class="mb-1">Arabic: Babul-Fat-h</p>
                                                <p class="mb-0">Oromo: Kara Falana</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Asma-addin Gate -->
                                <div class="col-md-6">
                                    <div class="card h-100 shadow-sm">
                                        <img src="../assets/images/5gates/asmeadin beri.jpg" class="card-img-top" alt="Asma-addin Gate" style="height: 200px; object-fit: cover;">
                                        <div class="card-body">
                                            <h5 class="card-title">Asma-addin Gate</h5>
                                            <div class="small text-muted">
                                                <p class="mb-1">Harari: Asma-addin Bari</p>
                                                <p class="mb-1">Amharic: Shewa Ber</p>
                                                <p class="mb-1">Arabic: Babu-Nasr</p>
                                                <p class="mb-0">Oromo: Kara Hamaresa</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Badri Gate -->
                                <div class="col-md-6">
                                    <div class="card h-100 shadow-sm">
                                        <img src="../assets/images/5gates/bedri beri old.jpg" class="card-img-top" alt="Badri Gate" style="height: 200px; object-fit: cover;">
                                        <div class="card-body">
                                            <h5 class="card-title">Badri Gate</h5>
                                            <div class="small text-muted">
                                                <p class="mb-1">Harari: Badri Bari</p>
                                                <p class="mb-1">Amharic: Buda Ber</p>
                                                <p class="mb-1">Arabic: Babul-Hakim</p>
                                                <p class="mb-0">Oromo: Kara Budawa</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Markets Section -->
                <div class="tab-pane fade" id="markets" role="tabpanel" aria-labelledby="markets-tab">
                    <h2 class="mb-4">Coming Soon</h2>
                    <p>Information about Harar's vibrant markets will be available soon.</p>
                </div>

                <!-- Mosques Section -->
                <div class="tab-pane fade" id="mosques" role="tabpanel" aria-labelledby="mosques-tab">
                    <h2 class="mb-4">Coming Soon</h2>
                    <p>Information about Harar's historic mosques will be available soon.</p>
                </div>

                <!-- Museums Section -->
                <div class="tab-pane fade" id="museums" role="tabpanel" aria-labelledby="museums-tab">
                    <div class="museums-content">
                        <h2 class="mb-4 text-center">Museums of Harar</h2>
                        <p class="lead mb-5 text-center">
                            Harar is one of Ethiopia's most historically significant cities, boasting four museums that position it second only to Addis Ababa in terms of museum density. The city's museums include one privately owned, one community-owned, and two governmental institutions.
                        </p>

                        <!-- Museum Cards -->
                        <div class="row g-4">
                            <!-- Harari Cultural Center -->
                            <div class="col-12">
                                <div class="card shadow-lg">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div id="harariCulturalCarousel" class="carousel slide h-100" data-bs-ride="carousel">
                                                <div class="carousel-inner h-100">
                                                    <div class="carousel-item active h-100">
                                                        <img src="../assets/images/new/cultural houce.jpg" class="d-block w-100 h-100" alt="Harari Cultural House" style="object-fit: cover;">
                                                    </div>
                                                    <div class="carousel-item h-100">
                                                        <img src="../assets/images/new/ada gar2.jpg" class="d-block w-100 h-100" alt="Ada Gar Interior" style="object-fit: cover;">
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#harariCulturalCarousel" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon"></span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#harariCulturalCarousel" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon"></span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h3 class="card-title">Harari Cultural Center/Museum (Ada Gar)</h3>
                                                <div class="d-flex align-items-center mb-3">
                                                    <span class="badge bg-primary me-2">Community-owned</span>
                                                    <small class="text-muted">Founded: 1979 GC</small>
                                                </div>
                                                <p class="card-text">
                                                    Located just 100 meters from the Grand Jami Mosque, the Harari Cultural Museum (Ada Gar) stands as a testament to the community's rich heritage. Founded in 1979 GC during the Jigjiga bazaar, this community-owned museum showcases cultural artifacts contributed by the Harari people themselves.
                                                </p>
                                                <div class="row mt-4">
                                                    <div class="col-md-6">
                                                        <h5>Collections</h5>
                                                        <ul class="list-unstyled">
                                                            <li><i class="fas fa-check-circle text-primary me-2"></i>Traditional house wooden service commodities</li>
                                                            <li><i class="fas fa-check-circle text-primary me-2"></i>Quran learning materials</li>
                                                            <li><i class="fas fa-check-circle text-primary me-2"></i>Historical Harari coins</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5>Architectural Features</h5>
                                                        <ul class="list-unstyled">
                                                            <li><i class="fas fa-check-circle text-primary me-2"></i>Unique Harari design</li>
                                                            <li><i class="fas fa-check-circle text-primary me-2"></i>Natural climate control</li>
                                                            <li><i class="fas fa-check-circle text-primary me-2"></i>Traditional building materials</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Harar National Museum -->
                            <div class="col-12">
                                <div class="card shadow-lg">
                                    <div class="row g-0">
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h3 class="card-title">Harar National Museum</h3>
                                                <div class="d-flex align-items-center mb-3">
                                                    <span class="badge bg-primary me-2">Governmental</span>
                                                    <small class="text-muted">Founded: 1977 E.C.</small>
                                                </div>
                                                <p class="card-text">
                                                    Situated in a historically significant building on Amir Ugga Street, this museum occupies the site believed to be Amir Nur's palace. The building was renovated by the French government, preserving its historical essence while modernizing its facilities.
                                                </p>
                                                <div class="row mt-4">
                                                    <div class="col-md-6">
                                                        <h5>Collections</h5>
                                                        <div class="d-flex flex-wrap gap-2">
                                                            <span class="badge bg-light text-dark">Medieval clothing</span>
                                                            <span class="badge bg-light text-dark">Agricultural instruments</span>
                                                            <span class="badge bg-light text-dark">Historical armaments</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5>Ethnic Collections</h5>
                                                        <div class="d-flex flex-wrap gap-2">
                                                            <span class="badge bg-primary">Harari</span>
                                                            <span class="badge bg-primary">Oromo</span>
                                                            <span class="badge bg-primary">Argoba</span>
                                                            <span class="badge bg-primary">Somali</span>
                                                            <span class="badge bg-primary">Amhara</span>
                                                            <span class="badge bg-primary">Afar</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div id="nationalMuseumCarousel" class="carousel slide h-100" data-bs-ride="carousel">
                                                <div class="carousel-inner h-100">
                                                    <div class="carousel-item active h-100">
                                                        <img src="../assets/images/new/national museum.jpg" class="d-block w-100 h-100" alt="Harar National Museum" style="object-fit: cover;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Arthur Rimbaud Museum -->
                            <div class="col-12">
                                <div class="card shadow-lg">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div id="rimbaudMuseumCarousel" class="carousel slide h-100" data-bs-ride="carousel">
                                                <div class="carousel-inner h-100">
                                                    <div class="carousel-item active h-100">
                                                        <img src="../assets/images/new/rambod house.jpg" class="d-block w-100 h-100" alt="Arthur Rimbaud Museum" style="object-fit: cover;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h3 class="card-title">Arthur Rimbaud Museum</h3>
                                                <div class="d-flex align-items-center mb-3">
                                                    <span class="badge bg-primary me-2">Cultural Heritage</span>
                                                    <small class="text-muted">Renovated: 2000 G.C.</small>
                                                </div>
                                                <p class="card-text">
                                                    A beautifully preserved house dedicated to the legendary French poet Arthur Rimbaud, who lived in Harar during the 1880s. This historic building serves as a museum, documentation center, and photo archive.
                                                </p>
                                                <div class="row mt-4">
                                                    <div class="col-md-6">
                                                        <h5>Museum Layout</h5>
                                                        <ul class="list-unstyled">
                                                            <li><i class="fas fa-book text-primary me-2"></i>Ground Floor: Research center</li>
                                                            <li><i class="fas fa-images text-primary me-2"></i>First Floor: Historical photographs</li>
                                                            <li><i class="fas fa-palette text-primary me-2"></i>Second Floor: Artistic paintings</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5>Features</h5>
                                                        <ul class="list-unstyled">
                                                            <li><i class="fas fa-building text-primary me-2"></i>Original Indian merchant's house</li>
                                                            <li><i class="fas fa-map-marker-alt text-primary me-2"></i>Makina Girgir neighborhood</li>
                                                            <li><i class="fas fa-eye text-primary me-2"></i>Panoramic city views</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Sherif Harar City Museum -->
                            <div class="col-12">
                                <div class="card shadow-lg">
                                    <div class="row g-0">
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h3 class="card-title">Sherif Harar City Museum</h3>
                                                <div class="d-flex align-items-center mb-3">
                                                    <span class="badge bg-primary me-2">Private</span>
                                                    <small class="text-muted">Founded: 1983 E.C.</small>
                                                </div>
                                                <p class="card-text">
                                                    The only private museum in East Africa, showcasing a rich collection of Harari and Ethiopian heritage. This unique institution represents a personal dedication to preserving cultural history.
                                                </p>
                                                <div class="row mt-4">
                                                    <div class="col-md-6">
                                                        <h5>Collections</h5>
                                                        <ul class="list-unstyled">
                                                            <li><i class="fas fa-archway text-primary me-2"></i>Archaeological artifacts</li>
                                                            <li><i class="fas fa-book text-primary me-2"></i>Rare handwritten books</li>
                                                            <li><i class="fas fa-coins text-primary me-2"></i>Ancient Harari coins</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5>Additional Features</h5>
                                                        <ul class="list-unstyled">
                                                            <li><i class="fas fa-tshirt text-primary me-2"></i>Traditional clothing</li>
                                                            <li><i class="fas fa-music text-primary me-2"></i>Music archives</li>
                                                            <li><i class="fas fa-file-alt text-primary me-2"></i>Cultural documentation</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div id="sherifMuseumCarousel" class="carousel slide h-100" data-bs-ride="carousel">
                                                <div class="carousel-inner h-100">
                                                    <div class="carousel-item active h-100">
                                                        <img src="../assets/images/new/sherif.jpg" class="d-block w-100 h-100" alt="Sherif Harar City Museum" style="object-fit: cover;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mohammad Ali House -->
                            <div class="col-12">
                                <div class="card shadow-lg">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div id="mohammadAliCarousel" class="carousel slide h-100" data-bs-ride="carousel">
                                                <div class="carousel-inner h-100">
                                                    <div class="carousel-item active h-100">
                                                        <img src="../assets/images/new/mohammad ali.jpg" class="d-block w-100 h-100" alt="Mohammad Ali House" style="object-fit: cover;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h3 class="card-title">Mohammad Ali House</h3>
                                                <div class="d-flex align-items-center mb-3">
                                                    <span class="badge bg-primary me-2">Historical Building</span>
                                                    <small class="text-muted">Under Renovation</small>
                                                </div>
                                                <p class="card-text">
                                                    One of the most significant historical buildings in Jugal, the Mohammad Ali House represents Harar's role as a metropolitan center. This architectural gem showcases the city's rich multicultural heritage and commercial importance.
                                                </p>
                                                <div class="row mt-4">
                                                    <div class="col-md-6">
                                                        <h5>Historical Timeline</h5>
                                                        <ul class="list-unstyled">
                                                            <li><i class="fas fa-landmark text-primary me-2"></i>Egyptian administrative center</li>
                                                            <li><i class="fas fa-flag text-primary me-2"></i>Turkish consulate office</li>
                                                            <li><i class="fas fa-store text-primary me-2"></i>Indian merchant's residence</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5>Planned Facilities</h5>
                                                        <div class="d-flex flex-wrap gap-2">
                                                            <span class="badge bg-primary">
                                                                <i class="fas fa-bed me-1"></i>Guest Houses
                                                            </span>
                                                            <span class="badge bg-primary">
                                                                <i class="fas fa-coffee me-1"></i>Cafeteria
                                                            </span>
                                                            <span class="badge bg-primary">
                                                                <i class="fas fa-shopping-bag me-1"></i>Souvenir Shops
                                                            </span>
                                                            <span class="badge bg-primary">
                                                                <i class="fas fa-utensils me-1"></i>Traditional Food
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Eagle Feeding Section -->
                <div class="tab-pane fade" id="eagle" role="tabpanel" aria-labelledby="eagle-tab">
                    <div class="eagle-content">
                        <h2 class="mb-4 text-center">Eagle Feeding in Gidir Magala</h2>
                        <p class="lead mb-5 text-center">
                            Experience one of Harar's most unique cultural traditions - the harmonious coexistence between humans and wild eagles in the heart of the city.
                        </p>

                        <div class="row g-4">
                            <div class="col-12">
                                <div class="card shadow-lg">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div id="eagleFeedingCarousel" class="carousel slide h-100" data-bs-ride="carousel">
                                                <div class="carousel-inner h-100">
                                                    <div class="carousel-item active h-100">
                                                        <img src="../assets/images/new/eagle feeding.jpg" class="d-block w-100 h-100" alt="Eagle Feeding" style="object-fit: cover;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h3 class="card-title">A Unique Cultural Experience</h3>
                                                <div class="d-flex align-items-center mb-3">
                                                    <span class="badge bg-primary me-2">Cultural Heritage</span>
                                                    <small class="text-muted">Daily Tradition</small>
                                                </div>
                                                <p class="card-text">
                                                    In the bustling Gidir Magala (the traditional main market), witness a rare and thrilling eagle feeding ritual. This remarkable tradition showcases the unique relationship between Harar's residents and the majestic eagles that have become part of the city's cultural fabric.
                                                </p>
                                                <div class="row mt-4">
                                                    <div class="col-md-6">
                                                        <h5>The Experience</h5>
                                                        <ul class="list-unstyled">
                                                            <li class="mb-3">
                                                                <i class="fas fa-dove text-primary me-2"></i>
                                                                Eagles gracefully line up on the rooftop edges of an old Italian-built butcher shop
                                                            </li>
                                                            <li class="mb-3">
                                                                <i class="fas fa-hand-holding-heart text-primary me-2"></i>
                                                                Birds snatch pieces of meat from the hands—or even the heads—of people standing below
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-camera text-primary me-2"></i>
                                                                Perfect opportunity for nature photography
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5>Visitor Information</h5>
                                                        <div class="card bg-light">
                                                            <div class="card-body">
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="mb-2">
                                                                        <i class="fas fa-map-marker-alt text-primary me-2"></i>
                                                                        Location: Gidir Magala (Main Market)
                                                                    </li>
                                                                    <li class="mb-2">
                                                                        <i class="fas fa-clock text-primary me-2"></i>
                                                                        Best Time: Early morning
                                                                    </li>
                                                                    <li>
                                                                        <i class="fas fa-info-circle text-primary me-2"></i>
                                                                        Visitors are welcome to participate
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hyena Feeding Section -->
                <div class="tab-pane fade" id="hyena" role="tabpanel" aria-labelledby="hyena-tab">
                    <div class="hyena-content">
                        <h2 class="mb-4 text-center">Hyena Feeding in Harar</h2>
                        <p class="lead mb-5 text-center">
                            Experience the world-famous hyena feeding ceremony, a unique tradition that has made Harar one of the few places where humans and hyenas coexist peacefully.
                        </p>

                        <div class="row g-4">
                            <div class="col-12">
                                <div class="card shadow-lg">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <div id="hyenaFeedingCarousel" class="carousel slide h-100" data-bs-ride="carousel">
                                                <div class="carousel-inner h-100">
                                                    <div class="carousel-item active h-100">
                                                        <img src="../assets/images/new/hyena feeding.jpg" class="d-block w-100 h-100" alt="Hyena Feeding" style="object-fit: cover;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h3 class="card-title">A Centuries-Old Tradition</h3>
                                                <div class="d-flex align-items-center mb-3">
                                                    <span class="badge bg-primary me-2">Cultural Heritage</span>
                                                    <small class="text-muted">Nightly Ceremony</small>
                                                </div>
                                                <p class="card-text">
                                                    The hyena feeding ceremony in Harar is a tradition that dates back centuries. The city's residents have developed a unique relationship with these wild animals, feeding them by hand and even allowing them to roam the streets at night, acting as natural garbage collectors.
                                                </p>
                                                <div class="row mt-4">
                                                    <div class="col-md-6">
                                                        <h5>The Experience</h5>
                                                        <ul class="list-unstyled">
                                                            <li class="mb-3">
                                                                <i class="fas fa-moon text-primary me-2"></i>
                                                                Nightly feeding ceremony outside the city walls
                                                            </li>
                                                            <li class="mb-3">
                                                                <i class="fas fa-hand-holding-heart text-primary me-2"></i>
                                                                Watch as hyenas are called by name and fed by hand
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-camera text-primary me-2"></i>
                                                                Unique photo opportunities with these magnificent creatures
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5>Visitor Information</h5>
                                                        <div class="card bg-light">
                                                            <div class="card-body">
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="mb-2">
                                                                        <i class="fas fa-map-marker-alt text-primary me-2"></i>
                                                                        Location: Outside the city walls (Erer Gate)
                                                                    </li>
                                                                    <li class="mb-2">
                                                                        <i class="fas fa-clock text-primary me-2"></i>
                                                                        Best Time: After sunset (around 7 PM)
                                                                    </li>
                                                                    <li>
                                                                        <i class="fas fa-info-circle text-primary me-2"></i>
                                                                        Small fee for participation
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once '../includes/components/footer.php';
?>

<!-- Add Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get all tab buttons
    const tabButtons = document.querySelectorAll('#exploreTabs button');
    
    // Add click event listener to each button
    tabButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Remove active class from all buttons and panes
            tabButtons.forEach(btn => btn.classList.remove('active'));
            document.querySelectorAll('.tab-pane').forEach(pane => {
                pane.classList.remove('show', 'active');
            });
            
            // Add active class to clicked button
            this.classList.add('active');
            
            // Show corresponding pane
            const targetId = this.getAttribute('data-bs-target');
            const targetPane = document.querySelector(targetId);
            targetPane.classList.add('show', 'active');
        });
    });
});
</script>
</body>
</html>
