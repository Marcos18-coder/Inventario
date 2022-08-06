<?php
  class ModeloEnlaces{
  	STATIC function Enlaces($Enlaces){
  		if(
  			$Enlaces=="Inicio"||
  			$Enlaces=="DarAltaArticulos"||
  			$Enlaces=="DarBajaArticulos"||
  			$Enlaces=="AgregarUsuario"||
        $Enlaces=="Articulos"||
        $Enlaces=="AgregarArticulos"||
        $Enlaces=="Proveedores"||
        $Enlaces=="AgregarProveedor"||
        $Enlaces=="Usuarios"||
        $Enlaces=="IconoUsuario"||
        $Enlaces=="addVenta"||
        $Enlaces=="addCompra"||
        $Enlaces=="entradasSalidas"



  		){
  			$Enlaces="Modulos/".$Enlaces.".php";
  			return $Enlaces;
 		 }else{

  	}
  }

  public function EnlacesFin($Enlaces){
  	$Modelos="../".$Enlaces.".php";
  	return $Modelos;
  }
 }
?>
