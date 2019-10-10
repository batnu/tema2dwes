<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ejercicio9</title>
</head>
<body>
	<p><b>Escribir un programa que lea el valor de un ángulo en radianes y muestre su valor en grados, minutos y segundos.</b></p>
	<form>
		<label for="radianes">Introduzca un número de radianes</label>
		<input type="text" name="radianes"/>
		<input type="submit" name="enviar" value="calcular"/>
	</form>
	<?php
		$radianes = $_GET['radianes'];
		$total = ($radianes*180)/22;
		$grados = intval($total);
		$total = $total - $grados;
		$total = $total * 60;
		$minutos = intval($total);
		$total = $total -$minutos;
		$segundos = intval($total * 60);
		echo $radianes." radianes equivalen a: ".$grados."º ".$minutos."' ".$segundos."\"";
	?>
</body>
</html>