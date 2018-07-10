<?php

require_once "../controladores/productos.controlador.php";
require_once "../modelos/producto.modelo.php";


class AjaxProductos{

  /*=============================================
  VALIDAR NO REPETIR PRODUCTO
  =============================================*/ 

  public $validarProducto;

  public function ajaxValidarProducto(){

    $item = "nombre";
    $valor = $this->validarProducto;

    $respuesta = ControladorProductos::ctrMostrarProductos($item, $valor);

    echo json_encode($respuesta);//se pone json_encode porq la rta es un array

  }

}

/*=============================================
VALIDAR NO REPETIR PRODUCTO
=============================================*/

if(isset( $_POST["validarProducto"])){

  $valProducto = new AjaxProductos();
  $valProducto -> validarProducto = $_POST["validarProducto"];
  $valProducto -> ajaxValidarProducto();

}