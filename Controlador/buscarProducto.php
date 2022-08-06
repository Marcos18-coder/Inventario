<?php
session_start();
include_once '../Modelos/Producto.php';
$producto=new Producto();
$producto->getInfoProductoByCod($_POST['cod']);
$produc=json_decode('{
  "id_Producto":"'.$producto->getId_Producto().'",
  "Nombre":"'.$producto->getNombre().'",
  "Descripcion":"'.$producto->getDescripcion().'",
  "Precio":"'.$producto->getPrecio().'",
  "Existencia":"'.$producto->getExistencia().'"
}');
$Tabla="";

if ($produc->id_Producto!="") {

  $encontrado=false;
  $indexEncontrado=0;
  for ($i=0; $i < sizeof($_SESSION['carritoControl']->productos) && $encontrado!=true ; $i++) {
    // Buscar si el producto ya existe
    if ($_SESSION['carritoControl']->productos[$i]->id_Producto==$produc->id_Producto) {
      $encontrado=true;
      $indexEncontrado=$i;
    }
  }

  if ($encontrado==true) {
    $sumaCantida=$_SESSION['carritoControl']->productos[$indexEncontrado]->cantidad+1;
    $_SESSION['carritoControl']->productos[$indexEncontrado]->cantidad=$sumaCantida;
  }else {
    $produc->cantidad=1;
    $_SESSION['carritoControl']->productos[sizeof($_SESSION['carritoControl']->productos)]=$produc;
  }

  //var_dump($_SESSION['carritoControl']);

  // recorrer el json y hacer una tabla


  $JSONCArrrito=$_SESSION['carritoControl'];
  $CostoTotal=0;
  for ($i=0; $i <sizeof($JSONCArrrito->productos) ; $i++) {
    $Tabla.='
    <tr>
      <td>'.$JSONCArrrito->productos[$i]->id_Producto.'</td>
      <td>'.$JSONCArrrito->productos[$i]->Nombre.'</td>
      <td>'.$JSONCArrrito->productos[$i]->Descripcion.'</td>
      <td>'.$JSONCArrrito->productos[$i]->Precio.'</td>
      <td>'.$JSONCArrrito->productos[$i]->cantidad.'</td>
      <td>'.$JSONCArrrito->productos[$i]->cantidad*$JSONCArrrito->productos[$i]->Precio.'</td>
    </tr>
    ';

    $CostoTotal+=$JSONCArrrito->productos[$i]->cantidad*$JSONCArrrito->productos[$i]->Precio;
  }

  $Tabla.='
  <tr>
  <th colspan="5" class="text-right">Costo total</th>
  <th>'.$CostoTotal.'</th>
  </tr>
  ';


}
echo $Tabla;

 ?>
