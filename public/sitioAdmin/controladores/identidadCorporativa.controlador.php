<?php

class ControladorIdCorporativa{

    /*=============================================
	MOSTRAR INFO
	=============================================*/

	static public function ctrMostrarIdCorporativa(){

		$tabla = "identidad_corporativa";

		$respuesta = ModeloIdCorporativa::mdlMostrarIdCorporativa($tabla);

		return $respuesta;

	}



static public function ctrEditarIdCorporativa(){

		if(isset($_POST["descripcion_ic"])&&isset($_POST["id_ic"])){
				/*=============================================
				Datos
				=============================================*/

					$datos = array("id_ic"=>$_POST["id_ic"],
							     "descripcion_ic"=>$_POST['descripcion_ic']);		

					


				$respuesta = ModeloIdCorporativa::mdlEditarIdCorporativa("identidad_corporativa", $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "Sus cambios han sido guardados correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "identidadCorporativa";

							}
						})

					</script>';

				

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡No es posible guardar si la descripcion esta vacia",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  })

			  	</script>';

			  	return;

			}

	  }

	}



}
