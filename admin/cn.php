<?php
$conexion = mysqli_connect("localhost", "root", "", "tienda");
	if (!$conexion) {
	echo 'Error al conectar la base de datos';
}
	else {
	echo 'Conectado a la base de datos';
}
?>