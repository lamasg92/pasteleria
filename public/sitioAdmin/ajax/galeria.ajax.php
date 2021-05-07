<?php

require_once "../controladores/imagenes.controlador.php";
require_once "../modelos/imagenes.modelo.php";

class AjaxGaleria{

	/*==============================
	EDITAR IMAGEN
	================================*/

	public $idImagen;

	public function ajaxEditarGaleria(){
		
		$item = "id";
		$valor = $this->idImagen;

		$respuesta = ControladorImagenes::ctrMostrarImagenes($item, $valor);

		echo json_encode($respuesta);
	}

}

if(isset($_POST["idImagen"])){

	$ediImagen = new AjaxGaleria();
	$ediImagen -> idImagen = $_POST["idImagen"];
	$ediImagen -> ajaxEditarGaleria();

}