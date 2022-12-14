<?php


function conexion(){
    $servername = "localhost";
$username = "root";
$password = "rootroot";
$dbname = "COMPRASWEB";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

return $conn;
}


//funcion contar productos
function contarProducto($conn){
    $stmt = $conn->prepare("SELECT count(id_producto) FROM producto"); //contamos las id con un select
    $stmt->execute();//ejecutamos

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    //var_dump($result);
    return $result;
}

/*
metemos el resultado en un array asociativo
*/

function calcularProducto($total){
    foreach($total as $row) {
        $cont = $row["count(id_producto)"];
    }

        $cont++;
        //$cont es el valor de entrada, el cual tendra una longuitud de 3, que se pondra en la izquierda
        $cont=str_pad($cont,3,"0",STR_PAD_LEFT);//si no se pone nada por defecto es right
        $id_producto="P-".$cont;//juntamos la letra con los numeros
        return $id_producto;
}

function addProducto($conn,$val,$nombre,$precio,$cate){
    
    $nuev = $conn->prepare("INSERT INTO producto (id_producto,nombre,precio,id_categoria) VALUES(:id,:nombre,:precio,:cate);");     

    $nuev -> bindParam(':id',$val);
    $nuev -> bindParam(':nombre',$nombre);
    $nuev -> bindParam(':precio',$precio);
    $nuev -> bindParam(':cate',$cate);

    $nuev->execute();

    echo "Producto <b> $nombre </b> creado con exito!";


}

//AÑADIR ALMACEN
function addAlmacen($conn,$loca){
    $nuev = $conn->prepare("INSERT INTO almacen (localidad) VALUES(:loca);");     

    $nuev -> bindParam(':loca',$loca);
    
    $nuev->execute();

    echo "Almacen en <b> $loca </b> creado con exito!";
}
    ?>