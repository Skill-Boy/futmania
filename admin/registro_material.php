<?php
	include 'cn.php';


    $id_categoria = $_POST["id_categoria"];
	$marca = $_POST["marca"];
	$descripcion = $_POST["descripcion"];
	$precio = $_POST["precio"];
	$cantidad = $_POST["cantidad"];
	$imagen = $_POST["imagen"];
	

	$insertar = "INSERT INTO productos(id_categoria, marca, descripcion, precio, cantidad , imagen) VALUES ('$id_categoria', '$marca', '$descripcion', '$precio', '$cantidad', '$imagen')";

	$resultado = mysqli_query($conexion, $insertar);

	if (!$resultado) {
		echo "error al registrar producto";
	} else {
		echo "El producto se ha registrado exitosamente";
	}
	mysqli_close($conexion);
?>