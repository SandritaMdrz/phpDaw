<HTML>
<HEAD> <TITLE>Calculadora</TITLE> </HEAD>

<BODY>
	<h1>CALCULADORA</h1>
<?php
 

 	//suma
 	if($_POST["check"]=="suma"){

 	$suma= $_POST['o1']+$_POST['o2'];
 	
 		echo "El resultado de la suma es ".$suma;
 	}

 	//resta

 	if($_POST["check"]=="resta"){

 	$suma= $_POST['o1']-$_POST['o2'];
 	
 		echo "El resultado de la resta es ".$suma;
 	}

 	//multiplicacion

 	if($_POST["check"]=="producto"){

 	$suma= $_POST['o1']*$_POST['o2'];
 	
 		return $suma;
 	}

 	//division

 	if($_POST["check"]=="division"){

 	$suma= $_POST['o1']/$_POST['o2'];
 	
 		echo "El resultado de la division es ".$suma;
 	}








?>
</BODY>
</HTML>