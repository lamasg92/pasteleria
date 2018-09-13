<?php

require_once "conexion.php";

class ModeloCompras{

	/*=============================================
	MOSTRAR COMPRAS
	=============================================*/

	static public function mdlMostrarCompras($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}
		
		$stmt -> close();

		$stmt = null;

	}


	/*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/

	static public function mdlMostrarDetalleCompras($item, $valor){


			$stmt = Conexion::conectar()->prepare("SELECT * FROM productos 
											INNER JOIN detalle_carrito ON productos.id=detalle_carrito.id_producto
											INNER JOIN carrito ON detalle_carrito.id_carrito=carrito.id_carrito 
											WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

/*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/
	static public function mdlMostrarProductos($tabla, $item, $valor){

	

			//solicito un producto

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetchAll();

		
		$stmt -> close();
		
		$stmt = null;

	}	

}
