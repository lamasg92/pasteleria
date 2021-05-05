<!--=====================================
MODAL AGREGAR ALBUM
======================================-->

<div id="modalAgregarAlbum" class="modal fade" role="dialog">
  
  <div class="modal-dialog">
    
    <div class="modal-content">

      <form method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        
        <div class="modal-header" style="background:#FF3255; color:white">
          
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
          <h4 class="modal-title">Agregar Álbum</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">
          
          <div class="box-body">


             <!--=====================================
            AGREGAR ALBUM
            ======================================-->

              <div class="form-group">
              
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <input type="text" class="form-control input-lg validarAlbum tituloAlbum" placeholder="Ingresar nombre del álbum" name="tituloAlbum" required> 
               

              </div> 

            </div>
            <!---------------------------------------------------------------------------------------------->

          </div>
        </div>

       <!--=====================================
        PIE DEL MODAL
        ======================================-->
      

       
        <div class="modal-footer">
          
          <button type="button" class="btn btn-primary pull-left" name="agregar" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar</button>

        </div>

      </form>
            <?php

        
          $crearAlbum = new ControladorAlbumes();
          $crearAlbum -> ctrCrearAlbum();

           ?>

          </div>
      </div>
</div>
