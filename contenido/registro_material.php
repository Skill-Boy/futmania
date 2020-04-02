<?php
	include 'cn.php';


    $categoria = $_POST["categoria"];
	$marca = $_POST["marca"];
	$descripcion = $_POST["descripcion"];
	$precio = $_POST["precio"];
	$cantidad = $_POST["cantidad"];
	$imagen = $_POST["imagen"];
	

	$insertar = "INSERT INTO productos(categoria, marca, descripcion, precio, cantidad , imagen) VALUES ('$categoria', '$marca', '$descripcion', '$precio', '$cantidad', '$imagen')";

	$resultado = mysqli_query($conexion, $insertar);

	if (!$resultado) {
		echo "error al registrar producto";
	} else {
		echo "El producto se ha registrado exitosamente";
	}
	mysqli_close($conexion);
?>