<HTML>
<HEAD><TITLE> EJ1B – Conversor decimal a binario</TITLE></HEAD>
<BODY>
<?php
	
	$num="123";
		$bin="";//creamos una cadena vacia
		
		echo "$num en binario es = ";//la imprimimos
		while ($num>=1){
		$bin2=$num%2;
		$num/=2;
		$bin=$bin.$bin2;
		}
		echo(strrev($bin)."<br>");//invertimos la cadena
			
			
	
?>
</BODY>
</HTML>
