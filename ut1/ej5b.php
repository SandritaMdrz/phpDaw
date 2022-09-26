<HTML>
<HEAD><TITLE> EJ4B – Tabla Multiplicar</TITLE></HEAD>
<BODY>
<?php
$num="8";

echo "<table>";

	for($i=1;$i<=10;$i++){
		$res=$num*$i;
		echo "<tr>";
		echo "<th>$num x $i</th>";
		echo "<td>$res</td>";
		echo "</tr>";	
}

echo "</table>";
	


?>
</BODY>
</HTML>
