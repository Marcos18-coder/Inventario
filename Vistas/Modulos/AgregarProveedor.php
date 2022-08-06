<div class="container-fluid">
<div class="row">
  <div class="col-md-12">
      </div>
</div>
  <div class="row">
  <div class="col-md-9">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="fas fa-th"></span>
            <span>Agregar Proveedor</span>
         </strong>
        </div>
        <div class="panel-body">
         <div class="col-md-12">
          <form method="post" action="../Controlador/addProveedor.php" class="clearfix">

            <div class="form-row">

              <div class="form-group col-md-6">
                <label for="inputEmail4">Telefono</label>
                <input type="text" class="form-control" id="tel" name="telefono">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Día de entrega</label>
                <input type="date" class="form-control" id="fecha" name="fecha">
              </div>
            </div>

            <div class="row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Dirección</label>
              <input type="text" class="form-control" id="direcc" name="direccion">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Correo</label>
              <input type="email" class="form-control" id="email" name="correo">
            </div>
            </div>

            <div class="row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nombre Completo</label>
              <input type="text" class="form-control" id="Nom" name="nombre">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Empresa</label>
              <input type="text" class="form-control" id="empresa" name="empresa">
            </div>
            </div>

            <button type="submit" class="btn btn-primary">Registrar</button>

          </form>
         </div>
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
  .panel-body{
    margin-bottom: 20px;
      background-color: #fff;
      border: 1px solid transparent;
      border-radius: 4px;
      -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
      box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }

       </style>
