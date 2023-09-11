<?php

$fact =1;
$num = $_POST['numero'];
 do{
    $fact =$fact*$num;
    $num = $num-1;
 }while($num > 0);
 echo "El factorial es : $fact";

?>