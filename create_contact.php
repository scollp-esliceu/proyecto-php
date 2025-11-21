<?php

if($_SERVER['REQUEST_METHOD']=='POST') {
    echo "CREANDO CONTACTO NUEVO <br>";
    
    $nom=$_POST['nom'];
    echo "NOMBRE: ".$nom."<br>";
    
    $email=$_POST['email'];
    echo "CORREU: ".$email."<br>";
    
    $telefon=$_POST['telefon'];
    echo "TELÈFON: ".$telefon."<br>";
    
    $missatge=$_POST['missatge'];
    echo "MISSATGE: ".$missatge."<br>";
} else {
    echo "ERROR A METODE POST<br>";
}


