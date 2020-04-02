<?php

	$conexion = mysqli_connect('localhost', 'root', '', 'tienda');

?>

<!DOCTYPE html>
<html>
<head>
	<title>productos</title>
	<meta charset="utf-8">
</head>
<body>
	<table border="1">
		
		<tr>
			<td>id</td>
			<td>categoria</td>
			<td>marca</td>
			<td>descripción</td>
			<td>precio</td>
			<td>cantidad</td>
		</tr>

		<?php

			$sql = "SELECT * FROM productos";
			$result = mysqli_query($conexion, $sql);

			while ($mostrar = mysqli_fetch_array($result)) {
				
			
		?>

		<tr>
			<td><?php echo $mostrar ['Id'] ?></td>
			<td><?php echo $mostrar ['categoria'] ?></td>
			<td><?php echo $mostrar ['marca'] ?></td>
			<td><?php echo $mostrar ['descripcion'] ?></td>
			<td><?php echo $mostrar ['precio'] ?></td>
			<td><?php echo $mostrar ['cantidad'] ?></td>
		</tr>
		<?php
			}	
		?>
	</table>
</body>
</html>