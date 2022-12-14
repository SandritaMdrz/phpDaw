<HTML>
    <HEAD> <TITLE>Consulta</TITLE> </HEAD>
    
    <BODY>

    <?php
    require ("funciones.php");
?>
        <form name="formulario" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <fieldset style="width: 300px; padding:25px; margin:50px">
    
           <h1> Alta de Productos</h1>
    
            Nombre <input type="text" name="nombre">
            <BR><br>
            Precio   <input type="text" name="precio">
            <br><br>
            Categoria
            
            <?php 
              
              $conn = conexion();


            $stmt= $conn -> prepare("SELECT id_categoria, nombre from categoria;"); 
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt -> fetchAll();
            //var_dump($result);
            echo "<select name='cate' id='cate'>";
            foreach ($result as $arr ) {
                echo "<option value=".$arr["id_categoria"].">".$arr["nombre"]."</option>";

            }
            echo "</select><br><br>";
            $conn=null;
            
            
            ?>



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
        $numPro=contarProducto($conn);
        $val=calcularProducto($numPro);
    


    
}
}

//añadimos el preducto
if($_SERVER["REQUEST_METHOD"] == "POST"){
try {
    
   
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $cate = $_POST["cate"];
    addProducto($conn,$val,$nombre,$precio,$cate);


}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
}
?>

    </BODY>
    </HTML>
