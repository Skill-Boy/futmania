<?php

$username=$_POST['username'];
$password=$_POST['password'];

//conectar a la BD

$conexion=mysqli_connect("localhost", "root", "", "tienda");
$consulta="SELECT * FROM usuarios WHERE username='$username' and password='$password' ";

//EJECUTAR LA CONSULTA
$resultado=mysqli_query($conexion, $consulta);

//VALIDAR CONSULTA
$filas=mysqli_num_rows($resultado);

if ($filas > 0) {
	header("location:bienvenido.html");
	echo "Bienvenido";
}
else{
	echo "El usuario no existe";
}
mysqli_free_result($resultado);
mysqli_close($conexion); 


?>