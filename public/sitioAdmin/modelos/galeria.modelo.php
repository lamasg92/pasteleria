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

	/*=============================================
	CARGAR IMAGEN
	=============================================*/

	static public function mdlIngresarImagen($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(imagen,descripcion,categoria,fecha,estado) VALUES (:imagen,:descripcion,:categoria,:fecha,:estado)");

		$stmt->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);  
        $stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);      
        $stmt->bindParam(":categoria", $datos["categoria"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
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
