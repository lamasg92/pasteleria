<?php

class ControladorCompras{

	/*=============================================
	MOSTRAR CATEGORÍAS
	=============================================*/

	static public function ctrMostrarCompras($item, $valor){


		$respuesta = ModeloCompras::mdlMostrarCompras( $item, $valor);

		return $respuesta;

	}

	/*=============================================
	MOSTRAR DETALLE
	=============================================*/

	
	static public function ctrMostrarDetalleCompras($item1, $item2, $valor1, $valor2){


		$respuesta = ModeloCompras::mdlMostrarDetalleCompras($item1, $item2, $valor1, $valor2);

		return $respuesta;

	}


	static public function ctrEditarCompra(){ 
	
		if(isset($_POST["id_detalle_carrito"])){

			
					$datos = array("id_detalle_carrito"=>$_POST["id_detalle_carrito"],
								  "estado_reserva"=>$_POST["estado_reserva"]);

	
		$respuesta = ModeloCompra::mdlEditarCompra("detalle_carrito", $datos);
		var_dump($respuesta);
		
		if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "la venta fue modificada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "ventas";

							}
						})

					</script>';

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El stock no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  })

			  	</script>';

			  	return;

			}

		}
	}


}