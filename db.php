<?php
// Parámetros de conexión a la base de datos
$serverName = "db";               // Nombre del servicio de base de datos en Docker
$username   = "alumno";    // Usuario configurado en docker-compose
$password   = "alumno123";  // Contraseña configurada en docker-compose
$dbName     = "alumnos";         // Base de datos configurada en docker-compose

// Crear la conexión con MySQL/MariaDB usando mysqli
$conn = new mysqli($serverName, $username, $password, $dbName);

// Comprobar si hay errores en la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Si llegamos aquí, la conexión se ha establecido correctamente.
// Más adelante usaremos $conn para trabajar con la base de datos.