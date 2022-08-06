<?php
include_once '../Modelos/Detalle_Compra.php';
include_once '../Modelos/Detalle_Venta.php';

$detalleCompra=new Detalle_Compra();
$detalleVenta=new DetalleVenta();


 ?>


 <ul class="nav nav-tabs" id="myTab" role="tablist">
   <li class="nav-item">
     <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Entradas</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Salidas</a>
   </li>
 </ul>
 <div class="tab-content" id="myTabContent">
   <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

     <table class="table table-hover table-striped">
       <thead class="thead-light">
         <tr>
           <th scope="col">Código compra</th>
           <th scope="col">Fecha</th>
           <th scope="col">Proveedor</th>
           <th scope="col">Costo</th>
           <th scope="col">Cantidad Adquirida</th>
           <th scope="col">Precio Total</th>
         </tr>
       </thead>
       <tbody>
         <?php

         $detalleCompra->setId_Producto($_POST['idPro']);
         echo $detalleCompra->mostrarInfo1();

          ?>
       </tbody>
     </table>

   </div>
   <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">


     <table class="table table-hover table-striped">
       <thead class="thead-light">
         <tr>
           <th scope="col">Código</th>
           <th scope="col">Codigo venta</th>
           <th scope="col">Fecha</th>
           <th scope="col">Cantidad vendida</th>
         </tr>
       </thead>
       <tbody>

         <?php

         $detalleVenta->setId_Producto($_POST['idPro']);
         echo $detalleVenta->mostrarInfo1();

          ?>
       </tbody>
     </table>


   </div>
 </div>
