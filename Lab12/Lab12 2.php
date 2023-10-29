<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 12 </title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <h1> Manejo de sesiones </h1>
    <h2> Paso 2: se accede a la variable de sesiones almacenado y se destruye </h2>
    <?php
    if(isset($_SESSION['var'])){
        $var = $_SESSION['var'];
        print ("<p> Valor de la variable de sesion :$var </p>\n");
        unset ($_SESSION['var']);
        print ("<a href='Lab12 3.php'>Paso 3 </p>\n");
    }else {
        print("Sesion no iniciada , ir al <A href='Lab12 1.php'> Paso 1 </a> Para iniciar la sesion");
    }
    ?>
</body>
</html>