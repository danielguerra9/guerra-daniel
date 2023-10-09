<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

include("class_lib1.php");
echo MiClase:: constante. "<br>";
$clase = new MiClase();
$clase->mostrarConstante();
?>

</body>
</html>