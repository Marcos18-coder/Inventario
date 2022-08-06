<?php
session_start();
var_dump($_SESSION['productos_de_compra']);
$CompraJsn=$_SESSION['productos_de_compra'];

include_once '../Modelos/Compra.php';
include_once '../Modelos/Detalle_Compra.php';

$Compra=new Compra();
$detalleCompra=new Detalle_Compra();


$Compra->Agregar_Compra();
for ($i=0; $i <sizeof($CompraJsn->productos) ; $i++) {
  $detalleCompra->setId_Compra($Compra->getId_Compra());
  $detalleCompra->setId_Producto($CompraJsn->productos[$i]->id_Producto);
  $detalleCompra->setId_Proveedor($CompraJsn->productos[$i]->idProveedor);
  $detalleCompra->setPrecio_Costo($CompraJsn->productos[$i]->Precio_adquisicion);
  $detalleCompra->setCantidad_Compra($CompraJsn->productos[$i]->adquiridos);
  $detalleCompra->Agregar_DetalleCompra();

}
header ("Location: ../Vistas/home.php?accion=addCompra");

 ?>
