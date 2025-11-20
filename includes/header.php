<?php
if (!isset($pageTitle)) {
    $pageTitle = "Ginnet";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="stylesheet" href="/css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/css/ligthbox.css?v=<?php echo time(); ?>">
</head>
<body>
<header class="site-header">
    <div class="container">
        <h1 class="logo">Ginnet</h1>
        <nav class="main-nav">
            <a href="/index.php">Inicio</a>
            <a href="/acerca.php">Acerca</a>
            <a href="/galeria.php">Galería</a>
        </nav>
    </div>
</header>
<main class="site-content">