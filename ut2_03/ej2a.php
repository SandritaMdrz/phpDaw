<HTML>
<HEAD><TITLE> EJ2a</TITLE>


<style>
table, tr, th, td{
	
border: 1px solid #000000;
text-align: center;
border-collapse: collapse;

}</style>
</HEAD>

<BODY>

<?php

$impar = array();
$long=20;
$pos=0;
$n=0;
$sumai=0;
$sumap=0;

echo "<table>";
echo "<tr>";
echo "<th>Indice</th>";
echo "<th>Valor</th>";
echo "<th>Suma</th>";
echo "</tr>";
	
while($pos<$long){
		if ($n%2!=0) {
			$impar[$pos]=$n;
			$sumai=$sumai+$n;
			$pos++;

			echo "<tr>";
				echo "<td>$pos</td>";
				echo "<td>$n</td>";
				echo "<td>$sumai</td>";
			echo "</tr>";
		}else{
			$sumap=$sumap+$n;

		}

		$n++;	
}
	echo "</table>";
	$mediap=0;
	$mediai=0;
	$mediai=$sumai/$long;
	$mediap=$sumap/$long;

	echo"La media de impares es: $mediai <br>";
	echo"La media de pares es:  $mediap";


?>
</BODY>
</HTML>
