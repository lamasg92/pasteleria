/*=============================================
REVISAR SI LA CATEGORÍA YA EXISTE
=============================================*/

$(".validarCategoria").change(function(){

	$(".alert").remove(); //quitamos la case alert q hace aparecer el cartel

	var categoria = $(this).val();//obtenemos el valor del campo tituloCategoria
	 console.log("categoria", categoria);

	var datos = new FormData();
	datos.append("validarCategoria", categoria);

	$.ajax({
	    url:"ajax/categorias.ajax.php",
	    method:"POST",
	    data: datos,
	    cache: false,
	    contentType: false,
	    processData: false,
	    dataType: "json",
	    success:function(respuesta){
	    	
	    	 console.log("respuesta", respuesta);

	    	if(respuesta){

             //despues de la etiqueta padre de donde esta la clase validarCategoria colocar el cartel
	    		$(".validarCategoria").parent().after('<div class="alert alert-warning">Esta categoría ya existe</div>')
	    		$(".validarCategoria").val(""); //vaciamos el campo de categoria
	    	}   

	    }

	  })
});
