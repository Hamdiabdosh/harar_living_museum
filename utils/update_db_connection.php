<?php
function updateFile($file) {
    $content = file_get_contents($file);
    
    // Replace the require statement
    $content = str_replace(
        "require_once 'db_connect.php';",
        "require_once '../config/database.php';",
        $content
    );
    
    // Replace PDO usage with Database class
    $content = str_replace(
        '$pdo = new PDO',
        '$database = new Database(); $pdo = $database->getConnection()',
        $content
    );
    
    file_put_contents($file, $content);
    echo "Updated: $file\n";
}

// Update handler files
$handlerFiles = [
    'handlers/submit-story.php',
    'handlers/save-favorite.php',
    'handlers/register.php',
    'handlers/login.php',
    'handlers/contact-handler.php',
    'handlers/book-tour.php',
    'community/stories.php',
    'community/comments.php'
];

foreach ($handlerFiles as $file) {
    if (file_exists($file)) {
        updateFile($file);
    }
}

// Remove the old db_connect.php
if (file_exists('handlers/db_connect.php')) {
    unlink('handlers/db_connect.php');
    echo "Removed: handlers/db_connect.php\n";
}

echo "Database connection updates completed!\n";
?> 