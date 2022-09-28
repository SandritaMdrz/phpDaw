<HTML>
<HEAD><TITLE>> EJ2B – Conversor Decimal a base n</TITLE></HEAD>
<BODY>
<?php
	
	$num="48";
	$base="6";
	$bin="";//creamos una cadena vacia
		
		echo "$num en base $base = ";//la imprimimos
		while ($num>=1){	
		$bin2=$num%$base;
		$num/=$base;
		$bin=$bin.$bin2;
		}
		echo(strrev($bin)."<br>");//invertimos la cadena
			
			
	
?>
</BODY>
</HTML>