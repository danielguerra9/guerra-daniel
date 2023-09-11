<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.4 </title>
</head>
<body>
    <h1> Arreglos de numero pares </h1>
    <form >

     ingrese primer numero <input type = "text" name ="num1">
     ingrese segundo  numero <input type ="text" name ="num2">
<input type ="submit" value ="Enviar">

</form>
<?php
$num1 =$_POST['num1'];
$num2 =$_POST['num2'];
 
    for ($i =$num1;$i<= $num2;$i++){
        if (($i%2)==0){
            $suma = $suma+1;
            echo "$i<br>";

        }
    }echo "Pares:$suma";
?>
</body>
</html>