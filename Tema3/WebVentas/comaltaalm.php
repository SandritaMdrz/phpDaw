<HTML>
    <HEAD> <TITLE>Consulta</TITLE> </HEAD>
    
    <BODY>

    <?php
    require ("funciones.php");
?>
        <form name="formulario" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <fieldset style="width: 300px; padding:25px; margin:50px">
    
           <h1> Alta de Almacenes</h1>
    
            Localidad <input type="text" name="localidad">
            <BR><br>


            <br><br>
            <input type="submit" name="Enviar" value="Dar de alta">
            <input type="reset" name="Borrar" value="Borrar">
        </fieldset>

        <a href="menu.html">Menú</a>
            </form>	
    
    
            <?php

if(!empty($_POST)){
    if($_POST["localidad"]!=""){
        $conn=conexion();
       
    


    
}
}

//añadimos el almacen
if($_SERVER["REQUEST_METHOD"] == "POST"){
try {
    $loca = $_POST["localidad"];
    addAlmacen($conn,$loca);
    


}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
}
?>

    </BODY>
    </HTML>
