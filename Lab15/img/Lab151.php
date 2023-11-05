<HTML LANG="es">
<HEAD>
  <TITLE>Ejemplo DataTable jquery</TITLE>
  <LINK REL="stylesheet" TYPE="text/css" HREF="jquery.dataTables.min.css">
  <script type="text/javascript" language="javascript" src="jquery-3.1.1.js"></script>
  <script type="text/javascripy" language ="javascript" src="jquery.dataTablas.min.js"></script>

</HEAD>
<BODY>
<H1>Consulta de noticias</H1>
 <script type="text/javascript">
   $(document).ready(function()
   {
    $('#grid').DataTable({
      "lengthMenu":[5,10,20,50],
       "order":[[0,"asc"]],
       "languaje":{
          "lengthMenu":"Mostrar_MENU_registros por pagina",
          "zeroRecords":"No existen resultado en su busqueda",
          "info": "Mostrando pagina_PAGE_de_PAGES_",
          "infoEmpty": "No hay registrados disponibles ",
          "infoFiltered": "(Buscando entre _MAX_ resgistros en total)",
          "search": "Buscar:",
          "paginate": {
                       "first":"Primero",
                       "last": "Ultimo",
                       "next":"siguiente",
                       "previous":"Anterior"
                      },          
       }
    });
     $("*").css("front-family", "arial").css('font-size', '12px');
   });

 </script>
<?php
require_once("class/noticias.php");

$obj_noticia = new noticia();
$noticias = $obj_noticia->consultar_noticias();

$nfilas=count($noticias);

if ($nfilas > 0){
  //print ("<table>\n");
  print("<TABLE id='grid' class='display' cellspacing='0'>\n");
  print("<THEAD>");
  print ("<tr>\n");
  print ("<th>Titulo</th>\n");
  print ("<th>Texto</th>\n");
  print ("<th>Categoria</th>\n");
  print ("<th>Fecha</th>\n");
  print ("<th>Imagen</th>\n");
  print ("</tr>\n");
  print("</THEAD");
      for($i =0; $i<$nfilas; $i++){
        print("</THEAD");
        print("<TBODY>");
         
     for($i=0; $i<$nfilas; $i++){
      print("</tr>\n");
      print("</TBODY>");
    }
     print("</table>\n");
      }
      
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