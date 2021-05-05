<div class="content-wrapper">
    
  <section class="content-header">

    <h2 class="text-center">GALERIA DE IMAGENES</h2>
 
    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Galeria</li>
      
    </ol>

  </section>

  <section class="content">

    <div class="box">    
            
      <div class="box-body">
           
       <div class="box-header with-border text-left">
         
            <button class="btn btn-primary" data-toggle="modal" name="agregarImagen" data-target="#modalAgregarImagen">

            Agregar Imagen

          </button>
      </div>

      <div class="box-body">
         
        <table class="table table-striped table-bordered dt-responsive tablaGaleria" width="100%">

          <thead>
            
            <tr>
              <th style="width:10px">#</th>
              <th>Imagen</th>
              <th>Descripción</th>
              <th>Categoria</th>
              <th>Creado</th>
              <th>Estado</th>
              <th>Acciones</th>
            </tr>

          </thead>

        </table>

      </div>

      </div>
    </div>
  </section>
  </div>

<?php
require "imagenesModales/crearImagen.modal.php";
//require "productosModales/editarProducto.modal.php";
?> 