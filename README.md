# Paraíso de los Postres 🍰

Este proyecto consiste en el desarrollo de un sitio web sobre diferentes tipos de postres. Fue realizado como parte de la práctica de Programación y Plataformas Web, utilizando HTML5, CSS, PHP y MySQL.

La página permite conocer distintas opciones de postres, consultar algunas recetas y enviar mensajes mediante un formulario de contacto.

## Contenido del proyecto

El sitio web está organizado en varios archivos y carpetas:

- `index.html`: página principal.
- `Pages/`: contiene las cuatro páginas adicionales sobre postres clásicos, chocolate, frutas y recetas.
- `css/estilos.css`: archivo donde se encuentran los estilos y el diseño de todas las páginas.
- `contacto.php`: contiene el formulario para enviar mensajes.
- `procesar_contacto.php`: recibe los datos del formulario, realiza las validaciones y procesa el registro.
- `mensajes.php`: permite consultar los mensajes guardados.
- `db_conexion.php`: contiene la conexión con la base de datos.
- `sql/postres_db.sql`: contiene las instrucciones para crear la base de datos y la tabla de mensajes.
- `Imagenes/`: contiene las fotografías utilizadas en las diferentes páginas del sitio web.

## Herramientas utilizadas

Para desarrollar y ejecutar el proyecto se utilizaron las siguientes herramientas:

- HTML5 para organizar el contenido de las páginas.
- CSS3 para dar formato, colores y distribución al sitio web.
- PHP para procesar los datos enviados desde el formulario.
- MySQL para guardar los mensajes de contacto.
- XAMPP para ejecutar el proyecto de manera local.

## Requisitos para ejecutar el proyecto

Antes de iniciar, es necesario contar con:

- XAMPP instalado.
- Apache y MySQL habilitados.
- PHP con las extensiones MySQLi y mbstring.
- Un navegador web.

## ¿Cómo ejecutar el proyecto?

Para visualizar el sitio y probar sus funcionalidades, se deben seguir estos pasos:

1. Copiar la carpeta `Practica_Postres` dentro de `C:\xampp\htdocs\`.
2. Abrir XAMPP e iniciar los servicios Apache y MySQL.
3. Ingresar a `http://localhost/phpmyadmin`.
4. Seleccionar la opción **Importar** y cargar el archivo `sql/postres_db.sql`.
5. Comprobar que se hayan creado la base de datos `postres_db` y la tabla `mensajes`.
6. Revisar el archivo `db_conexion.php` y verificar que los datos de conexión a MySQL sean correctos.
7. Finalmente, abrir el navegador e ingresar a:

`http://localhost/Practica_Postres/index.html`

## Direcciones para acceder al sitio

Una vez iniciado XAMPP, se puede ingresar directamente a las siguientes páginas:

- Página principal: `http://localhost/Practica_Postres/index.html`
- Formulario de contacto: `http://localhost/Practica_Postres/contacto.php`
- Consulta de mensajes: `http://localhost/Practica_Postres/mensajes.php`

## Consideraciones

El proyecto se ejecuta localmente mediante XAMPP, ya que necesita PHP y MySQL para procesar y almacenar los mensajes del formulario.

Aunque las páginas HTML y CSS pueden publicarse mediante GitHub Pages, esta plataforma no permite ejecutar PHP ni conectarse directamente a una base de datos MySQL. Por este motivo, las pruebas del formulario y del registro de mensajes se realizan desde el entorno local.

Para realizar las pruebas se recomienda utilizar datos ficticios.

---

**Autora:** Thalia Sagbay

**Práctica:** Programación y Plataformas Web

**Año:** 2026