<?php include 'header.php' ?>
<p><b>Escribir un programa que dados los coeficientes resuelva el sistema. El programa deberá indicar los casos en los que el sistema de ecuaciones no tenga solución.</b></p>
<h3>Resolver el sistema de ecuaciones</h3>
<p>ax+by=c dx+ey=f</p>
<form action="ejercicio2.php" method="post">
	<label for="a">Introduzca un número a</label>
	<input type="text" name="a"/>
	<br/>
	<label for="b">Introduzca un número b</label>
	<input type="text" name="b"/>
	<br/>
	<label for="c">Introduzca un número c</label>
	<input type="text" name="c"/>
	<br/>
	<label for="d">Introduzca un número d</label>
	<input type="text" name="d"/>
	<br/>
	<label for="e">Introduzca un número e</label>
	<input type="text" name="e"/>
	<br/>
	<label for="f">Introduzca un número f</label>
	<input type="text" name="f"/>
	<br/>
	<input type="submit" name="enviar" value="calcular">
</form>
<?php
include 'funciones.php';
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];
	$d = $_POST['d'];
	$e = $_POST['e'];
	$f = $_POST['f'];
	echo "El valor de X es : ".calcx($a,$b,$c,$d,$e,$f);
	echo "El valor de Y es : ".calcy($a,$b,$c,$d,$e,$f);
include 'footer.php'?>
