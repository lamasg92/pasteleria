<?php

require_once "conexion.php";

class ModeloCarrito{

	/*=============================================
	NUEVAS COMPRAS
	=============================================*/

	static public function mdlNuevasCompras($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (id_usuario,fecha_pedido,total,estado) VALUES (:id_usuario, :fecha_pedido, :total, :estado)");

		$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);
		$stmt->bindParam(":fecha_pedido", $datos["fecha_pedido"], PDO::PARAM_INT);
		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_INT);
		$stmt->bindParam(":total", $datos["total"], PDO::PARAM_INT);


		if($stmt->execute()){ 
			$respuesta= array(
							"id"=>1,
							"resp"=>"ok"
						);
			return $respuesta; 

		}else{ 

			$respuesta= array(
							"id"=>0,
							"resp"=>"error"
						);
			return $respuesta;
		}

		$stmt->close();

		$tmt =null;
	}

	static public function mdlDetalleCompra($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (id_carrito, id_producto, cantidad, subtotal, fecha_reserva, estado_reserva ) VALUES ( :id_carrito, :id_producto, :cantidad, :subtotal, :fecha_reserva, :estado_reserva )");

		$stmt->bindParam(":id_carrito", $datos["id_carrito"], PDO::PARAM_INT);
		$stmt->bindParam(":id_producto", $datos["id_producto"], PDO::PARAM_INT);
		$stmt->bindParam(":cantidad", $datos["cantidad"], PDO::PARAM_INT);
		$stmt->bindParam(":subtotal", $datos["subtotal"], PDO::PARAM_INT);
		$stmt->bindParam(":fecha_reserva", $datos["fecha_reserva"], PDO::PARAM_INT);
		$stmt->bindParam(":estado_reserva", $datos["estado_reserva"], PDO::PARAM_INT);


		if($stmt->execute()){ 

			return "ok"; 

		}else{ 

			return "error"; 

		}

		$stmt->close();

		$stmt =null;
	}

}