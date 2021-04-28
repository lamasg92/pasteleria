<?php

require_once "conexion.php";

class ModeloGaleria{

  /*=============================================
	MOSTRAR IMAGENES DEGALERIA
	=============================================*/

	static public function mdlMostrarGaleria($tabla, $item, $valor){

		if($item != null){
			//solicito una iamgen

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else { //solicito todas las imagenes de galeria

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id DESC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();
		
		$stmt = null;
	
	}

}
