<?php
	include 'cn.php';


    $nombre = $_POST["nombre"];
	$apellidos = $_POST["apellidos"];
	$correo = $_POST["correo"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	

	$insertar = "INSERT INTO usuarios(nombre, apellidos, correo, username, password) VALUES ('$nombre', '$apellidos', '$correo', '$username', '$password')";

	$resultado = mysqli_query($conexion, $insertar);

	if (!$resultado) {
		echo "error al registrarse";
	} else {
		echo "Usuario registrado exitosamente";
	}
	mysqli_close($conexion);
?>