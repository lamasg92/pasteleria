<!--=====================================
MODAL EDITAR ALBUM
======================================-->

<div id="modalEditarAlbum" class="modal fade" role="dialog">
  
  <div class="modal-dialog">
    
    <div class="modal-content">

      <form method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        
        <div class="modal-header" style="background:#FF3255; color:white">
          
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
          <h4 class="modal-title">Editar álbum</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">
          
          <div class="box-body">
             

           <!--=====================================
            ENTRADA DEL TITULO DEL ALBUM
            ======================================-->

            <div class="form-group">
              
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <input type="hidden" class="idAlbum" name="idAlbum">

                <input type="text" class="form-control input-lg validarAlbum tituloAlbum" placeholder="Ingresar nombre del Álbum" name="tituloAlbumEditado" required> 

              </div> 

            </div>

            <!--=====================================
            EDITAR ESTADO DE CATEGORIA
            ======================================-->


            <div class="form-group">

              <h3>Estado:</h3>
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                    <select class="form-control estadoAlbum" name="estadoAlbum">
                    <?php if (estadoAlbum=='activo') { ?>
                          <option value="activo" selected>Activo</option>
                          <option value="inactivo" >Inactivo</option>
                    <?php    } else {     ?>
                          <option value="activo" >Activo</option>
                          <option value="inactivo" selected>Inactivo</option>
                     <?php   }            ?>
                    </select>

                </div> 

            </div>

            <!--=====================================-->
          


          </div>
        </div>

       <!--=====================================
        PIE DEL MODAL
        ======================================-->
      

       
        <div class="modal-footer">
          
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </div>

      </form>
            <?php

        
          $editarAlbum = new ControladorAlbumes();
          $editarAlbum -> ctrEditarAlbum();

           ?>

          </div>
      </div>
</div>
