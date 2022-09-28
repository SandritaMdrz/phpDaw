<HTML>
<HEAD><TITLE> EJ1-Conversion IP Decimal a Binario </TITLE></HEAD>
<BODY>
<?php

		$ip="192.168.16.100/16";
		$ip2="192.168.16.100/21";
		$ip3="192.168.16.100/8";
		
		//IP
		
		echo("IP $ip")."<br>";
		
		$barra=strpos($ip,"/",0); //en la ip, buscamos la barra empezando por la primera posicion(0)

		//Mostramos los caracteres de la mascara, que se encuentran despues de la barra
		$m1=substr($ip,($barra)+1,($barra));
		
		echo "Máscara ","$m1"."<br>"; //imprimimos la mascara
		
		$punto1=strpos($ip,".",0);//dividimos la ip
		$punto2=strpos($ip,".",($punto1+1));
		$punto3=strpos($ip,".",($punto2+1));
		
		//pasamos cada division a binario
		$p1=decbin(substr($ip,0,$punto1));
		$p2=decbin(substr($ip,($punto1)+1,($punto2-$punto1)));
		$p3=decbin(substr($ip,($punto2)+1,($punto3-$punto2)));
		$p4=decbin(substr($ip,($punto3)+1,($punto3)));
		
		//Obligamos que tenga 8 bits
		$p1=substr("00000000",0,8 - strlen($p1)) .$p1;
		$p2=substr("00000000",0,8 - strlen($p2)) .$p2;
		$p3=substr("00000000",0,8 - strlen($p3)) .$p3;
		$p4=substr("00000000",0,8 - strlen($p4)) .$p4;

		$p = $p1."".$p2."".$p3."".$p4;
		
		
		//guardamos la mascara en una variable
		$v1=$m1;
		$dr=substr($p,0,$v1); //escogemos los valores que suman 16 bits
		
		$direccion=str_pad($dr,32,'0',STR_PAD_RIGHT);//autocompleta desde la derecha con 0
		$direccion2=str_pad($dr,32,'1',STR_PAD_RIGHT);
		
		
		$p2 = $p1."".$p2."".$p3."".$p4;
		echo "Dirección red: $direccion ","<br>";
		echo "Dirección de broadcast: $direccion2 ","<br>";
		
		//dirred 
		$dirred=bindec(substr($direccion,0,8)).".".bindec(substr($direccion,8,8)).".".bindec(substr($direccion,16,8)).".".bindec(substr($direccion,24,8));
echo "Direccion Red:".$dirred."<BR>";
	
		$dirbroad=bindec(substr($direccion2,0,8)).".".bindec(substr($direccion2,8,8)).".".bindec(substr($direccion2,16,8)).".".bindec(substr($direccion2,24,8));
echo "Direccion Broad:".$dirred."<BR>";


?>
</BODY>
</HTML>