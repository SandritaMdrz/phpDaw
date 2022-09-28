<HTML>
<HEAD><TITLE> EJ1-Conversion IP Decimal a Binario </TITLE></HEAD>
<BODY>
<?php

		$ip="192.168.206.220";
		
		$p1=strpos ($ip,".");
		$p2=strpos ($ip,".",($p1+1));
		$p3=strrpos ($ip,".",($p2));
		
		
		$punto1=substr($ip,0,$p1);
		$punto2=substr($ip,($p1)+1,($p2-$p1));
		$punto3=substr($ip,($p2)+1,($p3-$p2));
		$punto4=substr($ip,$p3+1,$p3);
		
		
		printf ("La ip $punto1.$punto2.$punto3.$punto4 en binario es:  %08b.%08b.%08b.%08b",$punto1,$punto2,$punto3,$punto4);
?>
</BODY>
</HTML>
