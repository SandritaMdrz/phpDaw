<?php
echo "Inicio controller"."<br>";
//Llamada al modelo -- Intermediario entre vista y modelo !!!
require_once("models/pedidos_model.php");



if($_SERVER["REQUEST_METHOD"] == "POST"){
$nomb = $_POST["CustomerNumber"];
$contr = $_POST["ContactLastName"];

$login=login($nomb,$contr);
// if(!empty($_POST["CustomerNumber"] and !empty($_POST["ContactLastName"]))){
//     if (iniciarSesion($nomb,$contr)== true){
//     $v=valor($conn,$nomb);
//      cookie($v);
//         echo "<h1>LOGIN CORRECTO</h1>";
//     } else{
//      echo "Contraseña incorrecta";
//     }
//   }else{
//      echo "Usuario y contraseña vacios!";  
//   } 
}



//Llamada a la vista -- Intermediario entre vista y modelo !!!
require_once("views/pedidos_view.phtml");
echo "Fin controller"."<br>";
?>