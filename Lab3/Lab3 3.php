<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 3.3</title>
</head>
<body>
    <?PHP
    if(array_key_exists('enviar',$_POST)){
        if ($_REQUEST['Apellido'] != "")
        {
            echo "El apellido ingresado es : $_REQUEST[Apellido]";
        }
        else
        {
            echo "Favor coloque el apellido ";
        }
    
    echo "<br>";
    if ($_REQUEST['Nombre'] != "")
    {
        echo "El nombre ingresado es : $_REQUEST[Nombre]";
    }
    else
    {
        echo "Favor coloque el nombre ";
    }
}
    else
        {
        ?>
        <FORM ACTION = "Lab3 3.php" METHOD = "POST">
            Nombre : <INPUT TYPE = "TEXT" NAME ="Nombre"><br>
            Apellido :<INPUT TYPE ="TEXT" NAME ="Apellido"><br>
            <INPUT TYPE = "SUBMIT"  NAME="enviar" VALUE ="Enviar datos">
    </FORM>
    <?PHP
    }
    ?>



</body>
</html>