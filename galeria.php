<?php
$pageTitle = "Galeria";
require __DIR__ . "/includes/header.php";
$dir = __DIR__ . "/uploads";
$files = scandir($dir);

?>

<h1>Galeria web</h1>

<div class="galeria">
        <?php foreach ($files as $file): ?>
            <?php
        if ($file === "." || $file === "..") {
            continue;
        }

        // només pngs (nom que contingui "png")
        if (strpos($file, "thumb") === false) {
            continue;
        }

        $full  = "uploads/" . str_replace('.thumb', '', $file);
        $png = "uploads/$file";
        ?>
        <img src="<?= $png ?>" 
         data-full="<?= $full ?>" 
         alt="" 
         class="png">
    <?php endforeach; ?>
</div>
<!-- Lightbox amb prev/next -->
<div id="lightbox">
    <button class="lb-btn lb-prev">&#10094;</button>
    <img id="lightbox-img" src="" alt="">
    <button class="lb-btn lb-next">&#10095;</button>
    <button class="lb-close">&times;</button>
</div>

<script src="js/lightbox.js"></script>


<?php
require __DIR__ . "/includes/footer.php";