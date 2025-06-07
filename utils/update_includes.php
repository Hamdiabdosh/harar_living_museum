<?php
// Function to update includes in a PHP file
function updateIncludes($file) {
    $content = file_get_contents($file);
    
    // Replace navigation include with navbar include
    $content = str_replace('include \'../includes/navigation.php\'', 'include \'../includes/navbar.php\'', $content);
    $content = str_replace('include \'includes/navigation.php\'', 'include \'includes/navbar.php\'', $content);
    
    // Update comments
    $content = str_replace('<!-- Include Navigation -->', '<!-- Include Navbar -->', $content);
    
    file_put_contents($file, $content);
    echo "Updated $file\n";
}

// Get all PHP files in the pages directory
$pageFiles = glob('pages/*.php');

// Update each page file
foreach ($pageFiles as $file) {
    updateIncludes($file);
}

// Update root PHP files
$rootFiles = glob('*.php');
foreach ($rootFiles as $file) {
    if ($file !== 'update_includes.php' && $file !== 'convert_to_php.php') {
        updateIncludes($file);
    }
}

echo "Update complete!\n";

function updateFileIncludes($directory) {
    $files = glob($directory . '/*.php');
    
    foreach ($files as $file) {
        $content = file_get_contents($file);
        
        // Update include paths
        $content = str_replace(
            [
                "include '../includes/header.php'",
                "include '../includes/navbar.php'",
                "include '../includes/footer.php'",
                "include '../includes/HeroForAbout.php'",
                "include '../includes/background.php'",
                "include 'includes/header.php'",
                "include 'includes/navbar.php'",
                "include 'includes/footer.php'",
                "include 'includes/HeroForAbout.php'",
                "include 'includes/background.php'"
            ],
            [
                "include '../includes/layouts/header.php'",
                "include '../includes/components/navbar.php'",
                "include '../includes/components/footer.php'",
                "include '../includes/heroes/hero-about.php'",
                "",  // Remove background.php as it's empty
                "include 'includes/layouts/header.php'",
                "include 'includes/components/navbar.php'",
                "include 'includes/components/footer.php'",
                "include 'includes/heroes/hero-about.php'",
                ""   // Remove background.php as it's empty
            ],
            $content
        );
        
        file_put_contents($file, $content);
        echo "Updated: $file\n";
    }
    
    // Recursively process subdirectories
    $dirs = glob($directory . '/*', GLOB_ONLYDIR);
    foreach ($dirs as $dir) {
        updateFileIncludes($dir);
    }
}

// Update pages directory
updateFileIncludes('pages');
// Update dashboard directory
updateFileIncludes('dashboard');
// Update community directory
updateFileIncludes('community');

echo "File includes have been updated successfully!\n";
?> 