<?php

class ControladorCompras{

	/*=============================================
	MOSTRAR CATEGORÍAS
	=============================================*/

	static public function ctrMostrarCompras($item, $valor){

		$tabla = "carrito";

		$respuesta = ModeloCompras::mdlMostrarCompras($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	MOSTRAR DETALLE
	=============================================*/

	static public function ctrMostrarDetalleCompras( $item, $valor){


		$respuesta = ModeloCompras::mdlMostrarDetalleCompras($item, $valor);

		return $respuesta;

	}


}