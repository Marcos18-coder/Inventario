<?php
class Detalle_Compra
{
  private $id_Detalle_Compra;
  private $id_Compra;
  private $id_Producto;
  private $id_Proveedor;
  private $Precio_Costo;
  private $Cantidad_Compra;
  private $conexion;

  function __construct()
  {
    // code...
    include_once 'conexion.php';
    $this->conexion=new ConnectionMySQL();
  }

  public function Agregar_DetalleCompra(){
    $this->conexion->CrearConexion();
    $this->getMaxId();
    $this->id_Detalle_Compra++;
    $this->conexion->ejecutarSQL("INSERT INTO `detalle_compra`(`id_Detalle_Compra`, `id_Compra`, `id_Producto`, `id_Proveedor`, `Precio_Costo`, `Cantidad_Compra`) VALUES ('$this->id_Detalle_Compra','$this->id_Compra','$this->id_Producto','$this->id_Proveedor','$this->Precio_Costo','$this->Cantidad_Compra')");
  }

  public function getId_Detalle_Compra(){
		return $this->id_Detalle_Compra;
	}

	public function setId_Detalle_Compra($id_Detalle_Compra){
		$this->id_Detalle_Compra = $id_Detalle_Compra;
	}

	public function getId_Compra(){
		return $this->id_Compra;
	}

	public function setId_Compra($id_Compra){
		$this->id_Compra = $id_Compra;
	}

	public function getId_Producto(){
		return $this->id_Producto;
	}

	public function setId_Producto($id_Producto){
		$this->id_Producto = $id_Producto;
	}

	public function getId_Proveedor(){
		return $this->id_Proveedor;
	}

	public function setId_Proveedor($id_Proveedor){
		$this->id_Proveedor = $id_Proveedor;
	}

	public function getPrecio_Costo(){
		return $this->Precio_Costo;
	}

	public function setPrecio_Costo($Precio_Costo){
		$this->Precio_Costo = $Precio_Costo;
	}


  function getMaxId()
  {
    $this->id_Detalle_Compra = $this->conexion->ejecutarSQL("SELECT MAX( id_Detalle_Compra ) AS id_Detalle_Compra FROM detalle_compra");
    if ($this->id_Detalle_Compra) {
      $row=$this->conexion->getRows($this->id_Detalle_Compra);
      $this->id_Detalle_Compra=$row[0];
    }
    return $this->id_Detalle_Compra;
  }


  function setCantidad_Compra($Cantidad_Compra) { $this->Cantidad_Compra = $Cantidad_Compra; }
function getCantidad_Compra() { return $this->Cantidad_Compra; }




  public function mostrarInfo1()
  {
    include_once 'Proveedor.php';
    $proveedor=new Proveedor();
    $tabla="";
    $this->conexion->CrearConexion();

    $resultado=$this->conexion->ejecutarSQL("SELECT detalle_compra.*,compra.Fecha FROM detalle_compra inner join compra on  detalle_compra.id_Compra=compra.id_Compra and detalle_compra.id_Producto=$this->id_Producto;");
    while($row=$this->conexion->GetRows($resultado)){
      $proveedor->setId_Proveedor($row[3]);
     $tabla.='<tr>
     <td>'.$row[1].'</td>
     <td>'.$row[6].'</td>
     <td>'.$proveedor->MostrarNombre().'</td>
     <td>'.$row[4].'</td>
     <td>'.$row[5].'</td>
     <td>'.$row[4]*$row[5].'</td>
     </tr>';
    }
    return $tabla;
     }






}
 ?>
