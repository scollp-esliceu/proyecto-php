<?php
include 'db.php';


if($_SERVER['REQUEST_METHOD']=='POST') {    
    $nom=$_POST['nom'];
    $email=$_POST['email'];
    $telefon=$_POST['telefon'];
    $missatge=$_POST['missatge'];

    $sql = "INSERT INTO contactos (nom, telefon, email, missatge) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($sql);
    # ssss indica que les 4 variables són strings
    $stmt->bind_param("ssss", $nom, $telefon, $email, $missatge);
    $result = $stmt->execute();

    if($result) {
        $stmt->close();
        $conn->close();
        header("Location: contacto.php?status=success&msg=Missatge guardat!");
    } else {
        // Error a l'execució (p. ex. email duplicat, camp massa llarg, etc.)
        $error = $stmt->error;
        $stmt->close();
        $conn->close();
        header("Location: contacto.php?status=error&msg=" . urlencode("Error guardant el missatge: $error"));
        exit();
    }


} else {
    // Algú ha accedit directament al fitxer sense POST
    header("Location: contacto.php");
    exit();
}



