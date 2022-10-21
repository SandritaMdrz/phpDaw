<HTML>
<HEAD> <TITLE>Conversor</TITLE> </HEAD>

<BODY>
	<form name="formulario" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">


		<label style="font-size: 40px">CONVERSOR NUMERICO</label><br><br><br>

        Numero decimal: <input type="text" name="o1"id="o1"/><br><br><br>

        Convertir a: <br>
        <input type="radio" name="check" value="binario">Binario<br>
        <input type="radio" name="check" value="octal">Octal<br>
        <input type="radio" name="check" value="hexa">Hexadecimal<br>
        <input type="radio" name="check" value="todos">Todos Sistemas<br><br>


        <input type="submit" name="Enviar" value="Enviar">
        <input type="reset" name="Borrar" value="Borrar">

		</form>	


<?php
 
function binario(){
		$num=$_POST['o1'];
		$bin=decbin($num);
		return $bin;	
}

function octal(){
	$num=$_POST['o1'];
		$oc=decoct($num);
		return $oc;

}

function hexa(){
	$num=$_POST['o1'];
		$hx=dechex($num);
		return $hx;
}
function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }


	
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$dec = test_input($_POST['o1']);

	if($_POST['o1']){
		echo "Numero decimal: ".$dec."<br>" ;
	}

if($_POST['check']=="binario"){
		
	echo "En binario es : ".binario()."<br>";
}
if($_POST['check']=="octal"){
echo "En Octal es ".octal();}

if($_POST['check']=="hexa"){
echo "En hexadecimal es ".hexa();}

if ($_POST['check']=="todos") {
	echo "En binario es ".binario()."<br>";
	echo "En Octal es ".octal()."<br>";
	echo "En hexadecimal es ".hexa()."<br>";
}
}
?>
</BODY>
</HTML>