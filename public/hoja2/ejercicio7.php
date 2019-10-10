<?php include 'header.php' ?>
<p><b>Programa que calcule el valor de elevar un número real a (base) a un número entero b (exponente)</b></p>

<?php if(! $_POST){?>
	<form action="ejercicio7.php" method="post">
		<label for="base">Introduzca un numero que haga de base</label>
		<input type="text" name="base"/>
		<br/>
		<label for="exponente">Introduzca un numero que haga de exponente</label>
		<input type="text" name="exponente"/>
		<br/>
		<input type="submit" name="enviar" value="calcular"/>
	</form>
<?php }else{
	if (isset($_POST['base'])&&isset($_POST['exponente'])) {
		$base = $_POST['base'];
		$exponente = $_POST['exponente'];
		$resultado=$base;
		for ($i=$exponente; $i >1 ; $i--) { 
			$resultado = $resultado * $base;
		}	
	}
}	

echo "El resultado de ".$base."^".$exponente." es: ".$resultado;
include 'footer.php'?>