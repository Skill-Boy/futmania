<?php
//conexion a la BD tiendafutmania
class conexionDB{

	public function getconexion(){
		$cnx=new PDO("mysql:host=localhost;dbname=tiendafutmania","root","");
		return $cnx;
	}
}





?>