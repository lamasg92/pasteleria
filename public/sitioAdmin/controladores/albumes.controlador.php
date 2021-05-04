<?php

class ControladorAlbumes{

    /*=============================================
	MOSTRAR INFO
	=============================================*/

	static public function ctrMostrarAlbumes($item, $valor){

		$tabla = "albumes";

		$respuesta = ModeloAlbum::mdlMostrarAlbumes($tabla,$item,$valor);

		return $respuesta;

	}
    

   

}