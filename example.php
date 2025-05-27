<?php
require_once 'config/database.php';

// Create database instance
$database = new Database();

// Get database connection
$db = $database->getConnection();

// Example: Insert a new user
$query = "INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)";
$params = ["John Doe", "john@example.com", password_hash("password123", PASSWORD_DEFAULT), "tourist"];
$userId = $database->insert($query, $params);

if ($userId) {
    echo "User created successfully with ID: " . $userId . "\n";
}

// Example: Get all places
$query = "SELECT * FROM places";
$places = $database->getRows($query);

if ($places) {
    echo "Found " . count($places) . " places:\n";
    foreach ($places as $place) {
        echo "- " . $place['title'] . "\n";
    }
}

// Example: Get a single user
$query = "SELECT * FROM users WHERE user_id = ?";
$params = [1];
$user = $database->getRow($query, $params);

if ($user) {
    echo "Found user: " . $user['name'] . "\n";
}

// Example: Update a place
$query = "UPDATE places SET rating = ? WHERE place_id = ?";
$params = [4.5, 1];
$affected = $database->update($query, $params);

if ($affected) {
    echo "Updated " . $affected . " place(s)\n";
}

// Close the connection
$database->closeConnection();
?> 