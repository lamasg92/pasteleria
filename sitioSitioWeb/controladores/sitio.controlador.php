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

	static public function ctrMostrarContacto(){

		$tabla = "contacto";

		$respuesta = ModeloSitio::mdlMostrarContacto($tabla);

		return $respuesta;
	}

	static public function ctrMostrarRedesSociales(){

		$tabla = "redessociales";

		$respuesta = ModeloSitio::mdlMostrarRedesSociales($tabla);

		return $respuesta;

	}

	
}

