<?php
// Set content type
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Harar Living Museum</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Lightbox CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/gallery.css">
</head>
<body>
    <header>
        <!-- Include Navbar -->
        <?php include '../includes/navbar.php'; ?>
    </header>

    <main>
        <!-- Hero Section with Slideshow -->
        <section class="hero-section position-relative text-white py-5" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('../assets/images/harar-gallery.jpg') center/cover;">
            <div class="container">
                <div class="row min-vh-50 align-items-center">
                    <div class="col-lg-8">
                        <h1 class="display-4 fw-bold mb-4">Experience Harar in Pictures</h1>
                        <p class="lead">From ancient alleys to vibrant traditions, explore the visual journey of Ethiopia's living museum.</p>
                        <div class="mt-4">
                            <a href="#photo-gallery" class="btn btn-primary me-2">Photo Gallery</a>
                            <a href="#video-gallery" class="btn btn-outline-light">Video Gallery</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Search and Filter -->
        <section class="py-4 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search gallery..." id="gallerySearch">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Photo Gallery -->
        <section id="photo-gallery" class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Photo Gallery</h2>
                
                <!-- Category Navigation -->
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="d-flex justify-content-center flex-wrap gap-2">
                            <button class="btn btn-outline-primary active" data-category="all">All</button>
                            <button class="btn btn-outline-primary" data-category="landmarks">City Landmarks</button>
                            <button class="btn btn-outline-primary" data-category="culture">Culture & Festivals</button>
                            <button class="btn btn-outline-primary" data-category="people">People of Harar</button>
                            <button class="btn btn-outline-primary" data-category="markets">Markets & Food</button>
                            <button class="btn btn-outline-primary" data-category="hyena">Hyena Feeding</button>
                            <button class="btn btn-outline-primary" data-category="landscapes">Landscapes</button>
                        </div>
                    </div>
                </div>

                <!-- Gallery Grid -->
                <div class="row g-4">
                    <!-- City Landmarks -->
                    <div class="col-md-4 gallery-item" data-category="landmarks">
                        <a href="../assets/images/gallery/jugol.jpg" data-lightbox="gallery" data-title="Jugol - The Ancient Walled City">
                            <img src="../assets/images/gallery/jugol-thumb.jpg" class="img-fluid rounded" alt="Jugol">
                            <div class="gallery-caption">
                                <h5>Jugol</h5>
                                <p>The Ancient Walled City</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item" data-category="landmarks">
                        <a href="../assets/images/gallery/buda-gate.jpg" data-lightbox="gallery" data-title="Buda Gate - Historic Entrance">
                            <img src="../assets/images/gallery/buda-gate-thumb.jpg" class="img-fluid rounded" alt="Buda Gate">
                            <div class="gallery-caption">
                                <h5>Buda Gate</h5>
                                <p>Historic Entrance</p>
                            </div>
                        </a>
                    </div>

                    <!-- Culture & Festivals -->
                    <div class="col-md-4 gallery-item" data-category="culture">
                        <a href="../assets/images/gallery/coffee-ceremony.jpg" data-lightbox="gallery" data-title="Traditional Coffee Ceremony">
                            <img src="../assets/images/gallery/coffee-ceremony-thumb.jpg" class="img-fluid rounded" alt="Coffee Ceremony">
                            <div class="gallery-caption">
                                <h5>Coffee Ceremony</h5>
                                <p>Traditional Ritual</p>
                            </div>
                        </a>
                    </div>

                    <!-- People of Harar -->
                    <div class="col-md-4 gallery-item" data-category="people">
                        <a href="../assets/images/gallery/local-portrait.jpg" data-lightbox="gallery" data-title="Local Artisan">
                            <img src="../assets/images/gallery/local-portrait-thumb.jpg" class="img-fluid rounded" alt="Local Portrait">
                            <div class="gallery-caption">
                                <h5>Local Artisan</h5>
                                <p>Traditional Crafts</p>
                            </div>
                        </a>
                    </div>

                    <!-- Markets & Food -->
                    <div class="col-md-4 gallery-item" data-category="markets">
                        <a href="../assets/images/gallery/spice-market.jpg" data-lightbox="gallery" data-title="Spice Market">
                            <img src="../assets/images/gallery/spice-market-thumb.jpg" class="img-fluid rounded" alt="Spice Market">
                            <div class="gallery-caption">
                                <h5>Spice Market</h5>
                                <p>Colorful Aromas</p>
                            </div>
                        </a>
                    </div>

                    <!-- Hyena Feeding -->
                    <div class="col-md-4 gallery-item" data-category="hyena">
                        <a href="../assets/images/gallery/hyena-feeding.jpg" data-lightbox="gallery" data-title="Night Hyena Feeding">
                            <img src="../assets/images/gallery/hyena-feeding-thumb.jpg" class="img-fluid rounded" alt="Hyena Feeding">
                            <div class="gallery-caption">
                                <h5>Hyena Feeding</h5>
                                <p>Night Ritual</p>
                            </div>
                        </a>
                    </div>

                    <!-- Landscapes -->
                    <div class="col-md-4 gallery-item" data-category="landscapes">
                        <a href="../assets/images/gallery/harar-sunset.jpg" data-lightbox="gallery" data-title="Harar Sunset">
                            <img src="../assets/images/gallery/harar-sunset-thumb.jpg" class="img-fluid rounded" alt="Harar Sunset">
                            <div class="gallery-caption">
                                <h5>Harar Sunset</h5>
                                <p>City Views</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Photo of the Month -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card">
                            <div class="card-body text-center">
                                <h2 class="mb-4">Photo of the Month</h2>
                                <img src="../assets/images/gallery/photo-of-month.jpg" class="img-fluid rounded mb-4" alt="Photo of the Month">
                                <h3 class="h5">Morning Prayer at Grand Mosque</h3>
                                <p class="text-muted">Captured by: Ahmed Mohammed</p>
                                <p>"This photo captures the serene atmosphere of early morning prayers at the Grand Mosque, where the first rays of sunlight illuminate the ancient architecture."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Video Gallery -->
        <section id="video-gallery" class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Video Gallery</h2>
                <div class="row g-4">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/VIDEO_ID_1" title="Walking Tour of Old City" allowfullscreen></iframe>
                            </div>
                            <div class="card-body">
                                <h3 class="h5">Walking Tour of Old City</h3>
                                <p>Experience the narrow alleys and historic architecture of Jugol.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/VIDEO_ID_2" title="Traditional Coffee Ceremony" allowfullscreen></iframe>
                            </div>
                            <div class="card-body">
                                <h3 class="h5">Traditional Coffee Ceremony</h3>
                                <p>Watch the intricate process of preparing traditional Harari coffee.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Upload Section (for logged-in users) -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card">
                            <div class="card-body text-center">
                                <h2 class="mb-4">Share Your Harar Experience</h2>
                                <p>Have amazing photos or videos from your visit? Share them with our community!</p>
                                <form>
                                    <div class="mb-3">
                                        <label for="photoUpload" class="form-label">Upload Photos</label>
                                        <input type="file" class="form-control" id="photoUpload" multiple accept="image/*">
                                    </div>
                                    <div class="mb-3">
                                        <label for="videoUpload" class="form-label">Upload Videos</label>
                                        <input type="file" class="form-control" id="videoUpload" multiple accept="video/*">
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" id="description" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
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
    <!-- Lightbox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script>
        // Load navbar and footer
        fetch('../includes/navbar.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('navbar-placeholder').innerHTML = data;
            });

        fetch('../includes/footer.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('footer-placeholder').innerHTML = data;
            });

        // Gallery filtering
        document.querySelectorAll('[data-category]').forEach(button => {
            button.addEventListener('click', () => {
                const category = button.dataset.category;
                document.querySelectorAll('.gallery-item').forEach(item => {
                    if (category === 'all' || item.dataset.category === category) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
                // Update active button
                document.querySelectorAll('[data-category]').forEach(btn => {
                    btn.classList.remove('active');
                });
                button.classList.add('active');
            });
        });

        // Gallery search
        document.getElementById('gallerySearch').addEventListener('input', (e) => {
            const searchTerm = e.target.value.toLowerCase();
            document.querySelectorAll('.gallery-item').forEach(item => {
                const caption = item.querySelector('.gallery-caption').textContent.toLowerCase();
                if (caption.includes(searchTerm)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html> 