
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
            <span>Agregar usuario</span>
         </strong>
        </div>
        <div class="panel-body">
         <div class="col-md-12">
          <form method="post" action="../Controlador/addUsuario.php" class="clearfix" enctype="multipart/form-data">
            <div class="form-group">
             <label for="inputAddress">Nombres</label>
             <input type="text" class="form-control" id="Nombre" placeholder="Nombres" name="Nombre">
            </div>
            <div class="form-group">
             <label for="inputAddress2">Apellidos</label>
             <input type="text" class="form-control" id="Apellido" placeholder="Apellidos" name="Apellidos">
            </div>

            <div class="form-row">

 <div class="form-group col-md-6">
   <label for="inputEmail4">Usuario</label>
   <input type="text" class="form-control" id="Usuario" name="Usuario">
 </div>
 <div class="form-group col-md-6">
   <label for="inputPassword4">Contraseña</label>
   <input type="password" class="form-control" id="inputPassword4" name="Contrasenia">
 </div>
</div>

<div class="form-row">

<div class="form-group col-md-6">
  <div class="custom-file">
  <input type="file" class="custom-file-input" id="customFile" name="Fotograia">
  <label class="custom-file-label" for="customFile">Seleccione Fotografía</label>
</div>
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
