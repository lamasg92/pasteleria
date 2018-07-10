<?php

class ControladorProductos{

   static public function ctrMostrarProductos($item,$valor){

        $tabla="productos";

        $respuesta=ModeloProductos::mdlMostrarProductos($tabla,$item,$valor);

        return $respuesta;
   }


   static public function ctrCrearProducto(){

   	 if(isset($_POST["tituloProducto"])){

   	 	      /*=============================================
				VALIDAR IMAGEN 
				=============================================*/


				if(isset($_FILES["foto"]["tmp_name"]) && !empty($_FILES["foto"]["tmp_name"])){

					/*=============================================
					DEFINIMOS LAS MEDIDAS
					=============================================*/

					list($ancho, $alto) = getimagesize($_FILES["foto"]["tmp_name"]);	

					$nuevoAncho = 1280;
					$nuevoAlto = 720;

                 
					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["foto"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$rutaFoto = "../vistas/img/productos/".$_POST["tituloProducto"].".jpg";

						$origen = imagecreatefromjpeg($$_FILES["foto"]["tmp_name"]);						
						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $rutaFoto);

					}

					if($_FILES["foto"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$rutaFoto = "../vistas/img/productos/".$_POST["tituloProducto"].".png";

						$origen = imagecreatefrompng($_FILES["foto"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagealphablending($destino, FALSE);
				
						imagesavealpha($destino, TRUE);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $rutaFoto);

					}

				} 


   	 	$datos = array("producto"=>strtoupper($_POST["tituloProducto"]),
   	 		     "idCategoria"=>$_POST["seleccionarCategoria"],
   	 		     "descripcion"=>$_POST["descripcionProducto"],
   	 		     "precio"=>$_POST["precio"],
   	 		     "imagen"=>$rutaFoto,
   	 		     "fecha"=>date('Y-m-d'),
   	 		     "estado"=>"activo"

   	 		);

   	 	$respuesta = ModeloProducto::mdlIngresarProducto("productos", $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El producto ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "productos";

							}
						})

					</script>';

			}else{
              
              echo'<script>

					swal({
						  type: "error",
						  title: "El producto no se pudo guardar",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  
						})

					</script>';

			}
   	 }



   }

}