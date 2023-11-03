<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 13 </title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>
    <h1> Recuperar  valor de una Cookies </h1>
    <?php 

    if (isset($_COOKIE["user"]))
        echo "<h2> Bienvenido ".$_COOKIE["user"]."!</h2><br/>;
      
      
    else{
    echo "<H2> Bienvenido invitado!</h2><br/>";
    
    ?>

    <A href ="Lab13 1.php">...Regresar</A> &nbsp;
    <A href="Lab13 4.php">Continuar...</A>
</body>
</html>