<?php

class ControladorIdCorporativa{

    /*=============================================
	MOSTRAR INFO
	=============================================*/

	static public function ctrMostrarIdCorporativa(){

		$tabla = "identidad_corporativa";

		$respuesta = ModeloIdCorporativa::mdlMostrarIdCorporativa($tabla);

		return $respuesta;

	}



}
