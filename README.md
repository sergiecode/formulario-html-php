
# Formulario HTML y Procesamiento en PHP

Este repositorio contiene un formulario HTML simple y un script PHP para procesar los datos enviados a través del formulario. El formulario recopila información básica, como nombre, apellido, situación laboral y tecnologías de interés.

## Contenido del Repositorio

-   **index.html**: Archivo HTML que contiene el formulario.
-   **procesar_formulario.php**: Script PHP que procesa los datos enviados desde el formulario y muestra los resultados.

## Uso

1.  Abre el archivo `index.html` en un navegador web.
2.  Completa el formulario con la información requerida.
3.  Haz clic en el botón "Enviar".
4.  Los datos ingresados se enviarán a `procesar_formulario.php`, que mostrará los resultados.

## Detalles del Formulario

-   **Nombre y Apellido**: Campos de texto para ingresar el nombre y apellido.
-   **Situación Laboral**: Botones de radio para seleccionar la situación laboral (Empleado, Desempleado, Estudiante).
-   **Tecnologías**: Casillas de verificación para seleccionar las tecnologías de interés (PHP, HTML, CSS, JavaScript).

## Procesamiento en PHP

El script PHP (`procesar_formulario.php`) verifica si se envió el formulario mediante el método GET. Luego, recopila y muestra los datos proporcionados, incluyendo nombre, apellido, situación laboral y tecnologías seleccionadas.

Si no se selecciona ninguna tecnología, se mostrará un mensaje indicando que ninguna tecnología ha sido seleccionada.

## Ejecución Local

Para probar localmente, asegúrate de tener un servidor web configurado. Puedes utilizar herramientas como XAMPP o ejecutar un servidor local en la terminal:

```
php -S localhost:8080
```

Luego, accede al formulario en tu navegador: http://localhost:8080/index.html
