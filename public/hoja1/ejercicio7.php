<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ejercicio7</title>
</head>
<body>
	<p><b>Crear un programa que pida un número real y muestre la tabla de multiplicar correspondiente a dicho número perfectamente formateada y con una precisión de dos dígitos.</b></p>
	<form>
		Inserte un número<input type="text" name="numero"/>
		<input type="submit" name="enviar"/> 
	</form>
	<?php
		$numero = $_GET['numero'];
		$i = 0;
		while ($i <= 10) {
			$resultado = round($numero*$i,2); 
			echo $numero." x ".$i." = ".$resultado."</br>";
			$i++;		
		}		
	?>
	
</body>
</html>