<?php
// Set content type
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events - Harar Living Museum</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- FullCalendar CSS -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/events.css">
</head>
<body>
    <?php include '../includes/background.php'; ?>
    <header>
        <!-- Include Navbar -->
        <?php include '../includes/navbar.php'; ?>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero-section position-relative text-white py-5" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('../assets/images/banner/shewal eid2.jpg') center/cover;">
            <div class="container">
                <div class="row min-vh-50 align-items-center">
                    <div class="col-lg-8">
                        <h1 class="display-4 fw-bold mb-4">Cultural Events & Festivities</h1>
                        <p class="lead">Harar is alive with timeless festivals and cultural celebrations. Below is a calendar of key events that keep the city vibrant year-round.</p>
                        <div class="mt-4">
                            <a href="#upcoming-events" class="btn btn-primary me-2">Upcoming Events</a>
                            <a href="#calendar" class="btn btn-outline-light">View Calendar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Events -->
        <section class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Featured Events</h2>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <img src="../assets/images/events/shewa-eid.jpg" class="card-img-top" alt="Shewa Eid Celebration">
                            <div class="card-body">
                                <h3 class="h5">Shewa Eid (Eid al-Fitr)</h3>
                                <p class="text-muted"><i class="fas fa-calendar me-2"></i>Date: Varies (After Ramadan)</p>
                                <p>Experience the vibrant Shewa Eid celebrations in Harar, featuring traditional prayers, family gatherings, and community feasts.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-primary">Religious</span>
                                    <button class="btn btn-outline-primary btn-sm">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <img src="../assets/images/events/ashura.jpg" class="card-img-top" alt="Ashura Commemoration">
                            <div class="card-body">
                                <h3 class="h5">Ashura Commemoration</h3>
                                <p class="text-muted"><i class="fas fa-calendar me-2"></i>Date: Varies (Islamic Calendar)</p>
                                <p>Join the solemn Ashura observances, featuring traditional processions, prayers, and community gatherings in Harar's historic mosques.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-primary">Religious</span>
                                    <button class="btn btn-outline-primary btn-sm">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Calendar View -->
        <section id="calendar" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5">Event Calendar</h2>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div id="calendar-container" class="calendar-wrapper"></div>
                        <!-- Event Details Modal -->
                        <div class="modal fade" id="eventDetailsModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Event Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div id="eventDetailsContent"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <style>
        .calendar-wrapper {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .fc {
            font-size: 0.9em;
        }
        
        .fc .fc-toolbar {
            flex-wrap: wrap;
            gap: 10px;
        }
        
        .fc .fc-toolbar-title {
            font-size: 1.2em;
        }
        
        .fc .fc-button {
            padding: 0.3em 0.6em;
            font-size: 0.9em;
        }
        
        .fc-event {
            cursor: pointer;
            padding: 2px 4px;
            margin: 1px 0;
        }
        
        .fc-event:hover {
            opacity: 0.9;
        }
        
        .event-details {
            padding: 15px;
        }
        
        .event-details h4 {
            margin-bottom: 10px;
            color: #333;
        }
        
        .event-details p {
            margin-bottom: 5px;
            color: #666;
        }
        
        .event-details .badge {
            margin-right: 5px;
        }
        </style>

        <script>
        // Initialize FullCalendar
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar-container');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek'
                },
                height: 'auto',
                events: [
                    {
                        title: 'Shewa Eid',
                        start: '2024-04-10',
                        description: 'Celebration of Eid al-Fitr in Harar',
                        location: 'Various Mosques',
                        category: 'Religious',
                        className: 'bg-primary'
                    },
                    {
                        title: 'Traditional Storytelling Night',
                        start: '2024-04-10',
                        description: 'Local elders sharing tales of Harar\'s history',
                        location: 'Old City Cultural Center',
                        category: 'Cultural',
                        className: 'bg-info'
                    },
                    {
                        title: 'Weekly Market Day',
                        start: '2024-04-15',
                        description: 'Local crafts, foods, and cultural performances',
                        location: 'Main Market Square',
                        category: 'Market',
                        className: 'bg-success'
                    },
                    {
                        title: 'Ashura Commemoration',
                        start: '2024-04-20',
                        description: 'Traditional processions and prayers',
                        location: 'Historic Mosques',
                        category: 'Religious',
                        className: 'bg-primary'
                    }
                ],
                eventClick: function(info) {
                    showEventDetails(info.event);
                }
            });
            calendar.render();
        });

        // Function to show event details in modal
        function showEventDetails(event) {
            const modal = new bootstrap.Modal(document.getElementById('eventDetailsModal'));
            const content = document.getElementById('eventDetailsContent');
            
            const eventDate = new Date(event.start).toLocaleDateString('en-US', {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
            
            content.innerHTML = `
                <div class="event-details">
                    <h4>${event.title}</h4>
                    <p><i class="fas fa-calendar me-2"></i>${eventDate}</p>
                    <p><i class="fas fa-map-marker-alt me-2"></i>${event.extendedProps.location}</p>
                    <p><i class="fas fa-info-circle me-2"></i>${event.extendedProps.description}</p>
                    <div class="mt-3">
                        <span class="badge ${event.className}">${event.extendedProps.category}</span>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-primary btn-sm" onclick="addToTripPlan('${event.title}')">
                            Add to Trip Plan
                        </button>
                    </div>
                </div>
            `;
            
            modal.show();
        }

        // Function to add event to trip plan
        function addToTripPlan(eventTitle) {
            // You can implement the trip plan functionality here
            alert(`Added "${eventTitle}" to your trip plan!`);
        }
        </script>

        <!-- Upcoming Events -->
        <section id="upcoming-events" class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Upcoming Events</h2>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- Event 1 -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <div class="date-box p-3 bg-primary text-white rounded">
                                            <h3 class="h2 mb-0">10</h3>
                                            <p class="mb-0">April</p>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <h3 class="h5">Traditional Storytelling Night</h3>
                                        <p class="text-muted"><i class="fas fa-clock me-2"></i>7:00 PM - 9:00 PM</p>
                                        <p class="text-muted"><i class="fas fa-map-marker-alt me-2"></i>Old City, Cultural Center</p>
                                        <p>Experience the ancient tradition of Harari storytelling, featuring local elders sharing tales of Harar's rich history and folklore.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="badge bg-info">Cultural</span>
                                            <button class="btn btn-primary btn-sm">Add to Trip Plan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Event 2 -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <div class="date-box p-3 bg-primary text-white rounded">
                                            <h3 class="h2 mb-0">15</h3>
                                            <p class="mb-0">April</p>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <h3 class="h5">Weekly Market Day</h3>
                                        <p class="text-muted"><i class="fas fa-clock me-2"></i>8:00 AM - 4:00 PM</p>
                                        <p class="text-muted"><i class="fas fa-map-marker-alt me-2"></i>Main Market Square</p>
                                        <p>Visit Harar's vibrant weekly market, featuring local crafts, traditional foods, and cultural performances.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="badge bg-success">Market</span>
                                            <button class="btn btn-primary btn-sm">Add to Trip Plan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Download Calendar -->
        <section class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h2 class="mb-4">Download Event Calendar</h2>
                        <p class="mb-4">Get a printable version of our event calendar for offline use.</p>
                        <a href="#" class="btn btn-primary">
                            <i class="fas fa-download me-2"></i>Download PDF
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div id="footer-placeholder"></div>

    <!-- Bootstrap JS Bundle-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FullCalendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
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

        // Event filtering
        document.querySelectorAll('[data-category]').forEach(button => {
            button.addEventListener('click', () => {
                const category = button.dataset.category;
                // Add filtering logic here
                document.querySelectorAll('[data-category]').forEach(btn => {
                    btn.classList.remove('active');
                });
                button.classList.add('active');
            });
        });
    </script>
</body>
</html> 