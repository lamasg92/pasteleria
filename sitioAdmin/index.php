<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/administradores.controlador.php";
require_once "controladores/adminInicio.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "controladores/productos.controlador.php";

require_once "modelos/administradores.modelo.php";
require_once "modelos/adminInicio.modelo.php";
require_once "modelos/categoria.modelo.php";
require_once "modelos/producto.modelo.php";

$plantilla=new ControladorPlantilla();
$plantilla->plantilla();

