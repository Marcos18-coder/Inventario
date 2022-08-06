<?php 
 	 	class Conexion{
 		static function Conectar(){
 			$link=new PDO('mysql:host=localhost; dbname=inventario_bd','root','vertrigo');
 			return $link;
 		}
 	}

 	/*$bd=new Conexion();
 	$bd->Conectar();

 	if (!$bd) {
 		echo "no conecto";
 	}else
 	{
 		echo "conecto";
 		$bd=new Conexion();
 		$bd->Conectar();
 		var_dump($bd);
 	}*/

?>