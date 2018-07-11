<?php

class ControladorCategorias{

    /*=============================================
	MOSTRAR INFO
	=============================================*/

	static public function ctrMostrarCategorias($item, $valor){

		$tabla = "categorias";

		$respuesta = ModeloCategoria::mdlMostrarCategorias($tabla,$item, $valor);

		return $respuesta;

	}
    

   /*=============================================
	CREAR CATEGORIAS
	=============================================*/

	static public function ctrCrearCategoria(){

		if(isset($_POST["tituloCategoria"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["tituloCategoria"])){

					$datos = array("categoria"=>strtoupper($_POST["tituloCategoria"]),
						           "fecha"=>date('Y-m-d'),
						           "estado"=>"activo");


				}

				$respuesta = ModeloCategoria::mdlIngresarCategoria("categorias", $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "La categoría ha sido guardada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "categorias";

							}
						})

					</script>';

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡La categoría no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  })

			  	</script>';

			  	return;

			}

		}

   }
}