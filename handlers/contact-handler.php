<?php
require_once 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    
    try {
        $stmt = $pdo->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $email, $subject, $message]);
        
        // Send email notification (optional)
        $to = "admin@hararlivingmuseum.com";
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        
        mail($to, "Contact Form: $subject", $message, $headers);
        
        header('Location: ../pages/contact.html?success=true');
        exit();
    } catch(PDOException $e) {
        error_log("Contact form submission failed: " . $e->getMessage());
        header('Location: ../error.php');
        exit();
    }
} else {
    header('Location: ../pages/contact.html');
    exit();
}
?>