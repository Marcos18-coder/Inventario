<?php 
	class Control_General{
		public function EnlaceInicio(){
			include "Modulos/Inicio.php";
		}
		public function EnlacesControlContenido(){
			$enlacesControlador=$_GET["accion"];
			$respuesta=ModeloEnlaces::Enlaces($enlacesControlador);
			include $respuesta;
		}

		public function LoginControl(){
			session_start();
			$error;

			if(isset($_POST['entrar'])){
				if(empty($_POST['txtUsuario'])||
					empty($_POST['txtPassword'])){
					//mensaje de datos vacios
					$error="El Usuario o la Contraseña es Vacio";
				echo $error;

				}else{
					//revoje datos de los input y realiza kla consulta y luego otro if para para acceder a home
					$User=$_POST['txtUsuario'];
					$Contra=$_POST['txtPassword'];
					$_SESSION['usuario']=$User;


					$respuesta=DatosModelo::LoginModelo($User, $Contra);

					$res=$respuesta['Login']['Contrasena'];

					if ($res==true) {
						header("location: Vistas/home.php");
					}else{
						$error= "Error al conectar";
						echo $error;
					}



				}
			}else{

				$error = "Ingresar Datos Por Favor";
				echo $error;
				
		
			}
		}
	}
?>