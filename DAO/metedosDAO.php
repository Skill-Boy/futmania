<?php

include '../utils/conexionDB.php';

class metodosDAO{

	public function listarproductos(){
		$cnx=new conexionDB();
		$cn=$cnx->getconexion();

		$res=$cn->prepare("select * from productos");
		$res->execute();

		foreach ($res as $row) {
			$lista[] = $row;
		}
		return $lista;
	}
}

?>