<?php
 var_dump($_POST);
 include_once '../Modelos/Proveedor.php';
 $proveedor=new Proveedor();
 $proveedor->setTelefono($_POST['telefono']);
 $proveedor->setDia_Entrega($_POST['fecha']);
 $proveedor->setDireccion($_POST['direccion']);
 $proveedor->setCorreo($_POST['correo']);
 $proveedor->setNombre($_POST['nombre']);
 $proveedor->setEmpresa($_POST['empresa']);
 $proveedor->Agregar_Proveedor();

header ("Location: ../Vistas/home.php?accion=Proveedores");

 ?>
