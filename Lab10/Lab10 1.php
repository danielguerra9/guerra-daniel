
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 10.1</title>
    <link REL ="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <?php
    require_once("class/votos.php");
    if(array_key_exists('enviar',$_POST))
    {
        print ("<h1>Encuesta. Voto registrado </h1>\n");

        $obj_votos = new votos();
        $result_votos = $obj_votos->listar_votos();

        foreach ($result_votos as $result_votos){
            $votos1 = $result_votos['votos1'];
            $votos2 = $result_votos['votos2'];
        }

        $voto = $_REQUEST['voto'];
        if ($voto=="si")
        $votos1 = $votos1 +1;
          else if($voto=="no")
          $votos2 = $votos2 +1;

          $obj_votos = new votos();
          $result = $obj_votos-> actualizar_votos($votos1, $votos2);

          if ($result){
            print ("<P> Su voto ha sido registrado.Gracias por participar</P>\n");
            print("<A HREF='Lab10 1.php'>Ver resultado</A>\n");

          }
          else {
            print("A HREF='Lab10 1.php'>Error al actualizar su voto </A>\n");

          }
        }
 


    ?>


    <H1> Encuesta</H1>
    <p>¿Cree ud.que el precio del vivienda seguira subiendo al ritmo actual?</p>
    <form action="Lab10 1.php" method="POST">
     <input type="radio" name="voto" value="si" checked>si<br>
     <input type="radio" name="voto" value="no">No <br><br>
     <input type="submit" name="enviar" value="votar">
    </form>
     <A href="Lab10 1.php">Ver resultados</A>

    


</body>
</html>