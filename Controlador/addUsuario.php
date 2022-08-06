<?php
var_dump($_POST);

include_once '../Modelos/Usuario.php';
$usuario=new Usuario();
$usuario->setNombre($_POST['Nombre']);
$usuario->setApellidos($_POST['Apellidos']);
$usuario->setUsuario($_POST['Usuario']);
$usuario->setContraseña($_POST['Contrasenia']);
$usuario->setFoto($_FILES['Fothograia']);
$usuario->subirImagen($_FILES['Fothograia']);
$usuario->Agregar_Usuario();

header ("Location: ../Vistas/home.php?accion=Usuarios");

 ?>
