<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.3 </title>
</head>
<body>
<?php
// Crear un arreglo unidimensional de 20 elementos
$arreglo = array(5, 10, 2, 8, 15, 30, 7, 25, 12, 18, 3, 22, 14, 9, 11, 6, 20, 17, 4, 1);

// Inicializar variables para almacenar la posición y el valor del elemento mayor
$posicion_mayor = 0;


$valor_mayor = $arreglo[0];

// Recorrer el arreglo para encontrar el elemento mayor
for ($i = 1; $i < count($arreglo); $i++) {
    if ($arreglo[$i] > $valor_mayor) {
        $valor_mayor = $arreglo[$i];
        $posicion_mayor = $i;
    }
}

// Mostrar la posición y el valor del elemento mayor
echo "El elemento mayor se encuentra en la posición $posicion_mayor y tiene un valor de $valor_mayor.";
?>
</body>
</html>