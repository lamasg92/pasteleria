<?php

class ControladorImagenes{

   static public function ctrMostrarImagenes($item,$valor){

        $tabla1="galeria_imagenes";
        $tabla2="albumes";

        $respuesta=ModeloImagenes::mdlMostrarImagenes($tabla1,$tabla2,$item,$valor);

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
					"categoria"=>$_POST["seleccionarCategoria"],
					"descripcion"=>"<p>".$_POST["descripcionImagen"]."</p>",
					"imagen"=>$rutaFoto,
					"fecha"=>date('Y-m-d'),
					"estado"=>"activo"
   	 				);

   	 	$respuesta = ModeloImagenes::mdlIngresarImagen("galeria_imagenes", $datos);

			if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "La imagen ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "imagenes";

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

static public function ctrEditarImagen() {

   if(isset($_POST["descripcionEditada"])){
		/*=============================================
		VALIDAR IMAGEN 
		=============================================*/

		$rutaFoto = $_POST["antiguaFoto"];
		

		if(isset($_FILES["foto"]["tmp_name"]) && !empty($_FILES["foto"]["tmp_name"])){

			/*=============================================
			BORRAMOS ANTIGUA FOTO
			=============================================*/

			unlink($_POST["antiguaFoto"]);

			/*=============================================
			GUARDAMOS LA IMAGEN EN EL DIRECTORIO
			=============================================*/

			$ruta_fichero_origen = $_FILES['foto']['tmp_name'];
			$rutaFoto =  'vistas/img/galeria/' . $_FILES['foto']['name'];

			move_uploaded_file($ruta_fichero_origen, $rutaFoto);

		}

		/*=============================================
		Datos
		=============================================*/	
		$datos = array(
			"id"=>$_POST["idImagen"],
			"categoria"=>$_POST["categoria"],
			"descripcion"=>"<p>".$_POST["descripcionEditada"]."</p>",
			"imagen"=>$rutaFoto,
			"estado"=>$_POST["estadoImagen"]
		);			

		$respuesta = ModeloImagenes::mdlEditarImagen("galeria_imagenes", $datos);

		if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "La imagen ha sido modificada correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
						if (result.value) {

						window.location = "imagenes";

						}
					})

				</script>';

		}else{
          
          echo'<script>

				swal({
					  type: "error",
					  title: "La imagen no se pudo modificar",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  
					})

				</script>';

		}

	  }

	}
}