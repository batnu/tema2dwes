<?php include 'header.php'?>
<p><b>Programa que calcule el factorial de un número.</b></p>

<?php if(! $_POST){?>
	<form method ='post'>
		<label for="num">Escriba un numero para calcular su factorial</label>
		<input type="text" name="num"/>
		<br/>
		<input type="submit" name="enviar" value="calcular"/>
	</form>
<?php }else{
		if (isset($_POST['num'])) {
			$num = $_POST["num"];
			$resultado = $num;
			for ($i=$num-1; $i > 1; $i--) { 
				$resultado = $resultado * $i;
			}
		}
	echo "El factorial de ".$num." es: ".$resultado;
}
	
include 'footer.php'?>