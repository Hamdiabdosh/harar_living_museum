-- Create database if not exists
CREATE DATABASE IF NOT EXISTS harar_museum;
USE harar_museum;

-- Places table
CREATE TABLE places (
    place_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    description TEXT,
    image VARCHAR(255),
    location VARCHAR(150),
    latitude DECIMAL(10, 8),
    longitude DECIMAL(11, 8),
    category VARCHAR(100),
    rating DECIMAL(3, 2) DEFAULT 0,
    opening_hours TEXT,
    contact_info TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Favorites table
CREATE TABLE favorites (
    fav_id INT AUTO_INCREMENT PRIMARY KEY,
    place_id INT,
    saved_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (place_id) REFERENCES places(place_id) ON DELETE CASCADE
);

-- Bookings table
CREATE TABLE bookings (
    booking_id INT AUTO_INCREMENT PRIMARY KEY,
    tour_date DATE NOT NULL,
    tour_details TEXT,
    number_of_people INT NOT NULL DEFAULT 1,
    total_price DECIMAL(10, 2),
    payment_status ENUM('pending', 'paid', 'refunded') DEFAULT 'pending',
    status ENUM('pending', 'confirmed', 'cancelled') DEFAULT 'pending',
    cancellation_reason TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Events table
CREATE TABLE events (
    event_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    description TEXT,
    event_date DATE NOT NULL,
    end_date DATE,
    location VARCHAR(150),
    image VARCHAR(255),
    capacity INT,
    price DECIMAL(10, 2),
    status ENUM('upcoming', 'ongoing', 'completed', 'cancelled') DEFAULT 'upcoming',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Media uploads table
CREATE TABLE media_uploads (
    media_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    file_path VARCHAR(255) NOT NULL,
    thumbnail_path VARCHAR(255),
    type ENUM('image', 'video') NOT NULL,
    file_size INT,
    duration INT,
    tags TEXT,
    approved BOOLEAN DEFAULT FALSE,
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
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
CREATE INDEX idx_places_category ON places(category);
CREATE INDEX idx_events_date ON events(event_date);
CREATE INDEX idx_events_status ON events(status);
CREATE INDEX idx_bookings_date ON bookings(tour_date);
CREATE INDEX idx_bookings_status ON bookings(status);
CREATE INDEX idx_media_type ON media_uploads(type);
CREATE INDEX idx_media_approved ON media_uploads(approved);