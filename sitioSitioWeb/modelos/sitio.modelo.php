<?php
require_once "conexion.php";

class ModeloSitio{
	

static public function mdlMostrarSobreNosotros($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = 1");

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt = null;

	}
	
}