<?php
// Set content type
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Harar Living Museum</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/contact.css">
</head>
<body>
    <header>
        <!-- Include Navbar -->
        <?php include '../includes/navbar.php'; ?>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero-section position-relative text-white py-5" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('../assets/images/harar-contact.jpg') center/cover;">
            <div class="container">
                <div class="row min-vh-50 align-items-center">
                    <div class="col-lg-8">
                        <h1 class="display-4 fw-bold mb-4">Get in Touch</h1>
                        <p class="lead">Have a question, suggestion, or collaboration idea? We'd love to hear from you.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Form Section -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card shadow-sm">
                            <div class="card-body p-4">
                                <h2 class="text-center mb-4">Send us a Message</h2>
                                <form id="contactForm" class="needs-validation" novalidate>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="name" class="form-label">Full Name *</label>
                                            <input type="text" class="form-control" id="name" required>
                                            <div class="invalid-feedback">Please enter your name.</div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="email" class="form-label">Email Address *</label>
                                            <input type="email" class="form-control" id="email" required>
                                            <div class="invalid-feedback">Please enter a valid email address.</div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="subject" class="form-label">Subject *</label>
                                        <input type="text" class="form-control" id="subject" required>
                                        <div class="invalid-feedback">Please enter a subject.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inquiryType" class="form-label">Inquiry Type</label>
                                        <select class="form-select" id="inquiryType">
                                            <option value="">Select type...</option>
                                            <option value="tourism">Tourism</option>
                                            <option value="research">Research</option>
                                            <option value="media">Media</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message" class="form-label">Message *</label>
                                        <textarea class="form-control" id="message" rows="5" required></textarea>
                                        <div class="invalid-feedback">Please enter your message.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="attachment" class="form-label">Attachment (Optional)</label>
                                        <input type="file" class="form-control" id="attachment">
                                        <div class="form-text">You can attach files like proposals or photos (max 5MB).</div>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-lg">
                                            <i class="fas fa-paper-plane me-2"></i>Send Message
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Information -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope fa-3x text-primary mb-3"></i>
                                <h3 class="h5">Email</h3>
                                <p class="mb-0">info@harar-livingmuseum.org</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-phone fa-3x text-primary mb-3"></i>
                                <h3 class="h5">Phone</h3>
                                <p class="mb-0">+251 938666215</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marker-alt fa-3x text-primary mb-3"></i>
                                <h3 class="h5">Location</h3>
                                <p class="mb-0">Harar, Ethiopia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Map Section -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="ratio ratio-21x9">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.0000000000005!2d42.11666666666667!3d9.316666666666666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOcKwMTknMDAuMCJOIDQywrAwNycxMC4wIkU!5e0!3m2!1sen!2set!4v1234567890!5m2!1sen!2set" 
                                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Social Media & Response Time -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card">
                            <div class="card-body text-center">
                                <h2 class="mb-4">Connect With Us</h2>
                                <div class="social-links mb-4">
                                    <a href="https://www.facebook.com" class="btn btn-outline-primary me-2">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.instagram.com" class="btn btn-outline-primary me-2">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="https://www.youtube.com" class="btn btn-outline-primary">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </div>
                                <div class="alert alert-info">
                                    <i class="fas fa-clock me-2"></i>
                                    We typically respond within 1-3 business days.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Our Team</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <img src="../assets/images/team/director.jpg" alt="Museum Director" class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
                                <h3 class="h5">Dr. Ahmed Zekaria</h3>
                                <p class="text-muted">Museum Director</p>
                                <p class="small">For research inquiries and partnerships</p>
                                <a href="mailto:director@harar-livingmuseum.org" class="btn btn-outline-primary btn-sm">Contact</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <img src="../assets/images/team/curator.jpg" alt="Curator" class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
                                <h3 class="h5">Sarah Johnson</h3>
                                <p class="text-muted">Curator</p>
                                <p class="small">For exhibition and collection inquiries</p>
                                <a href="mailto:curator@harar-livingmuseum.org" class="btn btn-outline-primary btn-sm">Contact</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <img src="../assets/images/team/coordinator.jpg" alt="Program Coordinator" class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
                                <h3 class="h5">Fatima Ahmed</h3>
                                <p class="text-muted">Program Coordinator</p>
                                <p class="small">For events and visitor services</p>
                                <a href="mailto:programs@harar-livingmuseum.org" class="btn btn-outline-primary btn-sm">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter Section -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card">
                            <div class="card-body text-center">
                                <h2 class="mb-4">Stay Updated</h2>
                                <p class="lead mb-4">Subscribe to our newsletter for updates about events, exhibitions, and research opportunities.</p>
                                <form class="row g-3 justify-content-center">
                                    <div class="col-md-8">
                                        <input type="email" class="form-control form-control-lg" placeholder="Enter your email" required>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary btn-lg w-100">Subscribe</button>
                                    </div>
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

        // Form validation
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>
</html> 