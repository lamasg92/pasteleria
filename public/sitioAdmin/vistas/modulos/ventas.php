
<div class="content-wrapper">
    
  <section class="content-header">

    <h2 class="text-center">Mis Ventas</h2>
 
    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Mis Ventas</li>
      
    </ol>

  </section>

<!--========================Ventas pendientes=====================-->
  <section class="content">
 
    <div class="box">  
                <h2 class="text-center">Ventas Pendientes</h2>

            <input name="id_detalle_carrito" type="hidden" class=<?php $fecha_reserva ?>> 
        
             <table class="table table-striped table-bordered dt-responsive tablaVentasPendiente" width="100%">

                  <thead>
                    <tr>
                      <th style="width:10px">#</th>
                      <th>Fecha de Reserva</th>
                      <th>Cliente</th>
                      <th>Producto</th>
                      <th>Cantidad</th>
                      <th>Subtotal</th>
                      <th>Fecha de Entrega</th>
                      <th>Estado</th>
                      <th>Acción</th>
                    </tr>

                  </thead>
          
          </table>
         </div>
     </section>
  
   <section class="content">
 
    <div class="box">  
                <h2 class="text-center">Ventas Parciales</h2>
                 <h2 class="text-center">50% abonadas</h2>
      
             <table class="table table-striped table-bordered dt-responsive tablaVentasParcial" width="100%">

                  <thead>
                     <tr>
                      <th style="width:10px">#</th>
                      <th>Fecha de Reserva</th>
                      <th>Cliente</th>
                      <th>Producto</th>
                      <th>Cantidad</th>
                      <th>Subtotal</th>
                      <th>Fecha de Entrega</th>
                      <th>Estado</th>
                      <th>Acción</th>
                    </tr>
                  </thead>
          
          </table>
         </div>
     </section>

   <section class="content">
 
    <div class="box">  
                <h2 class="text-center">Ventas Entregadas</h2>
        
             <table class="table table-striped table-bordered dt-responsive tablaVentasEntregado" width="100%">

                  <thead>
                    <tr>
                      <th style="width:10px">#</th>
                      <th>Fecha de Reserva</th>
                      <th>Cliente</th>
                      <th>Producto</th>
                      <th>Cantidad</th>
                      <th>Subtotal</th>
                      <th>Fecha de Entrega</th>
                      <th>Estado</th>
                      <th>Acción</th>
                    </tr>
                  </thead>
          
          </table>
         </div>
     </section>

 <?php 

  $dire=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

  $componente=parse_url($dire);

  parse_str($componente['query'], $results);

  $fecha_reserva=$results['fecha_reserva'];
  
    ?>

   <input type="hidden" id="fecha_reserva" value="<?php echo $fecha_reserva; ?>">
  
  </div>


     


  <?php
//require "ventasModales/crearVenta.modal.php";
require "ventasModales/editarVenta.modal.php";
?> 

