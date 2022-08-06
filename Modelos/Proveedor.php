<?php /**
 *
 */
class Proveedor
{
  private $id_Proveedor;
  private $Telefono;
  private $Dia_Entrega;
  private $Direccion;
  private $Correo;
  private $Nombre;
  private $Empresa;
  private $conexion;

  function __construct()
  {
    // code...
    include_once 'conexion.php';
    $this->conexion=new ConnectionMySQL();
  }

  public function FunctionMostrarinformacion3()
  {
    $tabla="";
    $this->conexion->CrearConexion();

    $resultado=$this->conexion->ejecutarSQL("select *from proveedor");
    while($row=$this->conexion->GetRows($resultado)){
     $tabla.='<tr>
     <td>'.$row[0].'</td>
     <td>'.$row[1].'</td>
     <td>'.$row[2].'</td>
     <td>'.$row[3].'</td>
     <td>'.$row[4].'</td>
     <td>'.$row[5].'</td>
     <td>'.$row[6].'</td>
     </tr>';
    }
    return $tabla;
     }

  public function Agregar_Proveedor(){
    $this->conexion->CrearConexion();
    $this->getMaxId();
    $this->id_Proveedor++;
    $this->conexion->ejecutarSQL("INSERT INTO `proveedor`(`id_Proveedor`, `Telefono`, `Dia_Entrega`, `Direccion`, `Correo`, `Nombre`, `Empreza`) VALUES ('$this->id_Proveedor','$this->Telefono','$this->Dia_Entrega','$this->Direccion','$this->Correo','$this->Nombre','$this->Empresa')");
  }


  public function getId_Proveedor(){
		return $this->id_Proveedor;
	}

	public function setId_Proveedor($id_Proveedor){
		$this->id_Proveedor = $id_Proveedor;
	}

	public function getTelefono(){
		return $this->Telefono;
	}

	public function setTelefono($Telefono){
		$this->Telefono = $Telefono;
	}

	public function getDia_Entrega(){
		return $this->Dia_Entrega;
	}

	public function setDia_Entrega($Dia_Entrega){
		$this->Dia_Entrega = $Dia_Entrega;
	}

	public function getDireccion(){
		return $this->Direccion;
	}

	public function setDireccion($Direccion){
		$this->Direccion = $Direccion;
	}

  public function getCorreo(){
    return $this->Correo;
  }

  public function setCorreo($Correo){
    $this->Correo = $Correo;
  }

  public function getNombre(){
    return $this->Nombre;
  }

  public function setNombre($Nombre){
    $this->Nombre = $Nombre;
  }

  public function getEmpresa(){
    return $this->Empresa;
  }

  public function setEmpresa($Empresa){
    $this->Empresa = $Empresa;

}

function getMaxId()
{
  $this->id_Proveedor = $this->conexion->ejecutarSQL("SELECT MAX( id_Proveedor ) AS id_Proveedor
FROM proveedor");
  if ($this->id_Proveedor) {
    $row=$this->conexion->getRows($this->id_Proveedor);
    $this->id_Proveedor=$row[0];
  }
  return $this->id_Proveedor;
}

public function MostrarFormaOptios()
{
  $optios="";
  $this->conexion->CrearConexion();

  $resultado=$this->conexion->ejecutarSQL("select *from proveedor");
  while($row=$this->conexion->GetRows($resultado)){
   $optios.='<option value="'.$row[0].'" Nombreproveedor="'.$row[5].": ".$row[6].'"  >'.$row[5]." ".$row[6].'</option>';
  }
  return $optios;
   }


   public function MostrarNombre()
   {
     $optios="";
     $this->conexion->CrearConexion();

     $resultado=$this->conexion->ejecutarSQL("select *from proveedor where id_Proveedor='$this->id_Proveedor'");
     while($row=$this->conexion->GetRows($resultado)){
      $optios.=''.$row[5].": ".$row[6].'';
     }
     return $optios;
      }





}
 ?>
