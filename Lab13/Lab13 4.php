<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 13</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
<body>
    <h1> Eliminar Cookies</h1>
    <?php
    if(isset($_COOKIE["user"])){
   setcookie("user","",time()+60*5);
   echo "<h3> La cookie 'user' ha sido eliminada sastifactoriamente </h3><br/>";
    }
    else{
       echo "<H3> La cookie 'user' no existe </H3><br/>";
    }
    if(isset($_COOKIE["contador"])){
        setcookie("contador","",time()+365*24*60*60);
        echo "<h3>La cookie 'contador' ha sido eliminado sastifactoriamente </h3><br/>";
    }
    else{
        echo "<h3> La cookie 'contador ' no existe </h3><br/>";
    }
   ?> 
    <a href="Lab13 1.php">Volver al contador de visitas</a>&nbsp;
    <a href="Lab13 2.php"> Volver al saludo a usuario</a>
</body>
</html>