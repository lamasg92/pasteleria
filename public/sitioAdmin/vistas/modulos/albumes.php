<div class="content-wrapper">
    
  <section class="content-header">

    <h2 class="text-center">ALBUMES</h2>
 
    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Álbumes</li>
      
    </ol>

  </section>

  <section class="content">

    <div class="box">    
            
      <div class="box-body">
           
       <div class="box-header with-border text-left">
         
            <button class="btn btn-primary" data-toggle="modal" name="agregarAlbum" data-target="#modalAgregarAlbum">

            Agregar álbum

          </button>
      </div>

      <div class="box-body">
         
        <table class="table table-striped table-bordered dt-responsive tablaAlbumes" width="100%">

          <thead>
            
            <tr>
              <th style="width:10px">#</th>
              <th>Álbum</th>
              <th>Estado</th>
              <th>Acción</th>
              
            </tr>

          </thead>

        </table>

      </div>

      </div>
    </div>
  </section>
  </div>

<?php
require "albumesModales/crearAlbum.modal.php";
require "albumesModales/editarAlbum.modal.php";

?> 