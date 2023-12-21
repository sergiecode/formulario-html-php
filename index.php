<?php
// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Recibir los datos del formulario
    $nombre = htmlspecialchars($_GET["nombre"]);
    $apellido = htmlspecialchars($_GET["apellido"]);
    $situacionLaboral = htmlspecialchars($_GET["situacion-laboral"]);
    $tecnologias = isset($_GET["tecnologias"]) ? $_GET["tecnologias"] : [];

    // Mostrar los resultados
    echo "<h2>Resultados del formulario</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Apellido:</strong> $apellido</p>";
    echo "<p><strong>Situación Laboral:</strong> $situacionLaboral</p>";

    if (!empty($tecnologias)) {
        $tecnologiasSeleccionadas = implode(", ", $tecnologias);
        echo "<p><strong>Tecnologías:</strong> $tecnologiasSeleccionadas</p>";
    } else {
        echo "<p><strong>Tecnologías:</strong> Ninguna seleccionada</p>";
    }
}
?>
