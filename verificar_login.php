<?php
if (isset($_POST['entrar'])) {
  include_once 'Modelos/conexion.php';
  $conexion=new ConnectionMySQL();
  $conexion->CrearConexion();

  $usuario=$_POST['usuario'];
  $passwor=$_POST['password'];

  $Resultado=$conexion->ejecutarSQL("SELECT * FROM usuario where Usuario='$usuario' and Contrasenia='$passwor';");
  if ($fila = $conexion->GetRows($Resultado)) {
    echo 'Accedio';
    header ("Location: Vistas/home.php");
  }else {
    echo 'Rechaz';
    header ("Location: index.php?_err");
  }
}

 ?>
