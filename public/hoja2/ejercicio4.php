<?php include 'header.php' ?>
<p><b> Escribir un programa que diga si un año es bisiesto.</b></p>
<?php
	include 'funciones.php';
	if(! $_POST){?>
		<form method ='post'>
			<label for="ano">Introduzca el año para saber si es bisiesto</label>
			<input type="text" name="ano"/>
			<input type="submit" name="enviar" value="comprobar"/>
		</form>
	<?php }else{
		if (isset($_POST['ano'])){
			$ano = $_POST['ano'];
			if(bisisesto($ano)==1){
				echo "El año es bisiesto";
			}else{
				echo "El año no es bisiesto";
			}
		}
	}
include 'footer.php'?>
