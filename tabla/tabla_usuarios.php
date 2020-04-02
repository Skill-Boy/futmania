<?php

	$conexion = mysqli_connect('localhost', 'root', '', 'tienda');

?>

<!DOCTYPE html>
<html>
<head>
	<title>usuarios</title>
</head>
<body>
	<table border="1">
		
		<tr>
			<td>id</td>
			<td>nombre</td>
			<td>apellidos</td>
			<td>correo</td>
			<td>username</td>
			<td>password</td>
		</tr>

		<?php

			$sql = "SELECT * FROM usuarios";
			$result = mysqli_query($conexion, $sql);

			while ($mostrar = mysqli_fetch_array($result)) {
				
			
		?>

		<tr>
			<td><?php echo $mostrar ['Id'] ?></td>
			<td><?php echo $mostrar ['nombre'] ?></td>
			<td><?php echo $mostrar ['apellidos'] ?></td>
			<td><?php echo $mostrar ['correo'] ?></td>
			<td><?php echo $mostrar ['username'] ?></td>
			<td><?php echo $mostrar ['password'] ?></td>
		</tr>
		<?php
			}	
		?>
	</table>
</body>
</html>