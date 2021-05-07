/*=======================================
TABLA PARA MOSTRAR PRODUCTOS
=========================================*/
$(".tablaGaleria").DataTable ({
	 "ajax": "ajax/tablaGaleria.ajax.php",
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

/*=========================================
			EDITAR PRODUCTO
==========================================*/

$(".tablaGaleria tbody").on("click",".btnEditarGaleria",function(){
	var idImagen=$(this).attr("idImagen");

	var datos = new FormData();
	datos.append("idImagen",idImagen);

	$.ajax({
		url:"ajax/galeria.ajax.php",
	    method:"POST",
	    data: datos,
	    cache: false,
	    contentType: false,
	    processData: false,
	    dataType: "json",
	    success:function(respuesta){
	    	console.log("respuesta", respuesta);

	    	$("#modalEditarGaleria .idImagen").val(respuesta["id"]);
	    	$("#modalEditarGaleria .estadoImagen").val(respuesta["estado"]);
	    	$("#modalEditarGaleria .categoria").val(respuesta["categoria"]);
	    	$("#modalEditarGaleria .descripcionEditada").val(respuesta["descripcion"]);
	    	$("#modalEditarGaleria .previsualizarFoto").attr("src",respuesta["imagen"]);
	    	$("#modalEditarGaleria .antiguaFoto").val(respuesta["imagen"]);
	    	
	    }
	})

});