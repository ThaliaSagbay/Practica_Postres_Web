<?php
include "db_conexion.php";
$sql = "SELECT nombre, correo, asunto, mensaje, fecha_registro FROM mensajes ORDER BY fecha_registro DESC";
$resultado = $conn->query($sql);
function mostrar($valor) {
    return htmlspecialchars($valor, ENT_QUOTES, "UTF-8");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes registrados | Paraíso de los Postres</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div>
<header>
    <h1>Mensajes registrados</h1>
</header>
<div class = "layout-principal">
    <nav><ul>
        <li><a href="index.html">Inicio</a></li>
        <li><a href="contacto.php">Contacto</a></li>
    </ul></nav>

<main>
<section class="seccion">
    <h2>Consulta de mensajes</h2>
    <?php if ($resultado && $resultado->num_rows > 0) { ?>
    <table>
        <thead><tr><th>Nombre</th><th>Correo</th><th>Asunto</th><th>Mensaje</th><th>Fecha</th></tr></thead>
        <tbody>
        <?php while ($fila = $resultado->fetch_assoc()) { ?>
            <tr>
                <td><?php echo mostrar($fila["nombre"]); ?></td>
                <td><?php echo mostrar($fila["correo"]); ?></td>
                <td><?php echo mostrar($fila["asunto"]); ?></td>
                <td><?php echo nl2br(mostrar($fila["mensaje"])); ?></td>
                <td><?php echo mostrar($fila["fecha_registro"]); ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <?php } else { ?>
        <p class="mensaje-error">Todavía no existen mensajes registrados.</p>
    <?php } ?>
    <p><a class="boton" href="contacto.php">Regresar al contacto</a></p>
</section>
</main>
</div>
<footer><p>© 2026 Paraíso de los Postres</p></footer>
</div>
</body>
</html>
<?php $conn->close(); ?>
