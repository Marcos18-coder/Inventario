<?php /**
 *
 */
class Usuario
{
   private $id_Usuario;
   private $Nombre;
   private $Apellidos;
   private $Contraseña;
   private $Foto;
   private $conexion;
   private $usuario;

   public function FunctionMostrarinformacion()
   {
     $tabla="";
     $this->conexion->CrearConexion();

     $resultado=$this->conexion->ejecutarSQL("select *from usuario");
     while($row=$this->conexion->GetRows($resultado)){
      $tabla.='<tr>
      <td>'.$row[0].'</td>
      <td>'.$row[1].'</td>
      <td>'.$row[2].'</td>
      <td>'.$row[5].'</td>
      <td><img src="../img/'.$row[4].'"  width="60px"></img></td>
      </tr>';
     }
     return $tabla;
      }


  function __construct()
  {
    // code...
    include_once 'conexion.php';
    $this->conexion=new ConnectionMySQL();
  }

  public function Agregar_Usuario(){
    $this->conexion->CrearConexion();
    $this->getMaxId();
    $this->id_Usuario++;
    $this->conexion->ejecutarSQL("INSERT INTO usuario VALUES ('$this->id_Usuario','$this->Nombre','$this->Apellidos','$this->Contraseña','$this->Foto','$this->Usuario')");
  }

  public function getId_Usuario(){
		return $this->id_Usuario;
	}

	public function setId_Usuario($id_Usuario){
		$this->id_Usuario = $id_Usuario;
	}

	public function getNombre(){
		return $this->Nombre;
	}

	public function setNombre($Nombre){
		$this->Nombre = $Nombre;
	}

	public function getApellidos(){
		return $this->Apellidos;
	}

	public function setApellidos($Apellidos){
		$this->Apellidos = $Apellidos;
	}

	public function getContraseña(){
		return $this->Contraseña;
	}

	public function setContraseña($Contraseña){
		$this->Contraseña = $Contraseña;
	}


  public function getFoto(){
    return $this->Foto;
  }

  public function setFoto($Foto){
    $this->Foto = $Foto;
  }

  public function getUsuario(){
    return $this->Usuario;
  }

  public function setUsuario($Usuario){
    $this->Usuario = $Usuario;
  }

  public function subirImagen($archivoIm)
  {
   //Recogemos el archivo enviado por el formulario
   $archivo = $archivoIm['name'];
   //Si el archivo contiene algo y es diferente de vacio
   if (isset($archivo) && $archivo != "") {

     $this->Foto = $archivo;
      //Obtenemos algunos datos necesarios sobre el archivo
      $tipo = $archivoIm['type'];
      $tamano = $archivoIm['size'];
      $temp = $archivoIm['tmp_name'];
      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
     if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
        echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
        - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
     }
     else {
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor
        if (move_uploaded_file($temp, '../img/'.$archivo)) {
            //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
            chmod('../img/'.$archivo, 0777);
            //Mostramos el mensaje de que se ha subido co éxito
            echo '<div class="col-md-12 text-center"><b>Se ha subido correctamente la imagen.</b></div>';
            //Mostramos la imagen subida
            //echo '<p><img src="images/'.$archivo.'"></p>';
        }
        else {
           //Si no se ha podido subir la imagen, mostramos un mensaje de error
           echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
        }
      }
   }

  }

  function getMaxId()
  {
    $this->id_Usuario = $this->conexion->ejecutarSQL("SELECT MAX( id_Usuario ) AS id_Usuario
FROM usuario");
    if ($this->id_Usuario) {
      $row=$this->conexion->getRows($this->id_Usuario);
      $this->id_Usuario=$row[0];
    }
    return $this->id_Usuario;
  }
}
 ?>
