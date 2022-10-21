<HTML>
<HEAD> <TITLE>Calculadora</TITLE> </HEAD>

<BODY>
	<form name="formulario" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">


		<label style="font-size: 40px">CONVERSOR BINARIO</label><br><br><br>

        Numero decimal: <input type="number" name="num" value="num"/><br><br><br>

       
        <input type="submit" name="Enviar" value="Enviar">
        <input type="reset" name="Borrar" value="Borrar">

		</form>	

 
 	<?php
        function binario($num){

            $numero = decbin($num);
            return $numero;
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
    
        
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
       	$dec = test_input($_POST['num']);
        $bin = binario($dec);
            echo ("El numero en sistema decimal es: <input type='text' name='num' value=$dec><br>");
            echo ("El numero en binario es: <input type='text' name='num' value=$bin><br>");
        }
    


?>
<a href="binario.html">Volver...</a>
</BODY>
</HTML>