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

	/*=============================================
	CREAR ALBUM
	=============================================*/

	static public function mdlIngresarAlbum($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre_album,estado_album) VALUES (:album, :estado)");

		$stmt->bindParam(":album", $datos["album"], PDO::PARAM_STR);
	
		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}


	

 }
