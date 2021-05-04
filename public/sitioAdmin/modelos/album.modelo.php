<?php

require_once "conexion.php";

class ModeloAlbum{

  /*=============================================
	MOSTRAR ALBUMES
	=============================================*/

	static public function mdlMostrarAlbumes($tabla, $item, $valor){

		if($item != null){
			//solicito un album

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else { //solicito todos los albumes

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id_album DESC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();
		
		$stmt = null;
	
	}


	

 }
