<?php
// Determine if we're in a subdirectory (pages)
$isPage = strpos($_SERVER['PHP_SELF'], '/pages/') !== false;
$basePath = $isPage ? '../' : '';

/**
 * Renders a hero section with the given title, subtitle, and description
 * 
 * @param string $title The main title of the hero section
 * @param string $subtitle The subtitle text
 * @param string $description The description text
 */
function renderHeroSection($title, $subtitle, $description) {
    global $basePath;
    ?>
    <section class="hero-section position-relative text-white py-5" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('<?php echo $basePath; ?>assets/images/tourism-hero.jpg') center/cover;">
        <div class="container">
            <div class="row min-vh-50 align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4"><?php echo htmlspecialchars($title); ?></h1>
                    <p class="lead mb-4"><?php echo htmlspecialchars($subtitle); ?></p>
                    <p class="mb-4"><?php echo htmlspecialchars($description); ?></p>
                    <div class="mt-4">
                        <a href="#guided-tours" class="btn btn-primary me-2">View Tours</a>
                        <a href="#booking" class="btn btn-outline-light">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
}
?> 