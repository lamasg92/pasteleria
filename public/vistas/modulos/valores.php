<section class="aboutus" id="valores"  >
	<div class="container">

<!--valores-->

       <div class="heading text-center">
			<img class="dividerline" src="vistas/img/sep2.jpeg" alt="">
			<h2> Valores del Negocio</h2>
			<img class="dividerline" src="vistas/img/sep2.jpeg" alt="">
		</div>			
		<div class="row">
			<div class="col-md-12">
				<div class="papers text-center">
					<div class="row">
					 <?php

					 	$info = ControladorSitio::ctrMostrarIdCorporativa();
        
                				echo '<div  class="col-lg-12">
								 <h5> Pastelería Doña Lupe se proyecta como organización empresarial estructurada en los siguientes valores:</h5>
								 <h5> '.nl2br($info[2]["descripcion_ic"]).'</h5>

							 </div>

							

			    			 
			    			 ';    
					?>
						
					</div>	
				</div>
			</div>
		</div>	

 <!--fin valores-->

</div>
</section>