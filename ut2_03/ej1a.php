<HTML>
<HEAD><TITLE> EJ1a</TITLE>


<style>
table, tr, th, td{
	
border: 1px solid #000000;
text-align: center;
border-collapse: collapse;

}</style>
</HEAD>

<BODY>

<?php
	
$pos = 0;
$impar = array();
$long=20;
$sumai=0;
$n=0;
$sumap=0;
echo "<table>";
echo "<td>Indice</td>";
echo "<td>Valor</td>";
echo "<td>Suma</td>";

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

	
			
	
		
	
?>
</BODY>
</HTML>
