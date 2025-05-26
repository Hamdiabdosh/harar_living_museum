// Function to load HTML includes
function loadIncludes() {
    // Load navbar
    fetch('../includes/navbar.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('navbar-placeholder').innerHTML = data;
            // Add active class to current page link
            const currentPage = window.location.pathname.split('/').pop();
            document.querySelectorAll('.nav-link').forEach(link => {
                if (link.getAttribute('href') === currentPage) {
                    link.classList.add('active');
                }
            });
        })
        .catch(error => console.error('Error loading navbar:', error));

    // Load footer
    fetch('../includes/footer.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footer-placeholder').innerHTML = data;
        })
        .catch(error => console.error('Error loading footer:', error));
}

// Call the function when the DOM is loaded
document.addEventListener('DOMContentLoaded', loadIncludes); 