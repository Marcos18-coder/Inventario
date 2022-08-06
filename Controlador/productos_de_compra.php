<?php
session_start();
//
// var_dump($_POST);
include_once '../Modelos/Producto.php';
$producto=new Producto();
$producto->getInfoProductoByCod($_POST['cod']);
$produc=json_decode('{
  "id_Producto":"'.$producto->getId_Producto().'",
  "Nombre":"'.$producto->getNombre().'",
  "Descripcion":"'.$producto->getDescripcion().'",
  "NombreProveedor":"'.$_POST['Proveedor'].'",
  "idProveedor":"'.$_POST['idProveedor'].'",
  "Precio_adquisicion":"'.$_POST['precio_unitario'].'",
  "adquiridos":"0"
}');

$Tabla="";

if ($produc->id_Producto!="") {
  $encontrado=false;
  $indexEncontrado=0;
  for ($i=0; $i < sizeof($_SESSION['productos_de_compra']->productos) && $encontrado!=true ; $i++) {
    // Buscar si el producto ya existe
    if ($_SESSION['productos_de_compra']->productos[$i]->id_Producto==$produc->id_Producto) {
      $encontrado=true;
      $indexEncontrado=$i;
    }
  }


  if ($encontrado==true) {
    $sumaCantida=$_SESSION['productos_de_compra']->productos[$indexEncontrado]->adquiridos+$_POST['cantidad_adquirida'];
    $_SESSION['productos_de_compra']->productos[$indexEncontrado]->adquiridos=$sumaCantida;
  }else{
    $produc->adquiridos=$_POST['cantidad_adquirida'];
    $_SESSION['productos_de_compra']->productos[sizeof($_SESSION['productos_de_compra']->productos)]=$produc;
  }



  $JSONCArrrito=$_SESSION['productos_de_compra'];
  $CostoTotal=0;
  for ($i=0; $i <sizeof($JSONCArrrito->productos) ; $i++) {
    $Tabla.='
    <tr>
      <td>'.$JSONCArrrito->productos[$i]->id_Producto.'</td>
      <td>'.$JSONCArrrito->productos[$i]->NombreProveedor.'</td>
      <td>'.$JSONCArrrito->productos[$i]->Nombre.'</td>
      <td>'.$JSONCArrrito->productos[$i]->Descripcion.'</td>
      <td>'.$JSONCArrrito->productos[$i]->Precio_adquisicion.'</td>
      <td>'.$JSONCArrrito->productos[$i]->adquiridos.'</td>
      <td>'.$JSONCArrrito->productos[$i]->adquiridos*$JSONCArrrito->productos[$i]->Precio_adquisicion.'</td>
    </tr>
    ';

    $CostoTotal+=$JSONCArrrito->productos[$i]->adquiridos*$JSONCArrrito->productos[$i]->Precio_adquisicion;
  }

  $Tabla.='
  <tr>
  <th colspan="6" class="text-right">Costo total</th>
  <th>'.$CostoTotal.'</th>
  </tr>
  ';





}

echo $Tabla;

 ?>
