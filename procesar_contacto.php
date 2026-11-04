<?php
include "db_conexion.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contacto.php");
    exit;
}

$errores = array();

$nombre = isset($_POST["nombre"]) ? trim($_POST["nombre"]) : "";
$correo = isset($_POST["correo"]) ? trim($_POST["correo"]) : "";
$asunto = isset($_POST["asunto"]) ? trim($_POST["asunto"]) : "";
$mensaje = isset($_POST["mensaje"]) ? trim($_POST["mensaje"]) : "";


if ($nombre === "") {
    $errores[] = "El nombre es obligatorio.";
} elseif (mb_strlen($nombre, "UTF-8") > 100) {
    $errores[] = "El nombre no puede superar los 100 caracteres.";
}

if ($correo === "") {
    $errores[] = "El correo es obligatorio.";
} elseif (mb_strlen($correo, "UTF-8") > 150) {
    $errores[] = "El correo no puede superar los 150 caracteres.";
} elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    $errores[] = "Escribe un correo electrónico válido.";
}

if ($asunto === "") {
    $errores[] = "El asunto es obligatorio.";
} elseif (mb_strlen($asunto, "UTF-8") > 150) {
    $errores[] = "El asunto no puede superar los 150 caracteres.";
}

if ($mensaje === "") {
    $errores[] = "El mensaje es obligatorio.";
} elseif (mb_strlen($mensaje, "UTF-8") > 2000) {
    $errores[] = "El mensaje no puede superar los 2000 caracteres.";
}

function mostrar($valor) {
    return htmlspecialchars($valor, ENT_QUOTES, "UTF-8");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del envío | Paraíso de los Postres</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<header><h1>Paraíso de los Postres</h1></header>
<main>
<section class="seccion">
<?php if (count($errores) > 0) { ?>
    <h2>No se pudo enviar el mensaje</h2>
    <div class="mensaje-error">
        <ul>
        <?php foreach ($errores as $error) { ?>
            <li><?php echo mostrar($error); ?></li>
        <?php } ?>
        </ul>
    </div>
<?php } else {
    $sql = "INSERT INTO mensajes (nombre, correo, asunto, mensaje) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssss", $nombre, $correo, $asunto, $mensaje);
        if ($stmt->execute()) {
            echo "<h2>Mensaje enviado correctamente</h2>";
            echo "<p class='mensaje-exito'>El mensaje se guardó en la base de datos.</p>";
        } else {
            echo "<h2>No se pudo guardar el mensaje</h2>";
            echo "<p class='mensaje-error'>Ocurrió un problema al guardar la información.</p>";
        }
        $stmt->close();
    } else {
        echo "<h2>No se pudo procesar la solicitud</h2>";
        echo "<p class='mensaje-error'>No fue posible preparar la consulta.</p>";
    }
} ?>
    <p><a class="boton" href="contacto.php">Volver al formulario</a></p>
    <p><a href="mensajes.php">Ver mensajes registrados</a></p>
</section>
</main>
<footer><p>© 2026 Paraíso de los Postres</p></footer>
</body>
</html>
<?php
$conn->close();
?>
