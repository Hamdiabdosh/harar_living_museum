<?php
// Set content type
header('Content-Type: text/html; charset=utf-8');

// Set page title
$pageTitle = 'Research';

// Include header
include '../includes/layouts/header.php';

// Include navbar
include '../includes/components/navbar.php';
?>

<main>
    <!-- Hero Section -->
    <section class="hero-section position-relative text-white py-5" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('../assets/images/harar-research.jpg') center/cover;">
        <div class="container">
            <div class="row min-vh-50 align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4">Research Resources</h1>
                    <p class="lead">Harar's rich history and culture offer immense value for academic study. This section provides resources and connections for researchers worldwide.</p>
                    <div class="mt-4">
                        <a href="#research-areas" class="btn btn-primary me-2">Research Areas</a>
                        <a href="#publications" class="btn btn-outline-light">Publications</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Research Focus Areas -->
    <section id="research-areas" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Research Focus Areas</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="h5"><i class="fas fa-landmark me-2"></i>History of Harar</h3>
                            <p>Study the ancient city's development, the Jugol walls, and its role in regional trade and politics.</p>
                            <a href="#" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="h5"><i class="fas fa-mosque me-2"></i>Architecture & Urban Studies</h3>
                            <p>Explore Harar's unique architectural heritage and urban planning traditions.</p>
                            <a href="#" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="h5"><i class="fas fa-book me-2"></i>Language & Literature</h3>
                            <p>Research the Harari language, oral traditions, and literary heritage.</p>
                            <a href="#" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="h5"><i class="fas fa-hands-praying me-2"></i>Religious Traditions</h3>
                            <p>Study the city's religious diversity and coexistence practices.</p>
                            <a href="#" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="h5"><i class="fas fa-comments me-2"></i>Oral Histories</h3>
                            <p>Document and analyze cultural memory and storytelling traditions.</p>
                            <a href="#" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="h5"><i class="fas fa-seedling me-2"></i>Indigenous Knowledge</h3>
                            <p>Research traditional practices, crafts, and sustainable living methods.</p>
                            <a href="#" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Publications -->
    <section id="publications" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Recommended Readings & Publications</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- Book 1 -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="h5">"The History of Harar and the Hararis"</h3>
                            <p class="text-muted">Author: Dr. Ahmed Zekaria</p>
                            <p>A comprehensive study of Harar's history and cultural development.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-primary">History</span>
                                <a href="#" class="btn btn-outline-primary btn-sm">Download PDF</a>
                            </div>
                        </div>
                    </div>
                    <!-- Book 2 -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="h5">"Architecture of the Harari House"</h3>
                            <p class="text-muted">Author: Prof. Sarah Johnson</p>
                            <p>Detailed analysis of traditional Harari architecture and urban planning.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-success">Architecture</span>
                                <a href="#" class="btn btn-outline-primary btn-sm">Download PDF</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Archives & Resources -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Archives & Resources</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="h5"><i class="fas fa-archive me-2"></i>Local Archives</h3>
                            <p>Access historical documents, photographs, and records at the Harar Cultural Center.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-clock me-2"></i>Opening Hours: Mon-Fri, 9AM-5PM</li>
                                <li><i class="fas fa-map-marker-alt me-2"></i>Location: Cultural Center, Harar</li>
                                <li><i class="fas fa-phone me-2"></i>Contact: +251 938666215</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="h5"><i class="fas fa-university me-2"></i>Partner Institutions</h3>
                            <p>Collaborate with local universities and research centers.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-graduation-cap me-2"></i>Haramaya University</li>
                                <li><i class="fas fa-book me-2"></i>Harar Regional Library</li>
                                <li><i class="fas fa-landmark me-2"></i>Harar Museum</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Research Collaboration -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-center mb-4">Research Collaboration</h2>
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="institution" class="form-label">Institution</label>
                                    <input type="text" class="form-control" id="institution" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="research" class="form-label">Research Interest</label>
                                    <textarea class="form-control" id="research" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="collaboration" class="form-label">Type of Collaboration</label>
                                    <select class="form-select" id="collaboration" required>
                                        <option value="">Select type...</option>
                                        <option value="fieldwork">Fieldwork Support</option>
                                        <option value="archive">Archive Access</option>
                                        <option value="partnership">Research Partnership</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Submit Request</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Past Projects -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Research Highlights</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- Project 1 -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="h5">"Traditional Medicine in Harar"</h3>
                            <p class="text-muted">Researcher: Dr. Maria Rodriguez</p>
                            <p>A comprehensive study of traditional healing practices and their role in community health.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-info">Health</span>
                                <a href="#" class="btn btn-outline-primary btn-sm">View Project</a>
                            </div>
                        </div>
                    </div>
                    <!-- Project 2 -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="h5">"Urban Development of Harar"</h3>
                            <p class="text-muted">Researcher: Prof. James Wilson</p>
                            <p>Analysis of the city's growth and preservation challenges in the modern era.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-warning">Urban Studies</span>
                                <a href="#" class="btn btn-outline-primary btn-sm">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Research Guide PDF -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body text-center">
                            <h2 class="mb-4">Research Guide</h2>
                            <p class="lead mb-4">Download our comprehensive guide for researchers interested in studying Harar's heritage.</p>
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h3 class="h5"><i class="fas fa-file-pdf text-danger me-2"></i>Complete Guide</h3>
                                            <p>Full research guide including all sections and resources.</p>
                                            <div class="d-grid gap-2">
                                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#completeGuideModal">
                                                    <i class="fas fa-eye me-2"></i>Preview
                                                </button>
                                                <a href="../assets/documents/harar-research-guide.pdf" class="btn btn-primary" download>
                                                    <i class="fas fa-download me-2"></i>Download PDF
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h3 class="h5"><i class="fas fa-file-pdf text-danger me-2"></i>Quick Reference</h3>
                                            <p>Essential information and contact details for researchers.</p>
                                            <div class="d-grid gap-2">
                                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#quickReferenceModal">
                                                    <i class="fas fa-eye me-2"></i>Preview
                                                </button>
                                                <a href="../assets/documents/harar-research-quick-reference.pdf" class="btn btn-primary" download>
                                                    <i class="fas fa-download me-2"></i>Download PDF
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-info">
                                <h4 class="h6 mb-3">Guide Contents:</h4>
                                <ul class="list-unstyled text-start">
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Research permit application process</li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Archive access guidelines</li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Local research contacts</li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Recommended research methods</li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Cultural sensitivity guidelines</li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Publication and citation guidelines</li>
                                </ul>
                            </div>
                            <p class="text-muted mt-3">Last updated: March 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Frequently Asked Questions</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="accordion" id="researchFAQ">
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    How can I access the archives?
                                </button>
                            </h3>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#researchFAQ">
                                <div class="accordion-body">
                                    Researchers can access the archives by appointment. Please contact us through the collaboration form above.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    What support is available for fieldwork?
                                </button>
                            </h3>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#researchFAQ">
                                <div class="accordion-body">
                                    We provide assistance with local contacts, translation services, and research permits. Please specify your needs in the collaboration form.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include '../includes/components/footer.php'; ?>

<!-- PDF Preview Modals -->
<div class="modal fade" id="completeGuideModal" tabindex="-1" aria-labelledby="completeGuideModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="completeGuideModalLabel">Complete Research Guide Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="ratio ratio-16x9">
                    <iframe src="../assets/documents/harar-research-guide.pdf#toolbar=0" class="border-0"></iframe>
                </div>
            </div>
            <div class="modal-footer">
                <a href="../assets/documents/harar-research-guide.pdf" class="btn btn-primary" download>
                    <i class="fas fa-download me-2"></i>Download Full Guide
                </a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="quickReferenceModal" tabindex="-1" aria-labelledby="quickReferenceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="quickReferenceModalLabel">Quick Reference Guide Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="ratio ratio-16x9">
                    <iframe src="../assets/documents/harar-research-quick-reference.pdf#toolbar=0" class="border-0"></iframe>
                </div>
            </div>
            <div class="modal-footer">
                <a href="../assets/documents/harar-research-quick-reference.pdf" class="btn btn-primary" download>
                    <i class="fas fa-download me-2"></i>Download Quick Reference
                </a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/main.js"></script>
</body>
</html> 