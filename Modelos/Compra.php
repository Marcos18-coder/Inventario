<?php /**
 *
 */
class Compra
{

  private $id_Compra;
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

  public function Agregar_Compra(){
    $this->conexion->CrearConexion();
    $this->getMaxId();
    $this->id_Compra++;
    $this->conexion->ejecutarSQL("INSERT INTO `compra`(`id_Compra`, `Fecha`, ` Costo_Total`, `id_Usuario`) VALUES ('$this->id_Compra',CURDATE(),'$this->Costo_Total','$this->id_Usuario')");
  }
  public function getId_Compra(){
		return $this->id_Compra;
	}

	public function setId_Compra($id_Compra){
		$this->id_Compra = $id_Compra;
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
    $this->id_Compra = $this->conexion->ejecutarSQL("SELECT MAX( id_Compra ) AS id_Compra FROM compra");
    if ($this->id_Compra) {
      $row=$this->conexion->getRows($this->id_Compra);
      $this->id_Compra=$row[0];
    }
    return $this->id_Compra;
  }
}
 ?>
