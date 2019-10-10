<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ejercicio2</title>
</head>
<body>
	<p><b>Dada una temperatura en grados Celsius, convertirla a Fahrenheit, mostrando por pantalla un mensaje del tipo "xxx.xx grados Celsius son yyy.yy grados Fahrenheit”</b></p>
	<?php
		$temperatura = 40;
		$fahrenheit = ($temperatura*9)/5 +32;
		echo $temperatura." grados celsius equivalen a ".$fahrenheit;
	?>
</body>
</html>

