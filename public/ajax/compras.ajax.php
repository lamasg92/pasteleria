<?php

require_once "../controladores/compras.controlador.php";
require_once "../modelos/compras.modelo.php";


class AjaxCompra{

 
  /*==============================
  EDITAR STOCK
  ================================*/

  public $id_detalle_carrito;

  public function ajaxEditarCompra(){
    
    $item = "id_detalle_carrito";
    $valor = $this->id_detalle_carrito;

    $respuesta = ControladorCompras::ctrMostrarCompras($item,$valor);
    

    echo json_encode($respuesta);
  }

}

if(isset($_POST["id_detalle_carrito"])){

  $ediVenta = new AjaxCompra();
  $ediVenta -> id_detalle_carrito = $_POST["id_detalle_carrito"];
  $ediVenta -> ajaxEditarCompra();

}
