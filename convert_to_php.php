<?php
// Function to convert HTML file to PHP
function convertHtmlToPhp($htmlFile) {
    $content = file_get_contents($htmlFile);
    
    // Add PHP header
    $phpContent = "<?php\n// Set content type\nheader('Content-Type: text/html; charset=utf-8');\n?>\n" . $content;
    
    // Replace navigation placeholder with PHP include
    $phpContent = str_replace('<div id="navbar-placeholder"></div>', '<?php include \'../includes/navbar.php\'; ?>', $phpContent);
    
    // Replace footer with PHP include
    $phpContent = str_replace('<!-- Include Footer -->', '', $phpContent);
    $phpContent = preg_replace('/<footer.*?<\/footer>/s', '<?php include \'../includes/footer.php\'; ?>', $phpContent);
    
    // Update file extensions in links
    $phpContent = str_replace('.html"', '.php"', $phpContent);
    $phpContent = str_replace('.html\'', '.php\'', $phpContent);
    
    // Remove includes.js script
    $phpContent = preg_replace('/<script src=".*?includes\.js"><\/script>/', '', $phpContent);
    
    // Create new PHP file
    $phpFile = str_replace('.html', '.php', $htmlFile);
    file_put_contents($phpFile, $phpContent);
    
    echo "Converted $htmlFile to $phpFile\n";
}

// Get all HTML files in the pages directory
$htmlFiles = glob('pages/*.html');

// Convert each HTML file
foreach ($htmlFiles as $htmlFile) {
    convertHtmlToPhp($htmlFile);
}

// Convert root HTML files
$rootHtmlFiles = glob('*.html');
foreach ($rootHtmlFiles as $htmlFile) {
    convertHtmlToPhp($htmlFile);
}

echo "Conversion complete!\n";
?> 