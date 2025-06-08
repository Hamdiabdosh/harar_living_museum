<?php
// Determine if we're in a subdirectory (pages)
$isPage = strpos($_SERVER['PHP_SELF'], '/pages/') !== false;
$basePath = $isPage ? '../' : '';
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Harar Living Museum - Discover the rich cultural heritage and vibrant traditions of Harar, a UNESCO World Heritage site.">
    <meta name="keywords" content="Harar, Living Museum, UNESCO, Heritage, Culture, Ethiopia, Tourism">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - ' : ''; ?>Harar Living Museum</title>
    <!-- Favicon -->
    <link rel="icon" type="image/webp" href="<?php echo $basePath; ?>assets/images/logo.webp">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo $basePath; ?>assets/css/main.css">
    <link rel="stylesheet" href="<?php echo $basePath; ?>assets/css/theme.css">
    <!-- Theme Script -->
    <script src="<?php echo $basePath; ?>assets/js/theme.js" defer></script>
</head>
<body class="bg-body">
</body>
</html>
