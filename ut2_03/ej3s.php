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


$bin=array();
$pos=0;
$long=20;
$n=0;
echo "<table>";
echo "<tr>";
echo "<th>Indice</th>";
echo "<th>Binario</th>";
echo "<th>Octal</th>";
echo "</tr>";
	
while($pos<$long){
		$pos++;
		$bin[$pos]=$n;
		$binario=decbin($pos);
		$octal=decoct($pos);
		
	echo "<tr>";
				echo "<td>$pos</td>";
				echo "<td>$binario</td>";
				echo "<td>$octal</td>";
			echo "</tr>";	
	



}

	
	echo "</table>";
	

?>
</BODY>
</HTML>
