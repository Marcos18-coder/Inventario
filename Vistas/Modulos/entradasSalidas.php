<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="fas fa-th"></span>
            <span>Entradas, Salidas</span>
          </strong>
        </div>
        <div class="panel-body">
          <div class="col-md-12">

            <div class="panel-body">
              <div class="col-md-12">
                <table class="table table-hover table-striped">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">Código</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Descripcion</th>
                      <th scope="col">Precio</th>
                      <th scope="col">Saldo inicial</th>
                      <th scope="col">Imagen</th>
                      <th scope="col">Detalles</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php include_once '../Modelos/Producto.php';
                    $producto=new Producto();
                    echo $producto->mostrarInfo1();
                     ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div id="errores">

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <style type="text/css">
    .panel-body {
      padding: 15px;
    }

    .panel-body {
      margin-bottom: 20px;
      background-color: #fff;
      border: 1px solid transparent;
      border-radius: 4px;
      -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
      box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    }
  </style>




  <!-- Modal -->
  <div class="modal fade" id="ModalDetalles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="nombre_hms">Modal title</h5>
        </div>
        <div class="modal-body" id="info_entradas">
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>







  <script type="text/javascript">
  function mostrarDetalles(idProducto,Nombre) {
    $.post("../Controlador/datosEntradasSalidasProducto.php",{"idPro":idProducto},function (respuesta) {
      $("#nombre_hms").text(Nombre);
      console.log(respuesta);
      $("#info_entradas").html(respuesta);
    });
  }
  </script>
