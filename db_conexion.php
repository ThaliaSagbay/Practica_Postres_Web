<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "postres_db";

$conn = new mysqli($servidor, $usuario, $contrasena, $base_datos);

if ($conn->connect_error) {
    die("No se pudo conectar con la base de datos. Verifica la configuración de XAMPP.");
}

$conn->set_charset("utf8mb4");
?>
