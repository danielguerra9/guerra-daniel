<?php
if(array_key_exists('enviar', $_POST)){
    $expire = time() + 60*5;
    setcookie("user", $_REQUEST['visitante'], $expire);
    header("Refresh: 0");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 13 </title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <h1> Creacion de cookies</h1>
    <h2> La cookies "User" tendra solo 5 minutos de duracion</h2>
<?php
if(isset($_COOKIE["user"])){
    print("<br/>Hola <b>" .$_COOKIE["user"]."</br> Gracias por visitar nuestro sitio web <br/>");
}else {
}
?>

<form name="formcookie" method="post" action="Lab14 2.php">
<br/>Hola , primera vez que te vemos por nuestro sitio web ¿Como te llmas?
<input type="text" name="visitante">
<input name="enviar" value="Gracias por itentificate" type="submit" /><br/>
<?php

?> 
<br/><a href="Lab13 3.php">Continuar</a>
</form>

</body>
</html>