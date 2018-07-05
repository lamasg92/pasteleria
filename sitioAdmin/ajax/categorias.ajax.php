<?php

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categoria.modelo.php";


class AjaxCategorias{

  /*=============================================
  VALIDAR NO REPETIR CATEGORÍA
  =============================================*/ 

  public $validarCategoria;

  public function ajaxValidarCategoria(){

    $item = "nombre_categoria";
    $valor = $this->validarCategoria;

    $respuesta = ControladorCategorias::ctrMostrarCategorias($item, $valor);

    echo json_encode($respuesta);//se pone json_encode porq la rta es un array

  }

}

/*=============================================
VALIDAR NO REPETIR CATEGORÍA
=============================================*/

if(isset( $_POST["validarCategoria"])){

  $valCategoria = new AjaxCategorias();
  $valCategoria -> validarCategoria = $_POST["validarCategoria"];
  $valCategoria -> ajaxValidarCategoria();

}



