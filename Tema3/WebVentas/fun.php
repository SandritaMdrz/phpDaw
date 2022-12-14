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


//funcion contar categorias
function contarCategoria($conn){
    $stmt = $conn->prepare("SELECT count(id_categoria) FROM categoria"); //contamos las id con un select
    $stmt->execute();//ejecutamos

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    //var_dump($result);
    return $result;
}

/*
metemos el resultado en un array asociativo
*/

function calcularCategoria($total){
    foreach($total as $row) {
        $cont = $row["count(id_categoria)"];
    }

        $cont++;
        //$cont es el valor de entrada, el cual tendra una longuitud de 3, que se pondra en la izquierda
        $cont=str_pad($cont,3,"0",STR_PAD_LEFT);//si no se pone nada por defecto es right
        $id="C-".$cont;//juntamos la letra con los numeros
        return $id;
}

function addCategoria($conn,$val,$nomb){
    $nuev = $conn->prepare("INSERT INTO CATEGORIA (id_categoria,nombre) VALUES(:id,:nomb);");     

    $nuev -> bindParam(':nomb',$nomb);
    $nuev -> bindParam(':id',$val);

    $nuev->execute();

    echo "Categoria <b> $nomb </b> creado con exito!";
}/*
Recibimos 3 parametros que son la conexion de la base de datos,
el nombe calculado en la funcion calcularCategoria y el nombe de dicha Categoria
en la funcion $nuev meteremos la sentencia SQL  a ejecutar, luego cambiaremos los
parametros por los que hemos recibido y ejecutamos la funcion, despues de aladirlo
enseñamos por pantalla que se añadio correctamente
*/

/* FUNCIONES COMALTAPRO */
    ?>