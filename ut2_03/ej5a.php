<HTML>
<HEAD><TITLE> EJ3a</TITLE>


<style>
table, tr, th, td{
	
border: 1px solid #000000;
text-align: center;
border-collapse: collapse;

}</style>
</HEAD>

<BODY>

<?php

$m1=array("Base de datos", "Entornos desarrollo","Programacion");
$m2=array("Sistemas Informáticos", "FOL","Mecanizado");
$m3=array("Desarrollo Web ES", "Desarrollo Web EC","Despliegue","Desarrollo Interfaces", "Inglés");
$arr=array();
//forma 1

	$a1=count($m1);
	$a2=count($m2);
	$a3=count($m3);

	for($i=0;$i<$a1;$i++){
		$arr[$i]=$m1[$i];
	}

	for($i=0;$i<$a2;$i++){
		$arr[($i+$a1)]=$m2[$i];
	}
	for($i=0;$i<$a3;$i++){
		$arr[($i+$a1+$a2)]=$m3[$i];
	}

	$todos=count($arr);
	echo "Primera forma";
	for ($i=0; $i < $todos ;$i++){
		
		var_dump($arr[$i]);

		}


	



	//forma 2
		echo "Segunda forma";
	$t2 = array_merge($m1, $m2, $m3);
	var_dump($t2);


	
	//forma 3
	echo "Tercera forma";
	foreach ($m2 as $value) {
		array_push($m1, $value);//cogemos los valores del arr2 y los metemos en el arr1
	}
	foreach ($m3 as $value) {
		array_push($m1, $value); //cogemos los valores del arr3 y los metemos en el arr1
	}


	var_dump($m1);
	

?>
</BODY>
</HTML>
