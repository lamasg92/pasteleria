<?php

require_once "../controladores/albumes.controlador.php";
require_once "../modelos/album.modelo.php";


class TablaAlbumes{

  /*=============================================
  MOSTRAR LA TABLA DE ALBUMES
  =============================================*/ 

 	public function mostrarTabla(){	

 	$item = null;
 	$valor = null;
    //traigo el total de albumes existentes
 	$albumes = ControladorAlbumes::ctrMostrarAlbumes($item, $valor);	

 	$datosJson = '{
		 
		  "data": [ ';

	for($i = 0; $i < count($albumes); $i++){
	
			/*=============================================
			REVISAR ESTADO
			=============================================*/ 

			if( $albumes[$i]["estado_album"] == "inactivo"){
				
				$colorEstado = "btn-danger";
				$textoEstado = "Inactivo";
				$estadoAlbum = "activo";

			}else{

				$colorEstado = "btn-success";
				$textoEstado = "Activo";
				$estadoAlbum = "inactivo";

			}


		 	$estado = "<button class='btn ".$colorEstado." btn-xs btnActivar' estadoAlbum='".$estadoAlbum."' idAlbum='".$albumes[$i]["id_album"]."'>".$textoEstado."</button>";

		 	$accion="<button class='btn btn-warning btnEditarAlbum' idAlbum='".$albumes[$i]['id_album']."' data-toggle='modal' data-target='#modalEditarAlbum'><Span class = 'glyphicon glyphicon-pencil'> </span></button>";
		 	
			$datosJson	 .= '[
				      "'.($i+1).'",
				      "'.$albumes[$i]["nombre_album"].'",
				      "'. $estado.'",
				      "'.$accion.'"    
				     
				    ],';



	}

	$datosJson = substr($datosJson, 0, -1); //quita el ultimo caracter; la coma al final

	$datosJson.=  ']
		  
	}'; 

	echo $datosJson;


 	}


}

/*=============================================
ACTIVAR TABLA DE ALBUMES
=============================================*/ 
$activar = new TablaAlbumes();
$activar -> mostrarTabla();