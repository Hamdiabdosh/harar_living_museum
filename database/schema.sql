-- Create database if not exists
CREATE DATABASE IF NOT EXISTS harar_museum;
USE harar_museum;

-- Users table
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('tourist', 'contributor', 'admin') DEFAULT 'tourist',
    profile_photo VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Places table
CREATE TABLE places (
    place_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    description TEXT,
    image VARCHAR(255),
    location VARCHAR(150),
    category VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Favorites table
CREATE TABLE favorites (
    fav_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    place_id INT,
    saved_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE,
    FOREIGN KEY (place_id) REFERENCES places(place_id) ON DELETE CASCADE
);

-- Bookings table
CREATE TABLE bookings (
    booking_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    tour_date DATE NOT NULL,
    tour_details TEXT,
    status ENUM('pending', 'confirmed', 'cancelled') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
);

-- Testimonials table
CREATE TABLE testimonials (
    testimonial_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    message TEXT NOT NULL,
    photo VARCHAR(255),
    approved BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
);

-- Events table
CREATE TABLE events (
    event_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    description TEXT,
    event_date DATE NOT NULL,
    location VARCHAR(150),
    image VARCHAR(255),
    created_by INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (created_by) REFERENCES users(user_id) ON DELETE SET NULL
);

-- Media uploads table
CREATE TABLE media_uploads (
    media_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    title VARCHAR(100) NOT NULL,
    file_path VARCHAR(255) NOT NULL,
    type ENUM('image', 'video') NOT NULL,
    approved BOOLEAN DEFAULT FALSE,
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
);

-- Contact messages table
CREATE TABLE contact_messages (
    msg_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    subject VARCHAR(150) NOT NULL,
    message TEXT NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Add indexes for better performance
CREATE INDEX idx_users_email ON users(email);
CREATE INDEX idx_places_category ON places(category);
CREATE INDEX idx_events_date ON events(event_date);
CREATE INDEX idx_bookings_date ON bookings(tour_date);
CREATE INDEX idx_media_type ON media_uploads(type); 