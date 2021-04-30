<!--=====================================
MODAL CAMBIAR IDENTIDAD CORPORATIVA
======================================-->

<?php echo '<div id="modalEditarIdCorporativa'.$item['id_ic'].'" class="modal fade" role="dialog">'; ?>
  
  <div class="modal-dialog">
    
    <div class="modal-content">

      <form method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        
        <div class="modal-header" style="background:#3c8dbc; color:white">
          
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
          <h4 class="modal-title">Cambiar información</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">
          
          <div class="box-body">
             
        <?php echo '<center><h2>'.$item['nombre_ic'].'</h2></center>';?>
            <!--=====================================
                ENTRADA EDITAR ENLACE RED SOCIAL
                ======================================-->

                <div class="form-group">
                  
                  <h2>Descripción: </h2>

                  <div class="input-group">

                    <input name="id_ic" type="hidden" value="<?php echo $item['id_ic'];?>"> 
                    <span class="input-group-addon"></i></span>


                     <textarea  class="form-control input-lg " name="descripcion_ic"  rows="15" required> <?php echo $item['descripcion_ic'];?></textarea>

                  </div> 

                </div>

               
       <!--=====================================
        PIE DEL MODAL
        ======================================-->
      

       
        <div class="modal-footer">
          
          <button type="button" class="btn btn-primary  pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </div>

      </form>

              <?php

                
                  $editarIdCorporativa= new ControladorIdCorporativa();
                  $editarIdCorporativa-> ctrEditarIdCorporativa();





              ?>

          </div>
      </div>
</div>