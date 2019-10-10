
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ejercicio5</title>
</head>
<body>
	<p><b>Escribir un programa que pregunte el año actual y la edad de una persona y calcule la edad de esa persona en el año 2020.</b></p>
	<form>
		Introduzca el año actual <input type="text" name="actual"/>
		Introduzca su edad actual <input type="text" name="edad"/>
		<input type="submit" name="enviar"/>
	</form>
	<?php
		$actual= $_GET['actual'];
		$diferencia = 2020-$actual;
		$edad =$_GET['edad'];
		$final= $edad + $diferencia;
		echo "La edad que tendrás en 2020 es : ".$final;
	?>
</body>
</html>
