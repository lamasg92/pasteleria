<?php

class ControladorAlbumes{

    /*=============================================
	MOSTRAR INFO
	=============================================*/

	static public function ctrMostrarAlbumes($item, $valor){

		$tabla = "albumes";

		$respuesta = ModeloAlbum::mdlMostrarAlbumes($tabla,$item,$valor);

		return $respuesta;

	}
    
 /*=============================================
	CREAR ALBUM
	=============================================*/

	static public function ctrCrearAlbum(){

		if(isset($_POST["tituloAlbum"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["tituloAlbum"])){

				
					$datos = array("album"=>strtoupper($_POST["tituloAlbum"]),
						           "estado"=>"activo");


				}

				$respuesta = ModeloAlbum::mdlIngresarAlbum("albumes", $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El album ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "albumes";

							}
						})

					</script>';

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El álbum no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  })

			  	</script>';

			  	return;

			}

		}

   }

   

}