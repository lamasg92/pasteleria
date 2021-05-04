<?php

require_once "../controladores/imagenes.controlador.php";
require_once "../modelos/imagenes.modelo.php";

class TablaGaleria{

  /*=============================================
  MOSTRAR LA TABLA GALERIA
  =============================================*/ 

	public function mostrarTabla(){	

	$item = null;
	$valor = null;
	//traigo el total de las iamgenes que existenten
	$galeria = ControladorImagenes::ctrMostrarImagenes($item, $valor);	

	$datosJson = '{
		 
		  "data": [ ';

	for($i = 0; $i < count($galeria); $i++){
	
			/*=============================================
			REVISAR ESTADO
			=============================================*/ 

			if( $galeria[$i]["estado"] == "inactivo"){
				
				$colorEstado = "btn-danger";
				$textoEstado = "Inactivo";
				$estadoGaleria = "activo";

			}else{

				$colorEstado = "btn-success";
				$textoEstado = "Activo";
				$estadoGaleria = "inactivo";

			}

			$categoria = $galeria[$i]["nombre_album"];

			$estado = "<button class='btn ".$colorEstado." btn-xs btnActivar' estadoGaleria='".$estadoGaleria."' idGaleria='".$galeria[$i]["id"]."'>".$textoEstado."</button>";

			$imagen="<img src='".$galeria[$i]["imagen"]."' width='50' heihth='50' >";

			$acciones="<button class='btn btn-warning btnEditarGaleria' idGaleria='".$galeria[$i]['id']."' data-toggle='modal' data-target='#modalEditarGaleria'><Span class = 'glyphicon glyphicon-pencil'> </ span></button>";

			$fecha = date("d/m/Y h:m",strtotime($galeria[$i]["fecha"]));
					
			$datosJson	 .= '[
					  "'.($i+1).'",
					  "'.$imagen.'",
					  "'.$galeria[$i]["descripcion"].'",
					  "'.$categoria.'",
					  "'.$fecha.'" ,
					  "'.$estado.'",
					  "'.$acciones.'"
					],';

	}

	$datosJson = substr($datosJson, 0, -1);

	$datosJson.=  ']
		  
	}'; 

	echo $datosJson;


	}


}

/*=============================================
ACTIVAR TABLA GALERIA
=============================================*/ 
$activar = new TablaGaleria();
$activar -> mostrarTabla();