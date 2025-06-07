<?php
// Determine if we're in a subdirectory (pages)
$isPage = strpos($_SERVER['PHP_SELF'], '/pages/') !== false;
$basePath = $isPage ? '../' : '';
?>
<div class="d-grid gap-2 d-md-flex">
    <a href="<?php echo $basePath; ?>pages/explore.php" class="btn btn-primary">Explore Harar</a>
    <a href="<?php echo $basePath; ?>pages/plan-visit.php" class="btn btn-outline-primary">Plan Your Visit</a>
</div>
