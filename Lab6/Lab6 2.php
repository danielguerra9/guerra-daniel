<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("class_lib.php");
    // instanciamos un par de objetos cliente 
    $cliente1 = new cliente("Pepe",);
    $cliente2 = new cliente ("Roberto",564);

    //mostramos el numero de cada cliente creado
  echo "<br>El identificador del cliente 1 es: ". $cliente1->dame_numero();
  echo "<br>El identificador del cliente 2 es: ". $cliente2->dame_numero();

   ?> 
</body>
</html>