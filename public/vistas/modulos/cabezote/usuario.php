<!--=====================================
USUARIOS
======================================-->	
 
<!-- user-menu -->
<li class="dropdown user user-menu">

	<!-- dropdown-toggle -->
	<a href="#" class="dropdown-toggle" data-toggle="dropdown">

	   <?php

	        $item="id";
            $valor=$_SESSION["id"];
	
		echo '<img src="'.$_SESSION["foto"].'" class="user-image" alt="User Image" onerror=this.src="sitioAdmin/vistas/img/usuarios/default/anonymous.png" >'?>
		
		<span class="hidden-xs"><?php echo $_SESSION["nombre"]; ?></span>
	    
	</a>
	<!-- dropdown-toggle -->

	<!-- dropdown-menu -->
	<ul class="dropdown-menu">

		<li class="user-header center">
		   <?php
			echo '<img src="'.$_SESSION["foto"].'" class="img-circle" alt="User Image" onerror=this.src="sitioAdmin/vistas/img/usuarios/default/anonymous.png" >'
           ?>
			<p>
			<?php echo $_SESSION["nombre"]; ?>
			</p>

		
		</li>

		<li class="user-footer">
		
			<div class="pull-left">
				
				<a href="<?php echo $url;?>compras" class="btn btn-default btn-flat">Mis Compras</a>
				
			</div>
			

		</li>


		<li class="user-footer">
		
			<div class="pull-left">
				
				<a href="perfil" class="btn btn-default btn-flat">Perfil</a>
			
			</div>
			
			<div class="pull-right">
			
				<a href="salir" class="btn btn-default btn-flat">Salir</a>
			
			</div>
		</li>

	</ul>
	<!-- dropdown-menu -->

</li>
<!-- user-menu -->