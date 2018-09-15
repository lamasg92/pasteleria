<?php

class ControladorVentas{



	/*=============================================
	MOSTRAR DETALLE
	=============================================*/

	static public function ctrMostrarDetalleVentas1($item1, $item2, $valor1, $valor2){


		$respuesta = ModeloVentas::mdlMostrarDetalleVentas1($item1, $item2, $valor1, $valor2);

		return $respuesta;

	}

	static public function ctrMostrarDetalle(){


		$respuesta = ModeloVentas::mdlMostrarDetalle();

		return $respuesta;

	}



}