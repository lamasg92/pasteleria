/*=======================================
TABLA PARA MOSTRAR VENTAS
========================================*/
	var id_usuario=document.getElementById("id_usuario").value;
	//console.log(id_usuario);

$(".tablaComprasPendientes").DataTable({
	 
	 "ajax": {
	 	"url"  : "ajax/tablaCompras.ajax.php?id_usuario="+id_usuario+"&estado_reserva=pendiente",
	 	"type": "GET",
	 },
	 "deferRender": true,
	 "retrieve": true,
	 "processing": true,
	 "language": {

	 	"sProcessing":     "Procesando...",
		"sLengthMenu":     "Mostrar _MENU_ registros",
		"sZeroRecords":    "No se encontraron resultados",
		"sInfoPostFix":    "",
		"sSearch":         "Buscar:",
		"sEmptyTable":     "Ningún dato disponible en esta tabla",
		"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
		"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
		"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
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

$(".tablaComprasParciales").DataTable({
	 "ajax": {
	 	"url"  : "ajax/tablaCompras.ajax.php?id_usuario="+id_usuario+"&estado_reserva=parcial",
	 	"type": "GET",
	 },
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

$(".tablaComprasEntregados").DataTable({
	 "ajax": {
	 	"url"  : "ajax/tablaCompras.ajax.php?id_usuario="+id_usuario+"&estado_reserva=entregado",
	 	"type": "GET",
	 },
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
			EDITAR Compra
==========================================*/

$(".tablaComprasPendientes tbody").on("click",".btnEditarCompra",function(){
	var id_detalle_carrito=$(this).attr("id_detalle_carrito");

	var datos = new FormData();
	datos.append("id_detalle_carrito",id_detalle_carrito);

	$.ajax({
		url:"ajax/compras.ajax.php",
	    method:"POST",
	    data: datos,
	    cache: false,
	    contentType: false,
	    processData: false,
	    dataType: "json",
	    success:function(respuesta){
	    	
            $("#modalEditarCompra .id_detalle_carrito").val(respuesta[0]["id_detalle_carrito"]);
	    	$("#modalEditarCompra .nombre_producto").val(respuesta[0]["nombre_producto"]);
	    	$("#modalEditarCompra .cantidad").val(respuesta[0]["cantidad"]);
	    	$("#modalEditarCompra .subtotal").val(respuesta[0]["subtotal"]);
	    	$("#modalEditarCompra .fecha_reserva").val(respuesta[0]["fecha_reserva"]);
	    	$("#modalEditarCompra .fecha_pedido").val(respuesta[0]["fecha_pedido"]);
	    	$("#modalEditarCompra .estado_reserva").val(respuesta[0]["estado_reserva"]);
	    	
	    }
	})

});
