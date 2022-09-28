<HTML>
<HEAD><TITLE> EJ1-Conversion IP Decimal a Binario </TITLE></HEAD>
<BODY>

<?php


  $ip = "192.168.206.220";
		
		//cortamos por puntos
		$punto1=strpos ($ip,".",0);
		$punto2=strpos ($ip,".",($punto1+1));
		$punto3=strpos ($ip,".",($punto2+1));
		
		
		$p1= decbin(substr($ip,0,$punto1));
		$p2=decbin(substr($ip,($punto1)+1,($punto2-$punto1)));
		$p3=decbin(substr($ip,($punto2)+1,($punto3-$punto2)));
		$p4=decbin(substr($ip,($punto3)+1,($punto3)));
		
		//Obligamos que tenga 8 bits
		$p1=substr("00000000",0,8 - strlen($p1)) .$p1;
		$p2=substr("00000000",0,8 - strlen($p2)) .$p2;
		$p3=substr("00000000",0,8 - strlen($p3)) .$p3;
		$p4=substr("00000000",0,8 - strlen($p4)) .$p4;

		$p = $p1.".".$p2.".".$p3.".".$p4;
	
		echo("El codigo $ip en binario es: ".$p);

?>
</BODY>
</HTML>