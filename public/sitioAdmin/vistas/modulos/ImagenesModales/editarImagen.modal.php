<!--=====================================
MODAL EDITAR IMAGEN
======================================-->

<div id="modalEditarGaleria" class="modal fade" role="dialog">

  <div class="modal-dialog">
    
    <div class="modal-content">

      <form method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        
        <div class="modal-header" style="background:#FF3255; color:white">
          
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
          <h4 class="modal-title">Editar imagen</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">
          
          <div class="box-body">
             

           <!--=====================================
            IDENIFICADOR DELA IMAGEN
            ======================================-->

            <div class="form-group">
              
              <div class="input-group">

                <input type="hidden" class="idImagen" name="idImagen">

              </div> 

            </div>

              <!--=====================================
            ENTRADA PARA SELECCIONAR LA CATEGORÍA
            ======================================-->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <select class="form-control input-lg categoria" name="categoria" id="categoria" required>
                  
                  <option value="">Selecionar categoría</option>

                  <?php

                  $item = null;
                  $valor = null;

                  $categorias = ControladorAlbumes::ctrMostrarAlbumes($item, $valor);

                  foreach ($categorias as $key => $value) {
                    if ($value["estado_album"]!="inactivo"){
                      echo '<option value="'.$value["id_album"].'">'.$value["nombre_album"].'</option>';
                    }
                  }

                  ?>
  
                </select>

              </div>

            </div>

             <!--=====================================
            AGREGAR DESCRIPCIÓN
            ======================================-->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span> 

                <textarea type="text" maxlength="500" rows="3" class="form-control input-lg descripcionEditada" placeholder="Ingresar descripción" name="descripcionEditada"></textarea>

              </div>

            </div>


            <!--=====================================
            EDITAR ESTADO DE IMAGEN
            ======================================-->


            <div class="form-group">

              <div class="panel">ESTADO</div>
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                    <select class="form-control estadoImagen" name="estadoImagen">
                    <?php if (estadoImagen=='activo') { ?>
                          <option value="activo" >Activo</option>
                          <option value="inactivo" xselected >Inactivo</option>
                    <?php    } else {     ?>
                          <option value="activo" selected>Activo</option>
                          <option value="inactivo" >Inactivo</option>
                     <?php   }            ?>
                    </select>

                </div> 

            </div>


            <!--=====================================
            AGREGAR IMAGEN DEL IMAGEN
            ======================================-->

            <div class="form-group">
              
              <div class="panel">SUBIR NUEVA IMAGEN</div>

              <input type="file" class="foto" name="foto" >

              <input type="hidden" class="antiguaFoto" name="antiguaFoto">

              <img src="" class="img-thumbnail previsualizarFoto" width="100%">

            </div>



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

        
          $editarImagen = new ControladorImagenes();
          $editarImagen -> ctrEditarImagen();

           ?>

          </div>
      </div>
</div>