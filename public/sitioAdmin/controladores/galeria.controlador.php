<?php

class ControladorGaleria{

   static public function ctrMostrarGaleria($item,$valor){

        $tabla="galeria_imagenes";

        $respuesta=ModeloGaleria::mdlMostrarGaleria($tabla,$item,$valor);

        return $respuesta;
   }
}