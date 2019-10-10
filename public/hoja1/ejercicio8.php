<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ejercicio8</title>
</head>
<body>
	<p><b>Mostrar en una tabla el cuadrado y el cubo de los cinco primeros números enteros que siguen a uno previamente introducido. Los datos deben aparecer encolumnados.</b></p>
	<form>
		Inserte un número<input type="text" name="numero"/>
		<input type="submit" name="enviar"/> 
	</form>
	<?php
		$numero = $_GET['numero'];
		echo "<br/>"; 
		for ($i=$numero; $i <$numero+5 ; $i++) {
			echo $i."  ".pow($i, 2)."  ".pow($i, 3)."<br/>";
		}
	?>
</body>
</html>