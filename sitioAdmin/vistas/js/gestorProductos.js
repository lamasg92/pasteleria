/*=============================================
REVISAR SI EL PRODUCTO YA EXISTE
=============================================*/

$(".validarProducto").change(function(){

	$(".alert").remove(); //quitamos la case alert q hace aparecer el cartel

	var producto = $(this).val();//obtenemos el valor del campo tituloProducto
	 console.log("producto", producto);

	var datos = new FormData();
	datos.append("validarProducto", producto);

	$.ajax({
	    url:"ajax/productos.ajax.php",
	    method:"POST",
	    data: datos,
	    cache: false,
	    contentType: false,
	    processData: false,
	    dataType: "json",
	    success:function(respuesta){
	    	
	    	 console.log("respuesta", respuesta);

	    	if(respuesta){

             //despues de la etiqueta padre de donde esta la clase validarproducto colocar el cartel
	    		$(".validarProducto").parent().after('<div class="alert alert-warning">Este producto ya existe</div>')
	    		$(".validarProducto").val(""); //vaciamos el campo de producto
	    	}   

	    }

	  })
});



/*=============================================
SUBIENDO LA FOTO DEL PRODUCTO
=============================================*/

$(".foto").change(function(){

	var imagen = this.files[0];

	/*=============================================
  	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
  	=============================================*/
  	if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

		$(".foto").val("");

		swal({
	      title: "Error al subir la imagen",
	      text: "¡La imagen debe estar en formato JPG o PNG!",
	      type: "error",
	      confirmButtonText: "¡Cerrar!"
	    });

		return;

  	}else{

  		var datosImagen = new FileReader;
  		datosImagen.readAsDataURL(imagen); //convertimos la vlble en un archivo

  		$(datosImagen).on("load", function(event){
		
  			var rutaImagen = event.target.result;

  			$(".previsualizarFoto").attr("src", rutaImagen);

		})
  	}

})

/*=======================================
TABLA PARA MOSTRAR PRODUCTOS
=========================================*/
$(".tablaProductos").DataTable({
	 "ajax": "ajax/tablaProductos.ajax.php",
	 "deferRender": true,
	 "retrieve": true,
	 "processing": true,
	 "language": {

	 	"sProcessing":     "Procesando...",
		"sLengthMenu":     "Mostrar _MENU_ registros",
		"sZeroRecords":    "No se encontraron resultados",
		"sEmptyTable":     "Ningún dato disponible en esta tabla",
		"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
		"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
		"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		"sInfoPostFix":    "",
		"sSearch":         "Buscar:",
		"sUrl":            "",
		"sInfoThousands":  ",",
		"sLoadingRecords": "Cargando...",
		"oPaginate": {
			"sFirst":    "Primero",
			"sLast":     "Último",
			"sNext":     "Siguiente",
			"sPrevious": "Anterior"
		},
		"oAria": {
				"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
				"sSortDescending": ": Activar para ordenar la columna de manera descendente"
		}

	 }


});

