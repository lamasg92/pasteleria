<?php

class ControladorContacto{

    /*=============================================
	MOSTRAR INFO
	=============================================*/

	static public function ctrMostrarContacto(){

		$tabla = "contacto";

		$respuesta = ModeloContacto::mdlMostrarContacto($tabla);

		return $respuesta;

	}


	static public function ctrEditarContacto(){

		if(isset($_POST["telefono"]&&isset($_POST["direccion"]){
				/*=============================================
				Datos
				=============================================*/

					$datos = array("id"=>$_POST["id"],
								   "telefono"=> $_POST["telefono"],
								   "direccion"=>$_POST['direccion'],								   
				


				$respuesta = ModeloContacto::mdlEditarContacto("informacion", $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "Su contacto ha sido editada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "contactos";

							}
						})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡No es posible guardar si algun dato esta vacio!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  })

			  	</script>';

			  	return;

			}

	  }

	}

