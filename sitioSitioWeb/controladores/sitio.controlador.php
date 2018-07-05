<?php

class ControladorSitio{

 	public function index(){

		require "vistas/index.php";
	}

	static public function ctrMostrarSobreNosotros(){

		$tabla = "informacion";

		$respuesta = ModeloSitio::mdlMostrarSobreNosotros($tabla);

		return $respuesta;
	}

	
}

