<?php include 'header.php' ?>
<p><b>Escribir un programa que dado un año obtenga por pantalla la fecha del Domingo de Pascua de ese año.</b></p>
<form>
	Introduzca el año para saber cuando será el domingo de pascua<input type="text" name="ano"/>
	<input type="submit" name="enviar"/>
</form>
<?php
	$ano = $_GET['ano'];

	$a = $ano % 19;
	$b = $ano % 4;
	$c = $ano % 7;
	$d = (19 * $a +24)%30;
	$e = (2*$b +4 *$c +6 *$d +5)%7;
	$dia = 22 +$d +$e;

	if($dia >31){
		echo "El domingo de pascua del año ".$ano." corresponde al ".($dia-31)." de Abril";
	}else{
		echo "El domingo de pascua del año ".$ano." corresponde al ".$dia." de Marzo";
	}
include 'footer.php'?>
