<?php
include 'db.php';
$pageTitle = "Acerca";
require __DIR__ . "/includes/header.php";
$sql = "SELECT id, nom, telefon, email, missatge FROM contactos";
$result=$conn->query($sql);
?>
<link rel="stylesheet" href="/css/missatges.css">
<section class="read-titol">
    <h2>Missatges</h2>
    <p>Els missatges que enviin els usuaris sortiran a aquest registre</p>
</section>

<div class="Missatges-container llistat">
<?php
    while($row = $result->fetch_assoc()){
        ?>
        <div class="fila">
                <div class="camp id">
                    <?=$row['id'];?>
                </div>
                <div class="camp nom">
                    <span class="etiqueta">NOM:</span>
                    <?=$row['nom'];?>
                </div>
                <div class="camp email">
                    <span class="etiqueta">CORREU:</span>
                    <?=$row['email'];?>
                </div>
                <div class="camp telefon">
                    <span class="etiqueta">TELÈFON:</span>
                    <?=$row['telefon'];?>
                </div>
                <div class="camp missatge">
                    <span class="etiqueta">MISSATGE:</span>
                    <?=$row['missatge'];?>
                </div>
        </div>

    <?php
    }


?>
</div>

<?php
require __DIR__ . "/includes/footer.php";