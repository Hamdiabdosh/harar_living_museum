<?php
// Determine if we're in a subdirectory (pages)
$isPage = strpos($_SERVER['PHP_SELF'], '/pages/') !== false;
$basePath = $isPage ? '../' : '';
?>
<!-- Footer -->
<footer class="footer py-5">
    <div class="container">
        <div class="row">
            <!-- About Section -->
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h5 class="mb-3">About Harar Living Museum</h5>
                <p class="text-secondary">Discover the rich cultural heritage and vibrant traditions of Harar, a UNESCO World Heritage site. Our museum brings to life the unique history and culture of this ancient city.</p>
                <div class="social-links mt-3">
                    <a href="#" class="text-secondary me-3" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-secondary me-3" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-secondary me-3" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-secondary" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h5 class="mb-3">Quick Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="<?php echo $basePath; ?>index.php" class="text-secondary text-decoration-none">Home</a></li>
                    <li class="mb-2"><a href="<?php echo $basePath; ?>pages/about.php" class="text-secondary text-decoration-none">About</a></li>
                    <li class="mb-2"><a href="<?php echo $basePath; ?>pages/explore.php" class="text-secondary text-decoration-none">Explore</a></li>
                    <li class="mb-2"><a href="<?php echo $basePath; ?>pages/gallery.php" class="text-secondary text-decoration-none">Gallery</a></li>
                    <li class="mb-2"><a href="<?php echo $basePath; ?>pages/plan-visit.php" class="text-secondary text-decoration-none">Plan Visit</a></li>
                    <li class="mb-2"><a href="<?php echo $basePath; ?>pages/tours.php" class="text-secondary text-decoration-none">Tours</a></li>
                    <li class="mb-2"><a href="<?php echo $basePath; ?>pages/events.php" class="text-secondary text-decoration-none">Events</a></li>
                    <li><a href="<?php echo $basePath; ?>pages/contact.php" class="text-secondary text-decoration-none">Contact</a></li>
                </ul>
            </div>

            <!-- Contact & Newsletter -->
            <div class="col-lg-4">
                <h5 class="mb-3">Contact & Newsletter</h5>
                <p class="text-secondary mb-3">
                    <i class="fas fa-map-marker-alt me-2"></i> Harar, Ethiopia<br>
                    <i class="fas fa-phone me-2"></i> +251 123 456 789<br>
                    <i class="fas fa-envelope me-2"></i> info@hararlivingmuseum.com
                </p>
                <form class="newsletter-form">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Enter your email" aria-label="Email for newsletter">
                        <button class="btn btn-primary" type="submit">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>

        <hr class="my-4 border-secondary">
        
        <div class="row">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-0 text-secondary">&copy; <?php echo date('Y'); ?> Harar Living Museum. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <a href="#" class="text-secondary text-decoration-none me-3">Privacy Policy</a>
                <a href="#" class="text-secondary text-decoration-none">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="<?php echo $basePath; ?>assets/js/main.js"></script>
</body>
</html>