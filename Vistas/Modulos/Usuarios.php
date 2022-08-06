
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="fas fa-th"></span>
          <span>Usuarios</span>
       </strong>
         <a href="home.php?accion=AgregarUsuario" class="btn btn-info pull-right offset-8">Agregar usuario</a>
      </div>
     <div class="panel-body">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th class="text-center" style="width: 15px;"> # </th>
            <th class="text-center" style="width: 150px;"> Nombres </th>
            <th  class="text-center" style="width: 10px;"> Apellidos </th>
            <th  class="text-center" style="width: 10px;"> Usuario </th>
            <th  class="text-center" style="width: 10px;"> Fotografía </th>
          </tr>
        </thead>
        <tbody>
          <?php


          include_once '../Modelos/Usuario.php';
          $usuario=new Usuario();
          echo $usuario->FunctionMostrarinformacion();
          ?>

               </tbody>
     </table>
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
