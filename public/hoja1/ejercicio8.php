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
	<?php $numero = $_POST['numero'] ?>

	<table>
		<thead>
			<th>Numero</th>
			<th>Cuadrado</th>
			<th>Cubo</th>
		</thead>
		<tbody>
			<tr>
				<td><?=$numero+1?></td>
				<td><?=($numero+1)*($numero+1)?></td>
				<td><?=($numero+1)*($numero+1)*($numero+1)?></td>
			</tr>
			<tr>
				<td><?=$numero+2?></td>
				<td><?=($numero+2)*($numero+2)?></td>
				<td><?=($numero+2)*($numero+2)*($numero+2)?></td>
			</tr>
			<tr>
				<td><?=$numero+3?></td>
				<td><?=($numero+3)*($numero+3)?></td>
				<td><?=($numero+3)*($numero+3)*($numero+3)?></td>
			</tr>
			<tr>
				<td><?=$numero+4?></td>
				<td><?=($numero+4)*($numero+4)?></td>
				<td><?=($numero+4)*($numero+4)*($numero+4)?></td>
			</tr>
			<tr>
				<td><?=$numero+5?></td>
				<td><?=($numero+5)*($numero+5)?></td>
				<td><?=($numero+5)*($numero+5)*($numero+5)?></td>
			</tr>
		</tbody>
	</table>
</body>
</html>