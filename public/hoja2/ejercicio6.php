<?php include 'header.php'?>
<p><b>Escribir un programa que escriba los números del 1 al 100 en líneas de 10 números. Después del 100 el programa debe escribir "Fin de Programa" en una línea nueva.</b></p>
<?php
	for ($i=1; $i <= 100; $i++) { 
		if ($i%11==0) {
			echo "<br/>";
		}
		echo $i." ";
	}
	echo "<br/> <br/> Fin del programa";
	include 'footer.php'
?>