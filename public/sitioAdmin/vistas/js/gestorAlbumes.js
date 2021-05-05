/*=============================================
CARGAR LA TABLA DINÁMICA DE ALBUMES
=============================================*/
$(".tablaAlbumes").DataTable({
	 "ajax": "ajax/tablaAlbumes.ajax.php",
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

/*=============================================
REVISAR SI el ALBUM YA EXISTE
=============================================*/


$(".validarAlbum").change(function(){

	$(".alert").remove(); //quitamos la case alert q hace aparecer el cartel

	var album = $(this).val();//obtenemos el valor del campo tituloAlbum
	 console.log("album", album);

	var datos = new FormData();
	datos.append("validarAlbum", album);

	$.ajax({
	    url:"ajax/albumes.ajax.php",
	    method:"POST",
	    data: datos,
	    cache: false,
	    contentType: false,
	    processData: false,
	    dataType: "json",
	    success:function(respuesta){
	    	
	    	 console.log("respuesta", respuesta);

	    	if(respuesta){

             //despues de la etiqueta padre de donde esta la clase validaralbumcolocar el cartel
	    		$(".validarAlbum").parent().after('<div class="alert alert-warning">Este álbum ya existe</div>')
	    		$(".validarAlbum").val(""); //vaciamos el campo de album
	    	}   

	    }

	  })
});




