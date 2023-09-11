<?php

// Supongamos que tienes el porcentaje de ventas en la variable $porcentajeVentas
$porcentajeVentas = 65; // Cambia este valor según tus necesidades

if ($porcentajeVentas >= 80) {
    // Si las ventas superan el 80%, muestra la carita verde
    echo '<feliz.png" alt="Carita verde">';
} elseif ($porcentajeVentas >= 50 && $porcentajeVentas < 80) {
    // Si las ventas están entre 50% y 79%, muestra la carita amarilla
    echo '<img src="carita_amarilla.png" alt="Carita amarilla">';
} else {
    // Si las ventas son menores del 50%, muestra la carita roja
    echo '<img src="carita_roja.png" alt="Carita roja">';
}

?>
