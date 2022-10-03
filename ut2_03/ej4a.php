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
echo "<th>BinarioInverso</th>";
echo "</tr>";
	
while($pos<$long){
		$pos++;
		$bin[$pos]=decbin($pos);
}
	
	
	
	$inverso=array();
	$pos=1;
	$l=$long;
	while($pos<=$long){
		$inverso[$pos]=$bin[$l];
		
		echo "<tr>";
				echo "<td>$pos</td>";
				echo "<td>$bin[$pos]</td>";
				echo "<td>$inverso[$pos]</td>";
			echo "</tr>";
			$pos++;
		$l--;

	}
	
	echo "</table>";


?>
</BODY>
</HTML>