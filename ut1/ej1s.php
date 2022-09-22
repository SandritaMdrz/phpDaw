<HTML>
<HEAD><TITLE> EJ1-Conversion IP Decimal a Binario </TITLE></HEAD>
<BODY>
<?php

		$ip="192.168.206.220";
		
		$p1=strpos ($ip,".",0);
		$p2=strpos ($ip,".",($p1+1));
		$p3=strpos ($ip,".",($p2+1));
		
		printf ("La ip $ip en binario es: %08b.%08b.%08b.%08b<br>",
		(substr($ip,0,$p1)),
		(substr($ip,($p1)+1,($p2-$p1))),
		(substr($ip,($p2)+1,($p3-$p2))),
		(substr($ip,($p3)+1,($p3))));

?>
</BODY>
</HTML>
