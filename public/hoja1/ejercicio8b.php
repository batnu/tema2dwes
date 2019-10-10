<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ejercicio8</title>
</head>
<body>
	<p><b>Mostrar en una tabla el cuadrado y el cubo de los cinco primeros números enteros que siguen a uno previamente introducido. Los datos deben aparecer encolumnados.Ejercicio 8 mejorado</b></p>
	<form method="post">
		Inserte un número<input type="text" name="numero"/>
		<input type="submit" name="enviar"/> 
	</form>
	<?php $numero = $_POST['numero'] ?>
	<table>
		<thead>
			<th>Numero</th>
			<th>Cuadrado</th>
			<th>Cubo</th>
		</thead>
		<tbody>
			<?php for($i=1; $i<6; $i++) : ?>
			<tr>
				<td><?= $numero+$i?></td>
				<td><?= pow($numero+$i,2)?></td>
				<td><?= pow($numero+$i,3)?></td>
			</tr>
			<?php endfor ?>
		</tbody>
	</table>
	
</body>
</html>
