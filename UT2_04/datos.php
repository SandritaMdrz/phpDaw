<HTML>
<HEAD> <TITLE>Datos alumno</TITLE> </HEAD>

<style>
    table, td{
        border-collapse: collapse;
        border: solid black 1px;
        padding: auto;
    }
    .error{
        color: red;
    }
</style>

<BODY>
	<form name="formulario" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">


		<label style="font-size: 40px">Datos Alumno</label><br><br><br>

        Nombre: <input type="text" name="nombre" required/>
        <span class="error">*</span>
        <br><br>
        Apellido1: <input type="text" name="ape1"/><br><br>
        Apellido2: <input type="text" name="ape2"/><br><br>
        Email: <input type="text" name="email" required/>
        <span class="error">*</span><br>
        <br>
        Sexo:
        Mujer <input type="radio" name="check" value="M" required/>
        Hombre <input type="radio" name="check" value="H" required/>
        <span class="error">*</span>
        
       <br><br><br>

       
        <input type="submit" name="Enviar" value="Enviar">
        <input type="reset" name="Borrar" value="Borrar">

		</form>	

 
 	<?php
       

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
    
          //limpiamos
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = test_input(  $_POST['nombre']);
        $a1 =test_input( $_POST['ape1']);
        $a2= test_input($_POST['ape2']);
        $e= test_input($_POST['email']);
        $s = test_input($_POST['check']);
       

      


        // if($_POST['check'])
        
       
            echo"<table>";
            echo"<tr>";
            echo"<td>Nombre</td>";
            echo"<td>Apellido1</td>";
            echo"<td>Apellido2</td>";
            echo"<td>Email</td>";
            echo"<td>Sexo</td>";
            echo"</tr>";

            echo"<tr>";
            echo"<td>$n</td>";
            echo"<td>$a1</td>";
            echo"<td>$a2</td>";
            echo"<td>$e</td>";
            echo"<td>$s</td>";
            echo"</tr>";
            echo"</table>";
       
        }
    



?>

</BODY>
</HTML>
