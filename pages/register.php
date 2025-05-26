<?php
// Set content type
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Harar Living Museum</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="bg-light">
    <header>
        <nav>
            <?php include '../includes/navbar.php'; ?>
        </nav>
    </header>

    <main>
        <!-- Registration Section -->
        <section class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card shadow-sm">
                            <div class="card-body p-4">
                                <div class="text-center mb-4">
                                    <h1 class="h3">Join Harar's Digital Journey</h1>
                                    <p class="text-muted">Create an account to plan your visit, share stories, or contribute knowledge.</p>
                                </div>

                                <!-- Registration Form -->
                                <form id="registerForm" class="needs-validation" novalidate>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="firstName" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="firstName" required>
                                            <div class="invalid-feedback">
                                                Please enter your first name.
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="lastName" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="lastName" required>
                                            <div class="invalid-feedback">
                                                Please enter your last name.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email Address</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fas fa-envelope"></i>
                                            </span>
                                            <input type="email" class="form-control" id="email" required>
                                            <div class="invalid-feedback">
                                                Please enter a valid email address.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fas fa-lock"></i>
                                            </span>
                                            <input type="password" class="form-control" id="password" required>
                                            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <div class="invalid-feedback">
                                                Please enter a password.
                                            </div>
                                        </div>
                                        <div class="form-text">
                                            Password must be at least 8 characters long and include a number and special character.
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fas fa-lock"></i>
                                            </span>
                                            <input type="password" class="form-control" id="confirmPassword" required>
                                            <div class="invalid-feedback">
                                                Passwords do not match.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="userType" class="form-label">I want to join as</label>
                                        <select class="form-select" id="userType" required>
                                            <option value="">Select your role...</option>
                                            <option value="tourist">Tourist</option>
                                            <option value="contributor">Contributor</option>
                                            <option value="researcher">Researcher</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select your role.
                                        </div>
                                    </div>

                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="terms" required>
                                        <label class="form-check-label" for="terms">
                                            I agree to the <a href="terms.php" class="text-decoration-none">Terms of Service</a> and <a href="privacy.php" class="text-decoration-none">Privacy Policy</a>
                                        </label>
                                        <div class="invalid-feedback">
                                            You must agree to the terms and conditions.
                                        </div>
                                    </div>

                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="newsletter">
                                        <label class="form-check-label" for="newsletter">
                                            Subscribe to our newsletter for updates about events and exhibitions
                                        </label>
                                    </div>

                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary btn-lg">
                                            <i class="fas fa-user-plus me-2"></i>Create Account
                                        </button>
                                    </div>
                                </form>

                                <hr class="my-4">

                                <!-- Social Registration -->
                                <div class="text-center">
                                    <p class="text-muted mb-3">Or register with</p>
                                    <div class="d-grid gap-2">
                                        <button type="button" class="btn btn-outline-primary">
                                            <i class="fab fa-google me-2"></i>Continue with Google
                                        </button>
                                        <button type="button" class="btn btn-outline-primary">
                                            <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
                                        </button>
                                    </div>
                                </div>

                                <div class="text-center mt-4">
                                    <p class="mb-0">Already have an account? <a href="login.php" class="text-decoration-none">Log in</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include '../includes/footer.php'; ?>

    <!-- Bootstrap JS Bundle-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script>
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

        // Password visibility toggle
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });

        // Password confirmation validation
        document.getElementById('confirmPassword').addEventListener('input', function() {
            const password = document.getElementById('password').value;
            const confirmPassword = this.value;
            
            if (password !== confirmPassword) {
                this.setCustomValidity('Passwords do not match');
            } else {
                this.setCustomValidity('');
            }
        });
    </script>
</body>
</html> 