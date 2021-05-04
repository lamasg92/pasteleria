<!--=====================================
MODAL AGREGAR IMAGEN
======================================-->

<div id="modalAgregarImagen" class="modal fade" role="dialog">
  
  <div class="modal-dialog">
    
    <div class="modal-content">

      <form method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        
        <div class="modal-header" style="background:#FF3255; color:white">
          
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
          <h4 class="modal-title">Agregar imagen a galeria</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">
          
          <div class="box-body">

            <!--=====================================
            ENTRADA PARA SELECCIONAR LA CATEGORÍA
            ======================================-->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <select class="form-control input-lg seleccionarCategoria" name="categoria" id="categoria" required> 
                  <option value="">Selecionar ambum</option>

                  <?php

                  $item = null;
                  $valor = null;

                  $categorias = ControladorAlbumes::ctrMostrarAlbumes($item, $valor);

                  foreach ($categorias as $key => $value) {
                    
                    echo '<option value="'.$value["id_album"].'">'.$value["nombre_album"].'</option>';
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

                <textarea type="text" maxlength="500" rows="3" class="form-control input-lg descripcionImagen" placeholder="Ingresar descripción" name="descripcionImagen" required></textarea>

              </div>

            </div>



            <!--=====================================
            AGREGAR IMAGEN
            ======================================-->

            <div class="form-group">
              
              <div class="panel">SUBIR IMAGEN</div>

              <input type="file" class="foto" name="foto" required>

              <img src="" class="img-thumbnail previsualizarFoto" width="100%">

            </div>



          </div>
        </div>

       <!--=====================================
        PIE DEL MODAL
        ======================================-->
      

       
        <div class="modal-footer">
          
          <button type="button" class="btn btn-default pull-left" name="agregar" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar</button>

        </div>

      </form>
            <?php

        
          $crearImagen = new ControladorImagenes();
          $crearImagen -> ctrCrearImagen();

           ?>

          </div>
      </div>
</div>
