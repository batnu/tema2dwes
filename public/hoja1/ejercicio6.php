<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ejercicio 6</title>
</head>
<body>
	<p><b>Escribir un programa que calcule el número de billetes de 500, 200, 100, 50, 20, 10 y 5 así como de monedas de 2, 1, 0'5, 0'20, 0'10, 0'05, 0'02 y 0'01 para desglosar una cantidad C de forma que se necesite la menor cantidad de cada tipo.</b></p>
	<?php
		$dinero = 6453.44;
		$decimales = ($dinero - intval($dinero))*100;
		echo "Con ".$dinero."€ tendrás: ";
		echo "<br/> billetes de 500€: ".intdiv($dinero, 500);
		$dinero =$dinero%500 ;
		echo "<br/> billetes de 200€: ".intdiv($dinero, 200);
		$dinero = $dinero%200;
		echo "<br/> billetes de 100€: ".intdiv($dinero, 100);
		$dinero = $dinero%100;
		echo "<br/> billetes de 50€: ".intdiv($dinero, 50);
		$dinero = $dinero%50;
		echo "<br/> billetes de 20€: ".intdiv($dinero, 20);
		$dinero = $dinero%20;
		echo "<br/> billetes de 10€: ".intdiv($dinero, 10);
		$dinero = $dinero%10;
		echo "<br/> billetes de 5€: ".intdiv($dinero, 5);
		$dinero = $dinero%5;
		echo "<br/> monedas de 2€: ".intdiv($dinero, 2);
		$dinero = $dinero%2;
		echo "<br/> monedas de 1€: ".intdiv($dinero, 1);
		$dinero= $dinero%1;
		echo "<br/> monedas de 0.50€: ".intdiv($decimales, 50);
		$decimales = $decimales%50;
		echo "<br/> monedas de 0.20€: ".intdiv($decimales, 20);
		$decimales = $decimales%20;
		echo "<br/> monedas de 0.10€: ".intdiv($decimales, 10);
		$decimales = $decimales%10;
		echo "<br/> monedas de 0.05€: ".intdiv($decimales, 5);
		$decimales = $decimales%5;
		echo "<br/> monedas de 0.02€: ".intdiv($decimales, 2);
		$decimales = $decimales%2;
		echo "<br/> monedas de 0.01€: ".intdiv($decimales, 1);
	?>
</body>
</html>
