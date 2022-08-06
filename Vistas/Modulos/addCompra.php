<?php
session_start();
$_SESSION['productos_de_compra']=json_decode('{"productos":[]}');
 ?>
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
            <span>Agregar Compra</span>
          </strong>
        </div>
        <div class="panel-body">
          <div class="col-md-12">

            <div class="panel-body">
              <div class="col-md-12">
                <form method="post" action="../Controlador/gaurdarCompra.php" class="clearfix" enctype="multipart/form-data">
                  <div class="form-row">
                    <div class="col">
                      <label for="cod_Proveedor">Proveedor</label>
                      <select class="form-control form-control-lg" id="Proveedor">
                        <?php include_once '../Modelos/Proveedor.php';
                        echo '<option value="null">Selecciona un proveedor</option>';
                        $proveedor=new Proveedor();
                        echo $proveedor->MostrarFormaOptios();
                         ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-4">
                      <label for="exampleInputEmail1">Codigo producto</label>
                      <input class="form-control form-control-lg" type="number" placeholder="" id="cod_producto">
                    </div>
                    <div class="col-3">
                      <label for="exampleInputEmail1">Precio</label>
                      <input class="form-control form-control-lg" type="number" placeholder="" id="precio">
                    </div>
                    <div class="col-3">
                      <label for="exampleInputEmail1">Cantidad</label>
                      <input class="form-control form-control-lg" type="number" placeholder="" id="cantidad">
                    </div>
                    <div class="col-2">
                      <label for="exampleInputEmail1">__________</label>
                      <button type="button" class="btn btn-primary" id="bt_buscar">Buscar</button>
                    </div>
                  </div>
                  <br>
                  <div class="form-row">
                    <div class="col">
                      <table class="table">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">Cod Producto</th>
                            <th scope="col">Proveedor</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Total</th>
                          </tr>
                        </thead>
                        <tbody id="datos_tabla">


                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col text-right">
                      <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                  </div>

                </form>
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

  <script>
    $("#bt_buscar").on("click", function() {
      $.post("../Controlador/productos_de_compra.php", {
        "cod": $("#cod_producto").val(),
        "precio_unitario": $("#precio").val(),
        "cantidad_adquirida": $("#cantidad").val(),
        "Proveedor": $("#Proveedor option:selected").attr('Nombreproveedor'),
        "idProveedor": $("#Proveedor").val(),


      }, function(Respuesta) {
        console.log(Respuesta);
        $("#errores").html(Respuesta);
        $("#datos_tabla").html(Respuesta);
      });
    });
  </script>

  <script type="text/javascript">

  </script>
