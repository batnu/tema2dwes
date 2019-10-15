<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ejercicio1</title>
</head>
<body>
	<p><b>Dado un valor en pesetas, convertirlo a euros. La solución deberá tener dos decimales.</b>
	</p>
	<?php
		$pesetas = 80000;
		$euros = $pesetas/166.386;
		echo $pesetas." pesetas equivalen a ".round($euros,2)." €";
	?>
</body>
</html>