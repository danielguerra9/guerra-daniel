<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" LANG="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 12</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <h1>Manejo de sesiones </h1>
    <h2>Paso 1: se crea la variable de sesion y se almacena </h2>
    <?php
       $var = "Ejemplo Sesiones ";
       $_SESSION['var'] = $var;
       print("<p>Valor de la variable de sesion: $var</p>\n");
    ?>
    <a href="Lab12 2.php">Paso 2 </a>
</body>
</html>