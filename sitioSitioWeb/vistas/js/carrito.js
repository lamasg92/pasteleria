/*=============================================
VISUALIZAR LA CESTA DEL CARRITO DE COMPRAS
=============================================*/
if(localStorage.getItem("cantidadCesta") != null){

	$(".cantidadCesta").html(localStorage.getItem("cantidadCesta"));
	$(".sumaCesta").html(localStorage.getItem("sumaCesta"));

}else{

	$(".cantidadCesta").html("0");
	$(".sumaCesta").html("0");

}
/*=============================================
VISUALIZAR LOS PRODUCTOS EN LA PÁGINA CARRITO DE COMPRAS
=============================================*/

if(localStorage.getItem("listaProductos") != null){

	var listaCarrito = JSON.parse(localStorage.getItem("listaProductos"));

	listaCarrito.forEach(funcionForEach);

	function funcionForEach(item, index){

		/*var datosProducto = new FormData();
		var precio = 0;

		datosProducto.append("id", item.idProducto);

		$.ajax({

			url:rutaOculta+"ajax/producto.ajax.php",
			method:"POST",
			data: datosProducto,
			cache: false,
			contentType: false,
			processData:false,
			dataType: "json",
			success: function(respuesta){

				if(respuesta["precioOferta"] == 0){

					precio = respuesta["precio"];

				}else{

					precio = respuesta["precioOferta"];
				}*/

				$(".cuerpoCarrito").append(

					'<div clas="row itemCarrito">'+
						
						'<div class="col-sm-1 col-xs-12">'+
							
							'<br>'+

							'<center>'+
								
								'<button class="btn btn-default backColor quitarItemCarrito" idProducto="'+item.idProducto+'" peso="'+item.peso+'">'+
									
									'<i class="fa fa-times"></i>'+

								'</button>'+

							'</center>'+	

						'</div>'+
						'<div class="col-sm-1 col-xs-12">'+
							
							'<figure>'+
								
								'<img src="'+item.imagen+'" class="img-thumbnail">'+

							'</figure>'+

						'</div>'+

						'<div class="col-sm-4 col-xs-12">'+

							'<br>'+

							'<p class="tituloCarritoCompra text-left">'+item.nombre+'</p>'+

						'</div>'+

						'<div class="col-md-2 col-sm-1 col-xs-12">'+

							'<br>'+

							'<p class="precioCarritoCompra text-center">USD $<span>'+item.precio+'</span></p>'+

						'</div>'+

						'<div class="col-md-2 col-sm-3 col-xs-8">'+

							'<br>'+	

							'<div class="col-xs-8">'+

								'<center>'+
								
									'<input type="number" class="form-control cantidadItem" min="1" value="'+item.cantidad+'" tipo="'+item.tipo+'" precio="'+item.precio+'" idProducto="'+item.idProducto+'">'+	

								'</center>'+

							'</div>'+

						'</div>'+

						'<div class="col-md-2 col-sm-1 col-xs-4 text-center">'+
							
							'<br>'+

							'<p class="subTotal'+item.idProducto+' subtotales">'+
								
								'<strong>USD $<span>'+item.precio+'</span></strong>'+

							'</p>'+

						'</div>'+
						
					'</div>'+

					'<div class="clearfix"></div>'+

					'<hr>');

				/*=============================================
				/*=============================================
				/*=============================================
				/*=============================================
				/*=============================================
				ACTUALIZAR SUBTOTAL
				=============================================*/
				var precioCarritoCompra = $(".cuerpoCarrito .precioCarritoCompra span");
				var cantidadItem = $(".cuerpoCarrito .cantidadItem");

				for(var i = 0; i < precioCarritoCompra.length; i++){

					var precioCarritoCompraArray = $(precioCarritoCompra[i]).html();
					var cantidadItemArray = $(cantidadItem[i]).val();
					var idProductoArray = $(cantidadItem[i]).attr("idProducto");

					$(".subTotal"+idProductoArray).html('<strong>USD $<span>'+(precioCarritoCompraArray*cantidadItemArray)+'</span></strong>')

					sumaSubtotales();
					cestaCarrito(precioCarritoCompra.length);

				}

			/*}
		
		})*/

	}

}else{

	$(".cuerpoCarrito").html('<div class="well">Aún no hay productos en el carrito de compras.</div>');
	$(".sumaCarrito").hide();
	$(".cabeceraCheckout").hide();
}

/*======================================
AGREGAR AL CARRITO
=======================================*/

$(".agregarCarrito").click(function(){

	//var listaCarrito = JSON.parse(localStorage.getItem("listaProductos"));

	var idProducto = $(this).attr("idProducto");
	var imagen = $(this).attr("imagen");
	var nombre = $(this).attr("nombre");
	var precio = $(this).attr("precio");


		/*=============================================
		RECUPERAR ALMACENAMIENTO DEL LOCALSTORAGE
		=============================================*/
		if(localStorage.getItem("listaProductos") == null){

			listaCarrito = [];

		}else{

			var listaProductos = JSON.parse(localStorage.getItem("listaProductos"));

			for(var i = 0; i < listaProductos.length; i++){

				if(listaProductos[i]["idProducto"] == idProducto){

					swal({
					  title: "El producto ya está agregado al carrito de compras",
					  text: "",
					  type: "warning",
					  showCancelButton: false,
					  confirmButtonColor: "#DD6B55",
					  confirmButtonText: "¡Volver!",
					  closeOnConfirm: false
					})

					return;

				}

			}

			listaCarrito.concat(localStorage.getItem("listaProductos"));

		}

		listaCarrito.push({"idProducto":idProducto,
						   "imagen":imagen,
						   "nombre":nombre,
						   "precio":precio,
				           "cantidad":"1"});

		localStorage.setItem("listaProductos", JSON.stringify(listaCarrito));

		/*=============================================
		ACTUALIZAR LA CESTA
		=============================================*/

		var cantidadCesta = Number($(".cantidadCesta").html()) + 1;
		var sumaCesta = Number($(".sumaCesta").html()) + Number(precio);

		$(".cantidadCesta").html(cantidadCesta);
		$(".sumaCesta").html(sumaCesta);

		localStorage.setItem("cantidadCesta", cantidadCesta);
		localStorage.setItem("sumaCesta", sumaCesta);
		
		/*=============================================
		MOSTRAR ALERTA DE QUE EL PRODUCTO YA FUE AGREGADO
		=============================================*/

		swal({
			  title: "",
			  text: "¡Se ha agregado un nuevo producto al carrito de compras!",
			  type: "success",
			  showCancelButton: true,
			  confirmButtonColor: "#DD6B55",
			  cancelButtonText: "¡Continuar comprando!",
			  confirmButtonText: "¡Ir a mi carrito de compras!",
			  closeOnConfirm: false
			},
			function(isConfirm){
				if (isConfirm) {	

					 window.location = document.getElementById("rutaOculta").value+"carrito";
				} 
		});

})


/*=============================================
QUITAR PRODUCTOS DEL CARRITO
=============================================*/

$(document).on("click", ".quitarItemCarrito", function(){

	$(this).parent().parent().parent().remove();

	var idProducto = $(".cuerpoCarrito button");
	var imagen = $(".cuerpoCarrito img");
	var nombre = $(".cuerpoCarrito .tituloCarritoCompra");
	var precio = $(".cuerpoCarrito .precioCarritoCompra span");
	var cantidad = $(".cuerpoCarrito .cantidadItem");

	/*=============================================
	SI AÚN QUEDAN PRODUCTOS VOLVERLOS AGREGAR AL CARRITO (LOCALSTORAGE)
	=============================================*/

	listaCarrito = [];

	if(idProducto.length != 0){

		for(var i = 0; i < idProducto.length; i++){

			var idProductoArray = $(idProducto[i]).attr("idProducto");
			var imagenArray = $(imagen[i]).attr("src");
			var nombreArray = $(nombre[i]).html();
			var precioArray = $(precio[i]).html();
			var cantidadArray = $(cantidad[i]).val();

			listaCarrito.push({"idProducto":idProductoArray,
						   "imagen":imagenArray,
						   "nombre":nombreArray,
						   "precio":precioArray,
				           "cantidad":cantidadArray});

		}

		localStorage.setItem("listaProductos",JSON.stringify(listaCarrito));

		sumaSubtotales();
		cestaCarrito(listaCarrito.length);


	}else{

		/*=============================================
		SI YA NO QUEDAN PRODUCTOS HAY QUE REMOVER TODO
		=============================================*/	

		localStorage.removeItem("listaProductos");

		localStorage.setItem("cantidadCesta","0");
		
		localStorage.setItem("sumaCesta","0");

		$(".cantidadCesta").html("0");
		$(".sumaCesta").html("0");

		$(".cuerpoCarrito").html('<div class="well">Aún no hay productos en el carrito de compras.</div>');
		$(".sumaCarrito").hide();
		$(".cabeceraCheckout").hide();

	}


})

/*=============================================
GENERAR SUBTOTAL DESPUES DE CAMBIAR CANTIDAD
=============================================*/
$(document).on("change", ".cantidadItem", function(){

	var cantidad = $(this).val();
	var precio = $(this).attr("precio");
	var idProducto = $(this).attr("idProducto");

	$(".subTotal"+idProducto).html('<strong>USD $<span>'+(cantidad*precio)+'</span></strong>');

	/*=============================================
	ACTUALIZAR LA CANTIDAD EN EL LOCALSTORAGE
	=============================================*/

	var idProducto = $(".cuerpoCarrito button");
	var imagen = $(".cuerpoCarrito img");
	var nombre = $(".cuerpoCarrito .tituloCarritoCompra");
	var precio = $(".cuerpoCarrito .precioCarritoCompra span");
	var cantidad = $(".cuerpoCarrito .cantidadItem");

	listaCarrito = [];

	for(var i = 0; i < idProducto.length; i++){

		var idProductoArray = $(idProducto[i]).attr("idProducto");
		var imagenArray = $(imagen[i]).attr("src");
		var nombreArray = $(nombre[i]).html();
		var precioArray = $(precio[i]).html();
		var cantidadArray = $(cantidad[i]).val();

		listaCarrito.push({"idProducto":idProductoArray,
					   "imagen":imagenArray,
					   "nombre":nombreArray,
					   "precio":precioArray,
			           "cantidad":cantidadArray});

	}

	localStorage.setItem("listaProductos",JSON.stringify(listaCarrito));

	sumaSubtotales();
	cestaCarrito(listaCarrito.length);
})

/*=============================================
SUMA DE TODOS LOS SUBTOTALES
=============================================*/
function sumaSubtotales(){

	var subtotales = $(".subtotales span");
	var arraySumaSubtotales = [];
	
	for(var i = 0; i < subtotales.length; i++){

		var subtotalesArray = $(subtotales[i]).html();
		arraySumaSubtotales.push(Number(Math.floor(subtotalesArray*100)/100));
		
	}

	
	function sumaArraySubtotales(total, numero){

		return total + numero;

	}

	var sumaTotal = arraySumaSubtotales.reduce(sumaArraySubtotales);
	
	$(".sumaSubTotal").html('<strong>USD $<span>'+Math.floor(sumaTotal*100)/100+'</span></strong>');

	$(".sumaCesta").html(Math.floor(sumaTotal*100)/100);

	localStorage.setItem("sumaCesta", Math.floor(sumaTotal*100)/100);


}

/*=============================================
ACTUALIZAR CESTA AL CAMBIAR CANTIDAD
=============================================*/
function cestaCarrito(cantidadProductos){

	/*=============================================
	SI HAY PRODUCTOS EN EL CARRITO
	=============================================*/

	if(cantidadProductos != 0){
		
		var cantidadItem = $(".cuerpoCarrito .cantidadItem");

		var arraySumaCantidades = [];
	
		for(var i = 0; i < cantidadItem .length; i++){

			var cantidadItemArray = $(cantidadItem[i]).val();
			arraySumaCantidades.push(Number(cantidadItemArray));
			
		}
	
		function sumaArrayCantidades(total, numero){

			return total + numero;

		}

		var sumaTotalCantidades = arraySumaCantidades.reduce(sumaArrayCantidades);
		
		$(".cantidadCesta").html(sumaTotalCantidades );
		localStorage.setItem("cantidadCesta", sumaTotalCantidades);

	}

}


/*=============================================
CHECKOUT
=============================================*/

$("#btnCheckout").click(function(){

	$(".listaProductos table.tablaProductos tbody").html("");

	$("#checkPaypal").prop("checked",true);
	$("#checkPayu").prop("checked", false);

	var idUsuario = $(this).attr("idUsuario");
	var peso = $(".cuerpoCarrito button, .comprarAhora button");
	var titulo = $(".cuerpoCarrito .tituloCarritoCompra, .comprarAhora .tituloCarritoCompra");
	var cantidad = $(".cuerpoCarrito .cantidadItem, .comprarAhora .cantidadItem");
	var subtotal = $(".cuerpoCarrito .subtotales span, .comprarAhora .subtotales span");
	var tipoArray =[];
	var cantidadPeso = [];

	/*=============================================
	SUMA SUBTOTAL
	=============================================*/

	var sumaSubTotal = $(".sumaSubTotal span")
	
	$(".valorSubtotal").html($(sumaSubTotal).html());
	$(".valorSubtotal").attr("valor",$(sumaSubTotal).html());

	/*=============================================
	TASAS DE IMPUESTO
	=============================================*/

	var impuestoTotal = ($(".valorSubtotal").html() * $("#tasaImpuesto").val()) /100;
	
	$(".valorTotalImpuesto").html(Math.floor(impuestoTotal*100)/100);
	$(".valorTotalImpuesto").attr("valor",Math.floor(impuestoTotal*100)/100);

	sumaTotalCompra()

	/*=============================================
	VARIABLES ARRAY 
	=============================================*/

	for(var i = 0; i < titulo.length; i++){

		var pesoArray = $(peso[i]).attr("peso");
		var tituloArray = $(titulo[i]).html();
		var cantidadArray = $(cantidad[i]).val();		
		var subtotalArray = $(subtotal[i]).html();

		/*=============================================
		EVALUAR EL PESO DE ACUERDO A LA CANTIDAD DE PRODUCTOS
		=============================================*/

		cantidadPeso[i] = pesoArray * cantidadArray;

		function sumaArrayPeso(total, numero){

			return total + numero;

		}

		var sumaTotalPeso = cantidadPeso.reduce(sumaArrayPeso);
		
		/*=============================================
		MOSTRAR PRODUCTOS DEFINITIVOS A COMPRAR
		=============================================*/

		$(".listaProductos table.tablaProductos tbody").append('<tr>'+
															   '<td class="valorTitulo">'+tituloArray+'</td>'+
															   '<td class="valorCantidad">'+cantidadArray+'</td>'+
															   '<td>$<span class="valorItem" valor="'+subtotalArray+'">'+subtotalArray+'</span></td>'+
															   '<tr>');

		/*=============================================
		SELECCIONAR PAÍS DE ENVÍO SI HAY PRODUCTOS FÍSICOS
		=============================================*/
	
		tipoArray.push($(cantidad[i]).attr("tipo"));
		
		function checkTipo(tipo){

			return tipo == "fisico";
		
		}

	}

	/*=============================================
	EXISTEN PRODUCTOS FÍSICOS
	=============================================*/

	if(tipoArray.find(checkTipo) == "fisico"){

		$(".seleccionePais").html('<select class="form-control" id="seleccionarPais" required>'+
						
						          '<option value="">Seleccione el país</option>'+

					              '</select>');


		$(".formEnvio").show();

		$(".btnPagar").attr("tipo","fisico");

		$.ajax({
			url:rutaOculta+"vistas/js/plugins/countries.json",
			type: "GET",
			cache: false,
			contentType: false,
			processData:false,
			dataType:"json",
			success: function(respuesta){

				respuesta.forEach(seleccionarPais);

				function seleccionarPais(item, index){

					var pais = item.name;
					var codPais = item.code;

					$("#seleccionarPais").append('<option value="'+codPais+'">'+pais+'</option>');
				
				}

			}
		})

		/*=============================================
		EVALUAR TASAS DE ENVÍO SI EL PRODUCTO ES FÍSICO
		=============================================*/

		$("#seleccionarPais").change(function(){

			$(".alert").remove();

			var pais = $(this).val();
			var tasaPais = $("#tasaPais").val();

			if(pais == tasaPais){

				var resultadoPeso = sumaTotalPeso * $("#envioNacional").val();
				
				if(resultadoPeso < $("#tasaMinimaNal").val()){

					$(".valorTotalEnvio").html($("#tasaMinimaNal").val());
					$(".valorTotalEnvio").attr("valor", $("#tasaMinimaNal").val());

				}else{

					$(".valorTotalEnvio").html(resultadoPeso);
					$(".valorTotalEnvio").attr("valor",resultadoPeso);
				}

			}else{

				var resultadoPeso = sumaTotalPeso * $("#envioInternacional").val();
				
				if(resultadoPeso < $("#tasaMinimaInt").val()){

					$(".valorTotalEnvio").html($("#tasaMinimaInt").val());
					$(".valorTotalEnvio").attr("valor",$("#tasaMinimaInt").val());

				}else{

					$(".valorTotalEnvio").html(resultadoPeso);
					$(".valorTotalEnvio").attr("valor",resultadoPeso);
				}

			}	

			sumaTotalCompra();
			pagarConPayu();

		})

	}else{

		$(".btnPagar").attr("tipo","virtual");
	}

})

/*=============================================
SUMA TOTAL DE LA COMPRA
=============================================*/
function sumaTotalCompra(){

	var sumaTotalTasas = Number($(".valorSubtotal").html())+ 
	                     Number($(".valorTotalEnvio").html())+ 
	                     Number($(".valorTotalImpuesto").html());


	$(".valorTotalCompra").html(Math.floor(sumaTotalTasas*100)/100);
	$(".valorTotalCompra").attr("valor",Math.floor(sumaTotalTasas*100)/100);

	localStorage.setItem("total",hex_md5($(".valorTotalCompra").html()));
}