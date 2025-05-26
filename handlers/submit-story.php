<?php
session_start();
require_once 'db_connect.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: ../pages/login.html');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING);
    
    try {
        // Insert story
        $stmt = $pdo->prepare("INSERT INTO stories (user_id, title, content) VALUES (?, ?, ?)");
        $stmt->execute([$_SESSION['user_id'], $title, $content]);
        $story_id = $pdo->lastInsertId();
        
        // Handle image uploads
        if (!empty($_FILES['images']['name'][0])) {
            $upload_dir = '../uploads/stories/';
            if (!file_exists($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }
            
            foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
                $file_name = $_FILES['images']['name'][$key];
                $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
                $new_file_name = uniqid() . '.' . $file_ext;
                
                if (move_uploaded_file($tmp_name, $upload_dir . $new_file_name)) {
                    $stmt = $pdo->prepare("INSERT INTO story_images (story_id, image_path) VALUES (?, ?)");
                    $stmt->execute([$story_id, 'uploads/stories/' . $new_file_name]);
                }
            }
        }
        
        header('Location: ../community/stories.php?success=true');
        exit();
    } catch(PDOException $e) {
        error_log("Story submission failed: " . $e->getMessage());
        header('Location: ../error.php');
        exit();
    }
} else {
    header('Location: ../community/stories.php');
    exit();
}
?>