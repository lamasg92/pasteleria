<?php

require_once "controladores/sitio.controlador.php";


require_once "modelos/sitio.modelo.php";



$sitio = new ControladorSitio();
$sitio->index();

