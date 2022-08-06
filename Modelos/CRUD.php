<?php 
	
	require "conexion_bd.php";

	class DatosModelo extends Conexion{

		static function LoginModelo($user,$pass){
			$consulta="SELECT Login, Contrasena FROM usuarios WHERE Login='".$user."' and Contrasena='".$pass."'";
			$prepare=Conexion::Conectar()->prepare($consulta, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
			$prepare->execute();
			return $prepare->fetch(PDO::FETCH_ASSOC);
		}


	}	

 ?>