<?php /**
 *
 */
class Venta
{
  private $id_Venta;
  private $Fecha;
  private $Costo_Total=0;
  private $id_Usuario=1;
  private $conexion;

  function __construct()
  {
    // code...
    include_once 'conexion.php';
    $this->conexion=new ConnectionMySQL();
  }

  public function Agregar_Venta(){
    $this->conexion->CrearConexion();
    $this->getMaxId();
    $this->id_Venta++;
    $this->conexion->ejecutarSQL("INSERT INTO `venta`(`id_Venta`, `Fecha`, `Costo_Total`, `id_Usuario`) VALUES ('$this->id_Venta',CURDATE(),'$this->Costo_Total','$this->id_Usuario')");
  }


  public function getId_Venta(){
		return $this->id_Venta;
	}

	public function setId_Venta($id_Venta){
		$this->id_Venta = $id_Venta;
	}

	public function getFecha(){
		return $this->Fecha;
	}

	public function setFecha($Fecha){
		$this->Fecha = $Fecha;
	}

	public function getCosto_Total(){
		return $this->Costo_Total;
	}

	public function setCosto_Total($Costo_Total){
		$this->Costo_Total = $Costo_Total;
	}

  function getMaxId()
  {
    $this->id_Venta = $this->conexion->ejecutarSQL("SELECT MAX( id_Venta ) AS id_Venta FROM venta");
    if ($this->id_Venta) {
      $row=$this->conexion->getRows($this->id_Venta);
      $this->id_Venta=$row[0];
    }
    return $this->id_Venta;
  }
}
 ?>
