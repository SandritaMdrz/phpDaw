<?php
echo "Inicio modelo"."<br>";

// Modelo contiene la lógica de la aplicación: clases y métodos que se comunican
// con la Base de Datos

function login($nomb,$contr) {
	global $conn;
	if(!empty($_POST["CustomerNumber"] and !empty($_POST["ContactLastName"]))){
		if (iniciarSesion($nomb,$contr)== true){
		$v=valor($nomb);
		 cookie($v);
		 echo "<h1>LOGIN CORRECTO</h1>";
	
		} else{
		 echo "Contraseña incorrecta";
		}
	  }else{
		 echo "Usuario y contraseña vacios!";  
	  } 
}

function cookie($v){
    setcookie( "usuario", $v, time() + (86400 * 30), "/");
   
}


function valor($CustomerNumber){
	global $conn;
    $nuev = $conn->prepare("SELECT CustomerNumber FROM customers where CustomerNumber=:CustomerNumber;");     

    
    $nuev -> bindParam(':CustomerNumber',$CustomerNumber);
    $nuev->execute();


    $result = $nuev->setFetchMode(PDO::FETCH_ASSOC);
    $result = $nuev->fetchAll();

    foreach($result as $arr){
        return $arr['CustomerNumber'];
    }

}

//iniciar sesion
function iniciarSesion($CustomerNumber,$ContactLastName){
	global $conn;
    $stmt = $conn->prepare("SELECT CustomerNumber FROM customers WHERE CustomerNumber = :CustomerNumber AND CONTACTLASTNAME = :ContactLastName");
        
    $stmt->bindParam(':CustomerNumber', $CustomerNumber);
    $stmt->bindParam(':ContactLastName', $ContactLastName);
    $stmt->execute();

    $CustomerNumber = $stmt->fetch(PDO::FETCH_ASSOC);
    return $CustomerNumber["CustomerNumber"];
}


echo "Fin modelo"."<br>";
?>