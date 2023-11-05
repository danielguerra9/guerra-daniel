<?php

session_start();
 if (isset($_REQUEST['usuario']) && isset($_REQUEST['clave'])) {
   $usuario = $_REQUEST['usuario'];
   $clave =$_REQUEST['clave'];

   $salt = substr($usuario,0,2);
   $clave_crypt = crypt($clave,$salt);

   require_once("class/usuarios.php");

   $obj_usuarios = new usuarios();
   $usuario_validado = $obj_usuarios->validar_usuarios($usuario,$clave_crypt);

   foreach ($usuario_validado as $array_resp){
      foreach($array_resp as $value){
        $nfilas = $value;
      }
   }
    if($nfilas>0){
      $usuario_validado = $usuario;
      $_SESSION["usuario_validado"] = $usuario_validado;
    }
 }
?>

<!DOCTYPE HTML PUBLIC "-//W3C/DTD HTML 4.0//EN"
  "http://www.w3.org/TR/html4/strict.dtd">
 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 14 - login al sitio de noticias</title>
    <link rel="stylesheet" type="tex/css" href="css/estilo.css">
</head>
<body>
    <?php
     // Secion iniciada
     if(isset($_SESSION["usuario_validado"]))
     {
    ?>
    <h1> Gestion de noticias</h1>
    <hr>
    <ul> 
        <li><a href="Lab14 2.php">Listar todas las noticias</a> </li>
        <li><a href="Lab14 3.php"> Listar noticias por partes </a></li>
        <li><a href="Lab14 4.php"> Buscar noticia</a></li>
    </ul>
    <hr>
    <p>[ <a href='logout.php'>Desconectar</a>]</p>
    <?php
     }
     // Intento de entrada fallido
     else if (isset($usuario))
     {
        print("<br><br\n>");
        print("<p aling = 'center '> Acceso no autorizado</p>\n");
        print("<p aling = 'center'> [<a= href='login.php'>Conectar</a ] </p>\n");
     }
     // Sesion no iniciada
     else{
        print("<br><br>\n");
        print("<P class = 'parrafocentrado'>Esta zona el acceso restringido.<br>".
          "Para entrar debe indentificarse</P>\n");
          print("<form class ='entrada' NAME ='login' ACTION='login.php' METHOD = 'POST'>\n");

          print("<P><LABEL CLASS = 'etiqueta-entrada '>Usuario:</LABEL>\n");
          print("    <INPUT TYPE='TEXT' NAME ='usuario'  SIZE='15'></P>\n");
          print("<P><LABEL CLASS ='etiqueta-entrada'>Clave:</LABEL>\n");
          print("    <INPUT TYPE='PASSWORD' NAME ='clave' SIZE= '15'></P>\n");

          print("<P><INPUT TYPE ='SUBMIT' VALUE='entrar'></P>\n");

          print("</FORM>\n");
          print("<P CLASS ='parrafocentrado'> NOTA: Si no dispone de indentificacion o tiene problema ".
          "para entrar<BR>Pongase en contacto con el ".
           "<A HREF='MAILTO:webmaster@localhost'> administrador </a> del sitio</P>\n");

     }
    ?>
</body>
</html>
