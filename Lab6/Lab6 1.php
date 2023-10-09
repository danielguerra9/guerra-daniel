<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase + Instancia de objeto </title>
</head>
<body>
    <?php
    class cliente{
        var $nombre;
        var $numero;
        var $peliculas_alquiladas;

        function construct($nombre,$numero){
            $this ->nombre = $nombre;
            $this ->numero = $numero;
            $this->$peliculas_alquiladas=array();
            }
            function destruct(){
                echo "<br>destruido: ".$this->nombre;
            }
            function dame_numero(){
                return $this->numero;
            }
    }
    //instanciamos un par de objetos cliente
    $cliente1 = new cliente("Pepe",1);
    $cliente2 = new cliente("Roberto",564);
     
    // mostramos el nombre de cada cliente creado
    echo "<br> El indentificador del cliente 1 es : " . $cliente1->dame_numero();
    echo "<br> El indentificador del cliente 2 es : " . $cliente2->dame_numero();
    
    ?>

</body>
</html>