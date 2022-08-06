<?php
 var_dump($_POST);
 include_once '../Modelos/Producto.php';
 $producto=new Producto();
 $producto->setNombre($_POST['Nombre']);
 $producto->setDescripcion($_POST['Descripcion']);
 $producto->setPrecio($_POST['Precio']);
 $producto->setExistencia($_POST['Existencia']);
 $producto->subirImagen($_FILES['Imagen']);
 $producto->Agregar_Producto();


header ("Location: ../Vistas/home.php?accion=Articulos");

 ?>
