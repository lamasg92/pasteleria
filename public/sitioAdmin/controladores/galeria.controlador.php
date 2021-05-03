<?php

class ControladorGaleria{

   static public function ctrMostrarGaleria($item,$valor){

        $tabla="galeria_imagenes";

        $respuesta=ModeloGaleria::mdlMostrarGaleria($tabla,$item,$valor);

        return $respuesta;
   }

   static public function ctrCrearImagen(){

   	 if(isset($_POST["descripcionImagen"])){

   	 	      /*=============================================
				VALIDAR IMAGEN 
				=============================================*/


				if(isset($_FILES["foto"]["tmp_name"]) && !empty($_FILES["foto"]["tmp_name"])){            
					
					$ruta_fichero_origen = $_FILES['foto']['tmp_name'];
					$rutaFoto =  'vistas/img/galeria/' . $_FILES['foto']['name'];

					move_uploaded_file ( $ruta_fichero_origen, $rutaFoto);

				} 


   	 	$datos = array(
					"categoria"=>$_POST["categoria"],
					"descripcion"=>"<p>".$_POST["descripcionImagen"]."</p>",
					"imagen"=>$rutaFoto,
					"fecha"=>date('Y-m-d'),
					"estado"=>"activo"
   	 				);

   	 	$respuesta = ModeloGaleria::mdlIngresarImagen("galeria_imagenes", $datos);

			if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "La imagen ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "galeria";

							}
						})

					</script>';

			}else{
              
              echo'<script>

					swal({
						  type: "error",
						  title: "La imagen no se pudo guardar",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  
						})

					</script>';

			}
		}
   	 }
}