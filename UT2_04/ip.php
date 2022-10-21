<HTML>
<HEAD> <TITLE></TITLE> </HEAD>

<BODY>
	<form name="formulario" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">


		<label style="font-size: 40px">CONVERSOR NUMERICO</label><br><br><br>

        IP notacion decimal: <input type="text" name="ip"id="ip"/><br><br><br>

      
        <input type="submit" name="Enviar" value="Notación Binaria">
        <input type="reset" name="Borrar" value="Borrar">

		</form>	


        
 <!-- codigo php -->
 	<?php
       
       function binario(){
       	$ip=$_POST["ip"];
        $p1=strpos($ip,".",0); //primera parte ip
        $p2=strpos($ip,".",($p1+1)); //segunda parte ip
        $p3=strpos($ip,".",($p2+1)); //tercera parte ip

      
       $pa1=substr($ip,0,$p1); //1º parte
       if($pa1>=1 && $pa1<=255){
       }else {
        echo "El primer octeto esta mal<br>";
       }

       $pa2=substr($ip,($p1)+1,($p2-$p1));//2º parte
       if($pa2>=1 && $pa2<=255){        
       }else{
        echo "El segunda octeto esta mal<br>";
       }

       $pa3=substr($ip,($p2)+1,($p3-$p2));//3º parte
       if($pa3>=1 && $pa3<=255){        
    }else{
     echo "El tercer octeto esta mal <br>";
    }

       $pa4=substr($ip,($p3)+1,($p3));//4º parte
       if($pa4>=1 && $pa4<=255){        
    }else{
     echo "El cuarto octeto esta mal <br>";
    }
       //8 bits
       $pa1=substr("00000000",0,8 - strlen($pa1)) .$pa1;
		$pa2=substr("00000000",0,8 - strlen($pa2)) .$pa2;
		$pa3=substr("00000000",0,8 - strlen($pa3)) .$pa3;
		$pa4=substr("00000000",0,8 - strlen($pa4)) .$pa4;
        
       return decbin($pa1).".".decbin($pa2).".".decbin($pa3).".".decbin($pa4);

       }

       function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

       if($_SERVER["REQUEST_METHOD"] == "POST"){
        $dec=test_input($_POST["ip"]);
        echo "Numero decimal: ".$dec."<br>";
        echo binario();

       }



    ?>
</BODY>
</HTML>