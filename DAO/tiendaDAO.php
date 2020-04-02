<?php

session_start();

include './metodosDAO.php';
$op=$_REQUEST['op'];

switch ($op) {
	case 1:
		unset($_SESSION['lista']);
		$objmetodo=new metodosDAO();
		$lista=$metodo->listarproductos();
		$_SESSION['lista']=$lista;
		header("location: ../vistas/catalogo.php");
		break;
	case 2;
		# code...
		break;
	
}

?>