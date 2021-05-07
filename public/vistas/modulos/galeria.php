<section class="catalogo" id="catalogo">
	<div class="container">
		<div class="text-center">
			<h2 class="intro wow zoomIn" wow-data-delay="0.4s" wow-data-duration="0.9s">Galeria de imagenes</h2>
		</div>

		<?php
			$item = null;
			$valor = null;
			$albumes = ControladorGaleria::ctrMostrarALbumes($item,$valor);
			
			if (!$albumes){
			   echo '<div class="col-xs-12 error404 text-center">

					   <h1><small>¡Oops!</small></h1>

					   <h2>Aún no hay albumes</h2>

					 </div>';
			}else{		
			
				foreach ($albumes as $key => $value) {

					if($value["estado_album"] != "inactivo"){
						 
						echo '<div class="heading text-center">
								 <h2>'.$value["nombre_album"].'</h2>
							   </div>';
						$itemI = "categoria";
						$valorI = $value["id_album"];
						$imagenes = ControladorGaleria::ctrMostrarImagenes($itemI,$valorI);


			echo '<div class="banner">
				<div id="carousel-'.$value["nombre_album"].'" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
					<div align="center">
						<div class="carousel-inner row justify-content-center">';


			$primero = 1;
			foreach($imagenes as $imagen){
				if($imagen["estado"] != "inactivo"){
					if($primero==1){
						echo '<div class="item active text-center">';
						$primero = 0;
					}
					else{
						echo '<div class="item text-center">';
					}
					echo '<img src="'.$admin.$imagen["imagen"].'">
					  <div class="carousel-caption">   
	    				<b class="text-center" style="color:#FFFFFF";>'.$imagen["descripcion"].'</b>
	  					</div>
					</div>';
				}
			}

			echo			'</div>
		<a class="left carousel-control" href="#carousel-'.$value["nombre_album"].'" data-slide="prev">
		 	<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-'.$value["nombre_album"].'" data-slide="next">
		 	<span class="glyphicon glyphicon-chevron-right"></span>
		</a>

					</div>
			  	</div>
			</div>';


					}
				}
			}
		?>
											
		 <br>

	</div>

	</section>