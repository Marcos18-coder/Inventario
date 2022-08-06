
<div class="container-fluid">
<div class="row">
  <div class="col-md-6">
      </div>
</div>
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <strong>
            <span class="fas fa-th"></span>
            <span>Proveedores</span>
          </strong>
          <div class="pull-right offset-8">
            <a href="home.php?accion=AgregarProveedor" class="btn btn-primary">Agregar proveedor</a>
          </div>
        </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center" style="width: 50px;"> Clave </th>
                <th class="text-center" style="width: 15%;"> Telefono </th>
                <th class="text-center" style="width: 100px;">Día_Entrega</th>
                <th class="text-center" style="width: 100px;">Direccion</th>
                 <th class="text-center" style="width: 100px;">Correo</th>
                  <th class="text-center" style="width: 100px;">Nombres</th>
                  <th class="text-center" style="width: 100px;">Empresa</th>

             </tr>
            </thead>
           <tbody>
             <?php include_once '../Modelos/Proveedor.php';
             $proveedor=new Proveedor();
             echo $proveedor->FunctionMostrarinformacion3();
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
      border: 1px solid transparent;
      border-radius: 4px;
      -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
      box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }

       </style>
