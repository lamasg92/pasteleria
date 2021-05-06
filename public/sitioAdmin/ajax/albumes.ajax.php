<?php

require_once "../controladores/albumes.controlador.php";
require_once "../modelos/album.modelo.php";


class AjaxAlbumes{

  /*=============================================
  VALIDAR NO REPETIR ALBUM
  =============================================*/ 

  public $validarAlbum;

  public function ajaxValidarAlbum(){

    $item = "nombre_album";
    $valor = $this->validarAlbum;

    $respuesta = ControladorAlbumes::ctrMostrarAlbumes($item, $valor);

    echo json_encode($respuesta);

  }


   /*==============================
  EDITAR ALBUM
  ================================*/

  public $idAlbum;

  public function ajaxEditarAlbum(){
    
    $item = "id_album";
    $valor = $this->idAlbum;

    $respuesta = ControladorAlbumes::ctrMostrarAlbumes($item, $valor);

    echo json_encode($respuesta);
  }

}
  /*=============================================
VALIDAR NO REPETIR ALBUM
=============================================*/


if(isset($_POST["validarAlbum"])){

  $valAlbum = new AjaxAlbumes();
  $valAlbum -> validarAlbum = $_POST["validarAlbum"];
  $valAlbum -> ajaxValidarAlbum();

}


if(isset($_POST["idAlbum"])){

  $ediAlbum = new AjaxAlbumes();
  $ediAlbum -> idAlbum = $_POST["idAlbum"];
  $ediAlbum -> ajaxEditarAlbum();

}




