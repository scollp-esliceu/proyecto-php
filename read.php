<?php
include 'db.php';
$pageTitle = "Missatges";
require __DIR__ . "/includes/header.php";

$sql = "SELECT id, nom, telefon, email, missatge FROM contactos ORDER BY id DESC";
$result = $conn->query($sql);
?>
<link rel="stylesheet" href="/css/missatges.css">

<section class="read-titol">
    <h2>Missatges</h2>
    <p>Tots els missatges enviats pels usuaris</p>
</section>

<div class="Missatges-container">
    <?php
    $num = 0; 
    while ($row = $result->fetch_assoc()): 
        $num++;
        $paridad="impar";
        if($num%2==0){
            $paridad="par";
        }
        ?>
        <div class="fila">
            
            <div class="fila-header">
                <span class="id-number">#<?= $row['id'] ?></span>
                <div class="btn-borrar">
                    <a href="borrar.php?id=<?= $row['id'] ?>">
                        X
                    </a>
                </div>
            </div>

            <div class="camp nom">
                <span class="etiqueta">NOM:</span> <?= htmlspecialchars($row['nom']) ?>
            </div>
            <div class="camp email">
                <span class="etiqueta">CORREU:</span> <?= htmlspecialchars($row['email']) ?>
            </div>
            <div class="camp telefon">
                <span class="etiqueta">TELÈFON:</span> <?= htmlspecialchars($row['telefon']) ?>
            </div>
            <div class="camp missatge">
                <span class="etiqueta">MISSATGE:</span>
                <p><?= nl2br(htmlspecialchars($row['missatge'])) ?></p>
            </div>
        </div>
    <?php endwhile; ?>

    <?php
        if($num===0){
            echo "No hi ha registres per mostrar";
        }
    ?>
</div>

<?php require __DIR__ . "/includes/footer.php"; ?>