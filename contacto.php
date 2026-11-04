<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | Paraíso de los Postres</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div>
    <header>
        <h1>🍰 Paraíso de los Postres 🍓</h1>
    </header>

    <div class = "layout-principal">
        <nav aria-label="Navegación principal">
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="Pages/clasicos.html">Clásicos</a></li>
                <li><a href="Pages/chocolate.html">Chocolate</a></li>
                <li><a href="Pages/frutas.html">Frutas</a></li>
                <li><a href="Pages/recetas.html">Recetas</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    
    
<main>
<section class="seccion">
    <h2>Contáctanos</h2>
    <p>Si tienes una sugerencia o quieres compartir tu opinión sobre el sitio, puedes dejar un mensaje en el siguiente formulario.</p>
    <form action="procesar_contacto.php" method="POST">
        <fieldset>
            <legend>Datos del mensaje</legend>
            <label for="nombre">Nombre completo</label>
            <input type="text" id="nombre" name="nombre" maxlength="100" required>
            <label for="correo">Correo electrónico</label>
            <input type="email" id="correo" name="correo" maxlength="150" required>
            <label for="asunto">Asunto</label>
            <input type="text" id="asunto" name="asunto" maxlength="150" required>
            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="mensaje" maxlength="2000" required></textarea>
            <button class="boton" type="submit">Enviar mensaje</button>
        </fieldset>
    </form>
    <p><a href="mensajes.php">Consultar mensajes registrados</a></p>
</section>
</main>
</div>

    <footer>
        <p>Autor: Thalia Sagbay <a href="mailto:tsagbayp@est.ups.edu.ec">Enviar un correo</a> · © 2026 Paraíso de los Postres</p>
    </footer>
    </div>
</body>
</html>
