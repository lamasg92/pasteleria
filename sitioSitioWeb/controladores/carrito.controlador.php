<?php

class ControladorCarrito{

	/*=============================================
	NUEVAS COMPRAS
	=============================================*/

	static public function ctrNuevasCompras($datos){

		$datosCabezera= array(
			"id_usuario"=>intval($datos["id_usuario"]),
			"fecha_pedido"=>date("Y-m-d"),
			"total"=>$datos["total"],
			"estado"=>"pendiente"
		);

		//var_dump($datosCabezera);

		$tabla = "carrito";

		$respuestaVec = ModeloCarrito::mdlNuevasCompras($tabla, $datosCabezera);

		if($respuestaVec["resp"] == "ok"){

			$cantidadArray=explode(",",$datos["cantidadArray"]);
			$fechaArray=explode(",",$datos["fechaArray"]);
			$valorItemArray=explode(",",$datos["valorItemArray"]);
			$idProductoArray=explode(",",$datos["idProductoArray"]);

			for($i = 0; $i < count($cantidadArray); $i ++){

				$datosDetalle= array(
							"id_carrito"=>$respuestaVec["id"],
							"id_producto"=>$idProductoArray[$i],
							"cantidad"=>$cantidadArray[$i],
							"subtotal"=>$valorItemArray[$i],
							"fecha_reserva"=>$fechaArray[$i],
							"estado_reserva"=>"pendiente"
						);		

				//var_dump($datosDetalle);
				$tabla = "detalle_carrito";

				$respuesta = ModeloCarrito::mdlDetalleCompra($tabla, $datosDetalle);

			}

				return $respuesta;

		}

	}

}