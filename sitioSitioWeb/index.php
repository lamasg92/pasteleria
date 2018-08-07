<?php

require_once "controladores/sitio.controlador.php";


require_once "modelos/sitio.modelo.php";
require_once "modelos/rutas.php";

require_once "extensiones/PHPMailer/PHPMailerAutoload.php";
require_once "extensiones/vendor/autoload.php";


$sitio = new ControladorSitio();
$sitio->index();

