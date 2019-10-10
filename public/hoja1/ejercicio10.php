<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ejercicio10</title>
</head>
<body>
	<p><b>Calcular la edad de una persona introduciendo la fecha actual y su fecha de nacimiento.</b></p>
	<form>
		<label for="fecha">Introduzca el año actual</label>
		<input type="text" name="fecha"/>
		<br/>
		<label for="nacimiento">Introduzca su año de nacimiento</label>
		<input type="text" name="nacimiento"/>
		<br/>
		<input type="submit" name="enviar" value="calcular"/>
	</form>

	<?php 
		$fecha = $_GET['fecha'];
		$nacimiento = $_GET['nacimiento'];

		echo "Actualmente tienes ".($fecha - $nacimiento)." años";
	?>
</body>
</html>