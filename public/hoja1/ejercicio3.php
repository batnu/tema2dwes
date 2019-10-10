<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ejercicio 3</title>
</head>
<body>
	<p><b>Dado el radio de una circunferencia, calcular su longitud así como su área.</b>
</p>
	<?php 
		$radio=4;
		$longitud=$radio*2*M_PI;
		$area=M_PI*pow($radio, 2);
		echo "La longitud de un circulo con radio ".$radio." es ".$longitud." y su área ". $area;
	?>
</body>
</html>


