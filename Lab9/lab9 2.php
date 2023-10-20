<HTML LANG="es">
<HEAD>
  <TITLE>Laboratorio 9.1</TITLE>
  <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</HEAD>
<BODY>
<H1>Consulta de noticias</H1>
<form name="FormFiltro" method="post" action="lab9 2.php">
  <br/>
  Filtrar por :<select name="campos">
    <option value="text" selected>Descripcion
    <option value="titulo">Titulo
      <option value="categoria">Categoria
  </select>
    con el valor 
    <input type="text" name="valor">
    <input name="ConsultarFiltro" value="Filtrar Datos" type="submit"/>
    <input name="ConsultarTodos" value="ver todos" type="submit"/>
</form>
<?php
require_once("class/noticias.php");

$obj_noticia = new noticia();
$noticias = $obj_noticia->consultar_noticias();
 if (array_key_exists ('ConsultarTodos',$_POST)){
  $obj_noticia =new  noticia();
  $noticias_new =$obj_noticia->consultar_noticias();

 }

 if (array_key_exists('ConsultarFiltro',$_POST)){
  $obj_noticia = new noticia();
  $noticias = $obj_noticia->consultar_noticias_filtro($_REQUEST['campos'],$_REQUEST['valor']);
 }
$nfilas=count($noticias);

if ($nfilas > 0){
  print ("<table>\n");
  print ("<tr>\n");
  print ("<th>Titulo</th>\n");
  print ("<th>Texto</th>\n");
  print ("<th>Categoria</th>\n");
  print ("<th>Fecha</th>\n");
  print ("<th>Imagen</th>\n");
  print ("</tr>\n");

  foreach ($noticias as $resultado){
    print ("<tr>\n"); 
    print ("<td>" . $resultado['titulo'] . "</td>\n");
    print ("<td>" . $resultado['text'] . "</td>\n");
    print ("<td>" . $resultado['categoria'] . "</td>\n");
    print ("<td>" . date("j/n/Y",strtotime($resultado['fecha'])) . "</td>\n");

    if ($resultado['imagen'] != ""){
      print ("<td><a target='_blank' href='img/" . $resultado['imagen']  . 
      "'><img border='0' src='img/iconotexto.gif'></a></td>\n");
    }
    else{       
      print ("<td>&nbsp;</td>\n");
    }
    print ("</tr>\n");
  }
  print ("</table>\n");
}
else{
  print ("No hay noticias disponibles");
}
?>
</BODY>
</HTML>