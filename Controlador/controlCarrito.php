<?php
session_start();
var_dump($_SESSION['carritoControl']);
$VentaJsn=$_SESSION['carritoControl'];

include_once '../Modelos/Venta.php';
include_once '../Modelos/Detalle_Venta.php';

$Venta=new Venta();
$detalleVenta=new DetalleVenta();

$Venta->Agregar_Venta();
for ($i=0; $i <sizeof($VentaJsn->productos) ; $i++) {
  $detalleVenta->setId_Producto($VentaJsn->productos[$i]->id_Producto);
  $detalleVenta->setId_Venta($Venta->getId_Venta());
  $detalleVenta->setCantidad_Venta($VentaJsn->productos[$i]->cantidad);
  $detalleVenta->Agregar_DetalleVenta();
}
header ("Location: ../Vistas/home.php?accion=addVenta");
 ?>
