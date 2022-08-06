
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
            <span>Agregar producto</span>
         </strong>
        </div>
        <div class="panel-body">
         <div class="col-md-12">

            <div class="panel-body">
             <div class="col-md-12">
              <form method="post" action="../Controlador/addPeoducto.php" class="clearfix" enctype="multipart/form-data">
                <div class="form-group">
                 <label for="inputAddress">Nombre</label>
                 <input type="text" class="form-control" id="Nombre" placeholder="Nombre" name="Nombre">
                </div>
                <div class="form-group">
                 <label for="inputAddress2">Descripción</label>
                 <input type="text" class="form-control" id="Des" placeholder="Descripcion" name="Descripcion">
                </div>

                <div class="form-row">

     <div class="form-group col-md-6">
       <label for="inputEmail4">Precio</label>
       <input type="text" class="form-control" id="Precio" name="Precio">
     </div>
     <div class="form-group col-md-6">
       <label for="inputPassword4">Cantidad</label>
       <input type="text" class="form-control" id="Exis" name="Existencia">
     </div>
    </div>

    <div class="form-row">

    <div class="form-group col-md-6">
      <div class="custom-file">
      <input type="file" class="custom-file-input" id="customFile" name="Imagen">
      <label class="custom-file-label" for="customFile">Seleccione Imagen</label>
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
