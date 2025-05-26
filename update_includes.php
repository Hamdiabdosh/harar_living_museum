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
?> 