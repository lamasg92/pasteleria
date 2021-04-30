<?php

require_once "conexion.php";

class ModeloIdCorporativa{


  /*=============================================
	MOSTRAR INFO
	=============================================*/

	static public function mdlMostrarIdCorporativa($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla" );

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;

	}


}