<?php /**
 *
 */
class DetalleVenta
{
  private $id_Detalle_Venta;
  private $id_Venta;
  private $id_Producto;
  private $Cantidad_Venta;
  private $conexion;

  function __construct()
  {
    // code...
    include_once 'conexion.php';
    $this->conexion=new ConnectionMySQL();
  }

  public function Agregar_DetalleVenta(){
    $this->conexion->CrearConexion();
    $this->getMaxId();
    $this->id_Detalle_Venta++;
    $this->conexion->ejecutarSQL("INSERT INTO `detalle_venta`(`id_Detalle_Venta`, `id_Venta`, `id_Producto`, `Cantidad_Venta`) VALUES ('$this->id_Detalle_Venta','$this->id_Venta','$this->id_Producto','$this->Cantidad_Venta')");
  }

  public function getId_Detalle_Venta(){
		return $this->id_Detalle_Venta;
	}

	public function setId_Detalle_Venta($id_Detalle_Venta){
		$this->id_Detalle_Venta = $id_Detalle_Venta;
	}

	public function getId_Venta(){
		return $this->id_Venta;
	}

	public function setId_Venta($id_Venta){
		$this->id_Venta = $id_Venta;
	}

	public function getId_Producto(){
		return $this->id_Producto;
	}

	public function setId_Producto($id_Producto){
		$this->id_Producto = $id_Producto;
	}

  public function setCantidad_Venta($Cantidad_Venta)
  {
    $this->Cantidad_Venta=$Cantidad_Venta;
  }

  function getMaxId()
  {
    $this->id_Detalle_Venta = $this->conexion->ejecutarSQL("SELECT MAX( id_Detalle_Venta ) AS id_Detalle_Venta FROM detalle_venta");
    if ($this->id_Detalle_Venta) {
      $row=$this->conexion->getRows($this->id_Detalle_Venta);
      $this->id_Detalle_Venta=$row[0];
    }
    return $this->id_Detalle_Venta;
  }


  public function mostrarInfo1()
  {
    $tabla="";
    $this->conexion->CrearConexion();

    $resultado=$this->conexion->ejecutarSQL("SELECT detalle_venta.*,venta.Fecha FROM detalle_venta inner join venta on detalle_venta.id_Venta=venta.id_Venta and id_Producto=$this->id_Producto;");
    while($row=$this->conexion->GetRows($resultado)){
     $tabla.='<tr>
     <td>'.$row[0].'</td>
     <td>'.$row[1].'</td>
     <td>'.$row[4].'</td>
<!-- <td>'.$row[2].'</td><!-- -->
     <td>'.$row[3].'</td>
<!-- Hace falta saber en cuanto se vendio -->
     </tr>';
    }
    return $tabla;
     }




}
 ?>
