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

	/*=============================================
	EDITAR DESCRIPCION
	=============================================*/

	static public function mdlEditarIdCorporativa($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET descripcion_ic =:descripcion_ic WHERE id_ic = :id_ic");

		$stmt->bindParam(":descripcion_ic", $datos["descripcion_ic"], PDO::PARAM_STR);
		
		$stmt->bindParam(":id_ic", $datos["id_ic"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}
    


}