
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ejercicio4</title>
</head>
<body>
	<p><b>Crear un programa que calcule la fuerza de atracción gravitacional entre dos masas M1 y M2 situadas a una distancia R, donde las masas se expresan en kilogramos y la distancia en metros y la constante de gravitación universal es G=6.67x10^(-11) Nw*m^2/Kg^2</b></p>
	<?php
		$m1 = 3;
		$m2 = 4;
		$r= 5;
		$g= 6.67*pow(10,-11);
		$resultado=$g*(($m1*$m2)/pow($r, 2));
		echo "La fuerza de atraccion gravitacional entre una masa de ".$m1." Kg y una de ".$m2." Kg separandolas una distancia de ".$r." m es ".$resultado." Nw*m^2/Kg^2";
	?>
</body>
</html>

