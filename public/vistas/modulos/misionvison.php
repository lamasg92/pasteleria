<section class="aboutus" id="misionvision"  >
	<div class="container">

		<!--inicio mision y vision-->

		<div class="heading text-center">
			<img class="dividerline" src="vistas/img/sep2.jpeg" alt="">
			<h2> Misión y Visión</h2>
			<img class="dividerline" src="vistas/img/sep2.jpeg" alt="">
		</div>			
		<div class="row">
			<div class="col-md-12">
				<div class="papers text-center">
					<div class="row">
					 <?php
        				$info = ControladorSitio::ctrMostrarIdCorporativa();

        				echo '<div  class="col-lg-6">
								 <h3 class="notopmarg nobotmarg">Mision</h3>
								 <h5> '.$info[0]["descripcion_ic"].'</h5>

							 </div>

							 <div  class="col-lg-6">
								 <h3 class="notopmarg nobotmarg">Visión</h3>
								 <h5> '.$info[1]["descripcion_ic"].'</h5>

							 </div>

			    			 
			    			 ';    
					?>
						
					</div>	
				</div>
			</div>
		</div>	
    <!--fin mision y vision-->

    
	</div>
</section>
