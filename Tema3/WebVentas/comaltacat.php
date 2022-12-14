<HTML>
    <HEAD> <TITLE>Consulta</TITLE> </HEAD>
    
    <BODY>

    <?php
    require("fun.php");
?>
        <form name="formulario" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <fieldset style="width: 300px; padding:25px; margin:50px">
    
           <h1> Alta de Categorías</h1>
    
            Nombre <input type="text" name="nombre">

            <br><br>
            <input type="submit" name="Enviar" value="Dar de alta">
            <input type="reset" name="Borrar" value="Borrar">
        </fieldset>
        <a href="menu.html">Menú</a>
            </form>	
    
    
            <?php

if(!empty($_POST)){
    if($_POST["nombre"]!=""){
    $conn=conexion();
    $numeroCat=contarCategoria($conn);
    $val=calcularCategoria($numeroCat);

    
}
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
try {
    
    $nomb = $_POST["nombre"];
    
     
     addCategoria($conn,$val,$nomb);
    $conn = null;
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
}
?>

    </BODY>
    </HTML>
