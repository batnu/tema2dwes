<?php include 'header.php' ?>
	<p><b> Escribir un programa que dados tres números, si el primero es negativo, calcule el producto de los tres y, en caso contrario, calcular la suma.</b></p>
	<form action="ejercicio1.php" method="post">
		<label for="n1">Introduzca un número</label>
		<input type="text" name="n1"/>
		<br/>
		<label for="n2">Introduzca un número</label>
		<input type="text" name="n2"/>
		<br/>
		<label for="n3">Introduzca un número</label>
		<input type="text" name="n3"/>
		<br/>
		<input type="submit" name="enviar" value="calcular"/>
	</form>

<?php
	include 'funciones.php'; 
	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	$n3 = $_POST['n3'];
	if($n1<0){
		$sol = $n1 * $n2 *$n3;
		$sol = prod($n1,$n2,$n3);
	} else{
		$sol = sum($n1,$n2,$n3);
	}
	echo "La solución correspondiente es: ".$sol;
include 'footer.php'?>
