<?php include 'header.php' ?>

<p><b>Escribir un programa que calcule las raíces, bien reales o imaginarias, de una ecuación de segundo grado. El programa también debe ser capaz de operar con valores nulos para el coeficiente de orden 2.</b></p>
<form>
	Introduzca el numero de base 2<input type="text" name="x"/>
	<br/>
	Introduzca el numero de base 1<input type="text" name="y"/>
	<br/>
	Introduzca el termino independiente<input type="text" name="z"/>
	<br/>
	<input type="submit" name="enviar" value="calcular" />
</form>
<?php
	$x = $_GET['x'];
	$y = $_GET['y'];
	$z = $_GET['z'];
	$cuadrado = $y*$y;
	$producto = 4*$x*$z;
	if ($producto > $cuadrado) {
		$raiz = sqrt(($cuadrado - $producto)*-1);
		$s1 = round((-$y + $raiz)/(2*$x),2);
		$s2 = round((-$y - $raiz)/(2*$x),2);
		echo "Habrá dos soluciones : ".$s1."i"." y ".$s2."i";
	}elseif ($producto == $cuadrado) {
		$s = round(-$y / (2*$x),2);
		echo "La solución será: ".$s;
	}else{
		$raiz = sqrt($cuadrado - $producto);
		$s1 = round((-$y + $raiz)/(2*$x),2);
		$s2 = round((-$y - $raiz)/(2*$x),2);
		echo "Habrá dos soluciones : ".$s1." y ".$s2;
	}
include 'footer.php'?>

