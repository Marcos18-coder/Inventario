<?php /**
 *
 */
class Producto
{
  private $id_Producto;
  private $Nombre;
  private $Descripcion;
  private $Precio;
  private $Existencia;
  private $Imagen;
  private $conexion;

  public function FunctionMostrarinformacion2()
  {
    $tabla="";
    $this->conexion->CrearConexion();

    $resultado=$this->conexion->ejecutarSQL("select *from producto");
    while($row=$this->conexion->GetRows($resultado)){
     $tabla.='<tr>
     <td>'.$row[0].'</td>
     <td>'.$row[1].'</td>
     <td>'.$row[2].'</td>
     <td>'.$row[3].'</td>
     <td>'.$row[4].'</td>
     <td><img src="../img/'.$row[5].'"  width="60px"></img></td>
     </tr>';
    }
    return $tabla;
     }

     public function getInfoProductoByCod($_Cod)
     {
       $this->conexion->CrearConexion();
       $resultado=$this->conexion->ejecutarSQL("select *from producto where id_Producto='$_Cod'");
       while($row=$this->conexion->GetRows($resultado)){
         $this->id_Producto=$row[0];
         $this->Nombre=$row[1];
         $this->Descripcion=$row[2];
         $this->Precio=$row[3];
         $this->Existencia=$row[4];
         $this->Imagen=$row[5];
       }
        }

  function __construct()
  {
    // code...
    include_once 'conexion.php';
    $this->conexion=new ConnectionMySQL();
  }

  public function Agregar_Producto(){
    $this->conexion->CrearConexion();
    $this->getMaxId();
    $this->id_Producto++;
    $this->conexion->ejecutarSQL("INSERT INTO `producto`(`id_Producto`, `Nombre`, `Descripcion`, `Precio`, `Existencia`, `Imagen`) VALUES ('$this->id_Producto','$this->Nombre','$this->Descripcion','$this->Precio','$this->Existencia','$this->Imagen')");
    var_dump($this->conexion->conn->error);

  }

  public function getId_Producto(){
		return $this->id_Producto;
	}

	public function setId_Producto($id_Producto){
		$this->id_Producto = $id_Producto;
	}

	public function getNombre(){
		return $this->Nombre;
	}

	public function setNombre($Nombre){
		$this->Nombre = $Nombre;
	}

	public function getDescripcion(){
		return $this->Descripcion;
	}

	public function setDescripcion($Descripcion){
		$this->Descripcion = $Descripcion;
	}

	public function getPrecio(){
		return $this->Precio;
	}

	public function setPrecio($Precio){
		$this->Precio = $Precio;
	}

	public function getExistencia(){
		return $this->Existencia;
	}

	public function setExistencia($Existencia){
		$this->Existencia = $Existencia;
	}


  public function subirImagen($archivoIm)
  {
   //Recogemos el archivo enviado por el formulario
   $archivo = $archivoIm['name'];
   //Si el archivo contiene algo y es diferente de vacio
   if (isset($archivo) && $archivo != "") {

     $this->Imagen = $archivo;
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
    $this->id_Producto = $this->conexion->ejecutarSQL("SELECT MAX( id_Producto ) AS id_Producto
FROM producto");
    if ($this->id_Producto) {
      $row=$this->conexion->getRows($this->id_Producto);
      $this->id_Producto=$row[0];
    }
    return $this->id_Producto;
  }





  public function mostrarInfo1()
  {
    $tabla="";
    $this->conexion->CrearConexion();

    $resultado=$this->conexion->ejecutarSQL("select *from producto");
    while($row=$this->conexion->GetRows($resultado)){
     $tabla.='<tr>
     <td>'.$row[0].'</td>
     <td>'.$row[1].'</td>
     <td>'.$row[2].'</td>
     <td>'.$row[3].'</td>
     <td>'.$row[4].'</td>
     <td><img src="../img/'.$row[5].'"  width="60px"></img></td>
     <td> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ModalDetalles" onclick="mostrarDetalles('.$row[0].','.'\''.$row[1].':: '.$row[2].'\''.')" >Detalles</button> </td>

     </tr>';
    }
    return $tabla;
     }






}
 ?>
