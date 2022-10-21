<HTML>
<HEAD> <TITLE>Cambio base</TITLE> </HEAD>

<BODY>
	
	<form name="formulario" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">


		<label style="font-size: 40px">CAMBIO DE BASE</label><br><br><br>

        Numero: <input type="text" name="num" id="num"/><br><br>

        Nueva base: <input type="number" name="base" id="base"/><br><br><br>

       
        <input type="submit" name="Enviar" value="Enviar">
        <input type="reset" name="Borrar" value="Borrar">

		</form>	

 
 	<?php
      	
      	$num=$_POST["num"];
       	$base=$_POST["base"];
		$barra=strpos($num,"/",0);
		$numero=substr($num,($barra)+1,($barra));
		$numero2=substr($num,0,($barra));

       

       function base(){
       	$num=$_POST["num"];
       	$base=$_POST["base"];
		$barra=strpos($num,"/",0);
		$numero=substr($num,($barra)+1,($barra));
		$numero2=substr($num,0,($barra));
		$bin=0;
		$res;

         $res =base_convert($numero , $numero , $base );
          return $res;
		}

		echo "Numero ".$numero2." en base ".$numero." = ".base()." en base ".$base."<br>";


    ?>
</BODY>
</HTML>