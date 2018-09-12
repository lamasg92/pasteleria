<section class="compras" id="compras">
  <div class="container">
    <div class="heading text-center">
      
      <h2>Mis Compras</h2>
    </div>

  </section>
<hr>
<?php

               $item = "id_usuario" ;
                $valor = $_SESSION['id'];
                $detalles = ControladorCompras::ctrMostrarDetalleCompras($item,$valor);


?>

<h2 class="text-center">Compras Pendientes</h2>
  <section class="content">
    <!--========================Compras pendientes=====================-->


    <div class="box">    
           
      

      <table class="table table-striped table-bordered dt-responsive" width="100%">

          <thead>
            
            <tr>
              
     
              <th style="width:10px">#</th>
              <th>Fecha de Reserva</th>
              <th>Producto</th>
              <th>Cantidad</th>
              <th>Subtotal</th>
              <th>Fecha de Entrega</th>
              
            </tr>

          </thead>
          <tbody>
            
            <?php


                  
                     foreach ($detalles as $key => $detalle) {
                          if(($detalle["estado_reserva"] == "pendiente") ){
                                echo '<tr><th>';
                                echo $detalle['id_carrito'].'</th><th>';
                                echo $detalle['fecha_pedido'].'</th><th>';
                               
                                echo $detalle['nombre'].'</th><th>';
                             
                                echo $detalle['cantidad'].'</th><th>';
                                echo $detalle['subtotal'].'</th><th>';
                                echo $detalle['fecha_reserva'].'</th><th>';
                             
                                echo '</th></tr>';
                      }
            }
          ?> 

         </tbody>
      </table>
    </div>


<hr>

<h2 class="text-center">Compras Parciales</h2>
<h2 class="text-center">50% abonadas</h2>

    <!--========================Compras Parciales=====================-->
    <div class="box">    
            
      

      <table  class="table table-striped table-bordered dt-responsive" width="100%">

          <thead>
            
            <tr>
              
              <th style="width:10px">#</th>
              <th>Fecha de Reserva</th>
              
              <th>Producto</th>
              <th>Cantidad</th>
              <th>Subtotal</th>
              <th>Fecha de Entrega</th>
            

            </tr>

          </thead>
          <tbody bgcolor="white">
            
            <?php


                  
                     foreach ($detalles as $key => $detalle) {
                          if(($detalle["estado_reserva"] == "parcial") ){
                                echo '<tr><th>';
                                echo $detalle['id_carrito'].'</th><th>';
                                echo $detalle['fecha_pedido'].'</th><th>';
                               
                                echo $detalle['nombre'].'</th><th>';
                             
                                echo $detalle['cantidad'].'</th><th>';
                                echo $detalle['subtotal'].'</th><th>';
                                echo $detalle['fecha_reserva'].'</th><th>';
                             
                                echo '</th></tr>';
                      }
            }
          ?>

         </tbody>
      </table>
    </div>

<hr>

<h2 class="text-center">Compras Entregadas</h2>

    <!--========================Compras Entregadas=====================-->
    <div class="box">    
            
      

      <table class="table table-striped table-bordered dt-responsive" width="100%">

          <thead>
            
            <tr>
              
     
              <th style="width:10px">#</th>
              <th>Fecha de Reserva</th>
              <th>Producto</th>
              <th>Cantidad</th>
              <th>Subtotal</th>
              <th>Fecha de Entrega</th>
              
            </tr>

          </thead>
          <tbody>
            
            <?php


                  
                     foreach ($detalles as $key => $detalle) {
                          if(($detalle["estado_reserva"] == "entregado") ){
                                echo '<tr><th>';
                                echo $detalle['id_carrito'].'</th><th>';
                                echo $detalle['fecha_pedido'].'</th><th>';
                               
                                echo $detalle['nombre'].'</th><th>';
                             
                                echo $detalle['cantidad'].'</th><th>';
                                echo $detalle['subtotal'].'</th><th>';
                                echo $detalle['fecha_reserva'].'</th><th>';
                             
                                echo '</th></tr>';
                      }
            }
          ?>

         </tbody>
      </table>
    </div>
</section>
  </div>
 