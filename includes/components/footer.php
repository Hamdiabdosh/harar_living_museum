<?php
// Determine if we're in a subdirectory (pages)
$isPage = strpos($_SERVER['PHP_SELF'], '/pages/') !== false;
$basePath = $isPage ? '../' : '';
?>
<!-- Footer -->
<footer class="footer bg-dark text-white py-4 mt-auto">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Contact</h5>
                <p><i class="fas fa-envelope me-2"></i>info@hararlivingmuseum.com</p>
                <p><i class="fas fa-phone me-2"></i>+251 938666215</p>
                <p><i class="fas fa-map-marker-alt me-2"></i>Harar, Ethiopia</p>
            </div>
            <div class="col-md-4">
                <h5>Quick Links</h5>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li><a href="<?php echo $basePath; ?>index.php" class="text-white text-decoration-none">Home</a></li>
                            <li><a href="<?php echo $basePath; ?>pages/about.php" class="text-white text-decoration-none">About</a></li>
                            <li><a href="<?php echo $basePath; ?>pages/explore.php" class="text-white text-decoration-none">Explore</a></li>
                            <li><a href="<?php echo $basePath; ?>pages/gallery.php" class="text-white text-decoration-none">Gallery</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li><a href="<?php echo $basePath; ?>pages/plan-visit.php" class="text-white text-decoration-none">Plan Visit</a></li>
                            <li><a href="<?php echo $basePath; ?>pages/tours.php" class="text-white text-decoration-none">Tours</a></li>
                            <li><a href="<?php echo $basePath; ?>pages/events.php" class="text-white text-decoration-none">Events</a></li>
                            <li><a href="<?php echo $basePath; ?>pages/contact.php" class="text-white text-decoration-none">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h5>Follow Us</h5>
                <div class="social-links">
                    <a href="https://www.facebook.com/hararlivingmuseum" class="text-white me-3" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.twitter.com/hararlivingmuseum" class="text-white me-3" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/hararlivingmuseum" class="text-white me-3" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/harar-living-museum" class="text-white" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <div class="mt-3">
                    <h5>Newsletter</h5>
                    <form class="d-flex">
                        <input type="email" class="form-control me-2" placeholder="Enter your email">
                        <button type="submit" class="btn btn-outline-light">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 text-center">
                <p class="mb-0">&copy; <?php echo date('Y'); ?> Harar Living Museum. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>