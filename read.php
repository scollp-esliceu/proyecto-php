<?php
include 'db.php';
$pageTitle = "Acerca";
require __DIR__ . "/includes/header.php";
$sql = "SELECT id, nom, telefon, email, missatge FROM contactos";
$result=$conn->query($sql);

echo "<pre>";
var_dump($result);
echo($result->num_rows);
echo "</pre>";
?>
<section>
    <h2>Missatges</h2>
    <p>Este sitio sirve como ejemplo para trabajar con Docker, PHP, MariaDB y phpMyAdmin.</p>
</section>

<?php
    while($row = $result->fetch_assoc()){
        echo $row['id'];
    }

    

?>

<?php
require __DIR__ . "/includes/footer.php";