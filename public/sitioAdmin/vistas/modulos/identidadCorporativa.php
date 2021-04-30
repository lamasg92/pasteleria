<div class="content-wrapper">
    
  <section class="content-header">

    <h2 class="text-center">PASTELERIA DOÑA LUPE</h2>
 
    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Identidad Corporativa</li>
      
    </ol>

  </section>

  <section class="content">
    <!--========================Contacto=====================-->
    
    <div class="box">
     
      <table class="table table-striped table-bordered dt-responsive" width="100%">

          <thead>
            
            <tr>
              
              <th style="width:10px">#</th>
              <th>   ... </th>
              <th>Descripción </th>
              <th>Acción</th>

            </tr>

          </thead>
          <tbody>
            <?php
              
              $lista = ControladorIdCorporativa::ctrMostrarIdCorporativa();

              foreach ($lista as $item) {

                echo '<tr><th>';
                echo $item['id_ic'].'</th><th>';
                echo $item['nombre_ic'].'</th><th>';
                echo $item['descripcion_ic'].'</th><th>';
                echo ' <div class="box-header with-border text-right">
                  <button class="btn btn-primary btnEditarIdCorporativa" idCorporativa="'.$item['id_ic'].'" data-toggle="modal" data-target="#modalEditarIdCorporativa'.$item['id_ic'].'"> Cambiar información</button>
                   </div>';

                require "identidadCorporativaModales/editarIdentidadCorporativa.modal.php";
               
               

                echo '</th></tr>';
              }
              ?>
         </tbody>
      </table>
    </div>
      
</section>

  </div>
<?php
//require "contactosModales/contacto.modal.php";
?>  