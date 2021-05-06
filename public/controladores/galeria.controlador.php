<?php

class ControladorGaleria{

	/*=============================================
	MOSTRAR ALBUMNES
	=============================================*/

	static public function ctrMostrarALbumes($item, $valor){

		$tabla = "albumes";

		$respuesta = ModeloGaleria::mdlMostrarAlbumes($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	MOSTRAR IMAGENES
	=============================================*/

	static public function ctrMostrarImagenes($item, $valor){

		$tabla = "galeria_imagenes";

		$respuesta = ModeloGaleria::mdlMostrarImagenes($tabla, $item, $valor);

		return $respuesta;

	}

}