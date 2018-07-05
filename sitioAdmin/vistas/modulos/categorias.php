<div class="content-wrapper">
    
  <section class="content-header">

    <h2 class="text-center">CATEGORIAS</h2>
 
    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Categorias</li>
      
    </ol>

  </section>

  <section class="content">

    <div class="box">    
            
      <div class="box-body">
           
       <div class="box-header with-border text-left">
         
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">

            Agregar categoría

          </button>
      </div>

       <div class="box-body">
         
        <table class="table table-striped table-bordered dt-responsive tablaCategorias" width="100%">

          <thead>
            
            <tr>
              
              <th style="width:10px">#</th>
              <th>Categoría</th>
              <th>Estado</th>
            </tr>

          </thead>

        </table>

      </div>

      </div>
    </div>
  </section>
  </div>

  <!--=====================================
MODAL AGREGAR CATEGORIA
======================================-->

<div id="modalAgregarCategoria" class="modal fade" role="dialog">
  
  <div class="modal-dialog">
    
    <div class="modal-content">

      <form method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        
        <div class="modal-header" style="background:#3c8dbc; color:white">
          
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
          <h4 class="modal-title">Agregar categoría</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">
          
          <div class="box-body">
             

           <!--=====================================
            ENTRADA DEL TITULO DE LA CATEGORÍA
            ======================================-->

            <div class="form-group">
              
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <input type="text" class="form-control input-lg validarCategoria tituloCategoria" placeholder="Ingresar Categoria" name="tituloCategoria" required> 

              </div> 

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

        
          $crearCategoria = new ControladorCategorias();
          $crearCategoria -> ctrCrearCategoria();

           ?>

          </div>
      </div>
</div>
