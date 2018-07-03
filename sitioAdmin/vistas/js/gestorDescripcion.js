/*=============================================
EDITAR CATEGORÍA
=============================================*/

$(".tablaCategorias tbody").on("click", ".btnEditarCategoria", function(){

	var idCategoria = $(this).attr("idCategoria");

	var datos = new FormData();
	datos.append("idCategoria", idCategoria);

	$.ajax({

		url:"ajax/categorias.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){

			$("#modalEditarCategoria .editarIdCategoria").val(respuesta["id"]);
			
			$("#modalEditarCategoria .tituloCategoria").val(respuesta["categoria"]);
			$("#modalEditarCategoria .rutaCategoria").val(respuesta["ruta"]);

			/*=============================================
			EDITAR NOMBRE CATEGORÍA Y RUTA
			=============================================*/

			$("#modalEditarCategoria .tituloCategoria").change(function(){

				$("#modalEditarCategoria .rutaCategoria").val(limpiarUrl($("#modalEditarCategoria .tituloCategoria").val()));

			})

			/*=============================================
			TRAEMOS DATOS DE CABECERA
			=============================================*/
					
			var datosCabecera = new FormData();
			datosCabecera.append("ruta", respuesta["ruta"]);

			$.ajax({

				url:"ajax/cabeceras.ajax.php",
				method: "POST",
				data: datosCabecera,
				cache: false,
				contentType: false,
				processData: false,
				dataType: "json",
				success: function(respuesta){

					$("#modalEditarCategoria .editarIdCabecera").val(respuesta["id"]);
					
					/*=============================================
					CARGAMOS LA DESCRIPCION
					=============================================*/

					$("#modalEditarCategoria .descripcionCategoria").val(respuesta["descripcion"]);

					/*=============================================
					CARGAMOS LAS PALABRAS CLAVES
					=============================================*/

					if(respuesta["palabrasClaves"] != null){

						$(".editarPalabrasClaves").html(

							'<div class="input-group">'+
                
			                '<span class="input-group-addon"><i class="fa fa-key"></i></span>'+

			                '<input type="text" class="form-control input-lg pClavesCategoria tagsInput" data-role="tagsinput" value="'+respuesta["palabrasClaves"]+'" name="pClavesCategoria" required>'+

			              '</div>'

						);

						$("#modalEditarCategoria .pClavesCategoria").tagsinput('items');

						$(".bootstrap-tagsinput").css({"padding":"11px",
							   						   "width":"100%",
 							   						   "border-radius":"1px"})

					}else{

						$(".editarPalabrasClaves").html(

							'<div class="input-group">'+
                
			                '<span class="input-group-addon"><i class="fa fa-key"></i></span>'+

			                '<input type="text" class="form-control input-lg pClavesCategoria tagsInput" data-role="tagsinput" value="" placeholder="Ingresar palabras claves"  name="pClavesCategoria" required>'+

			              '</div>'

						);

						$("#modalEditarCategoria .pClavesCategoria").tagsinput('items');

						$(".bootstrap-tagsinput").css({"padding":"11px",
							   						   "width":"100%",
 							   						   "border-radius":"1px"})


					}

					/*=============================================
					CARGAMOS LA IMAGEN DE PORTADA
					=============================================*/

					$("#modalEditarCategoria .previsualizarPortada").attr("src", respuesta["portada"]);
					//por si no cambio la foto de portada
					$("#modalEditarCategoria .antiguaFotoPortada").val(respuesta["portada"]);

				}

			})

			/*=============================================
			PREGUNTAMOS SI EXITE OFERTA
			=============================================*/

			if(respuesta["oferta"] != 0){

				$("#modalEditarCategoria .selActivarOferta").val("oferta");

				$("#modalEditarCategoria .datosOferta").show();

				$("#modalEditarCategoria .valorOferta").prop("required",true);

				$("#modalEditarCategoria #precioOferta").val(respuesta["precioOferta"]);
				$("#modalEditarCategoria #descuentoOferta").val(respuesta["descuentoOferta"]);

				if(respuesta["precioOferta"] != 0){

					$("#modalEditarCategoria #precioOferta").prop("readonly",true);
					$("#modalEditarCategoria #descuentoOferta").prop("readonly",false);

				}

				if(respuesta["descuentoOferta"] != 0){

					$("#modalEditarCategoria #precioOferta").prop("readonly",false);
					$("#modalEditarCategoria #descuentoOferta").prop("readonly",true);

				}

				$("#modalEditarCategoria .previsualizarOferta").attr("src", respuesta["imgOferta"]);

				$("#modalEditarCategoria .antiguaFotoOferta").val(respuesta["imgOferta"]);

				$("#modalEditarCategoria .finOferta").val(respuesta["finOferta"]);		

			}else{

				$("#modalEditarCategoria .selActivarOferta").val("");
				$("#modalEditarCategoria .datosOferta").hide();
				$("#modalEditarCategoria .valorOferta").prop("required",false);
				$("#modalEditarCategoria .previsualizarOferta").attr("src", "vistas/img/ofertas/default/default.jpg");
				$("#modalEditarCategoria .antiguaFotoOferta").val(respuesta["imgOferta"]);

			}

			/*=============================================
			CREAR NUEVA OFERTA AL EDITAR
			=============================================*/

			$("#modalEditarCategoria .selActivarOferta").change(function(){

				activarOferta($(this).val());

			})

			$("#modalEditarCategoria .valorOferta").change(function(){

				if($(this).attr("id") == "precioOferta"){

					$("#modalEditarCategoria #precioOferta").prop("readonly",true);
					$("#modalEditarCategoria #descuentoOferta").prop("readonly",false);
					$("#modalEditarCategoria #descuentoOferta").val(0);

				}

				if($(this).attr("id") == "descuentoOferta"){

					$("#modalEditarCategoria #descuentoOferta").prop("readonly",true);
					$("#modalEditarCategoria #precioOferta").prop("readonly",false);
					$("#modalEditarCategoria #precioOferta").val(0);

				}

			})

		}

	})

})