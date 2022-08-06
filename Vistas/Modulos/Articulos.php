

<div class="container-fluid">
  <div class="row">
     <div class="col-md-12">
            </div>
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
         <div class="pull-right">
           <a href="home.php?accion=AgregarArticulos" class="btn btn-primary">Agregar producto</a>
         </div>
        </div>
        <div class="panel-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center" style="width: 50px;">Código</th>
                <th class="text-center" style="width: 20%;"> Nombre</th>
                <th class="text-center" style="width: 20%;"> Descripción </th>
                <th> Precio </th>

                <th class="text-center" style="width: 10%;"> Saldo inicial </th>
                <th class="text-center" style="width: 10%;"> Imagen </th>

              </tr>
            </thead>
            <tbody>
              <?php include_once '../Modelos/Producto.php';
              $producto=new Producto();
              echo $producto->FunctionMostrarinformacion2();
               ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
       </div>
       <style type="text/css">
         .panel-body {
    padding: 15px;
}
  .panel-body{
    margin-bottom: 20px;
      background-color: #fff;
      border: 2px solid transparent;
      border-radius: 4px;
      -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
      box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }

       </style>
