<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/home.css">

<div class="container-fluid">

  <div class="row">
     <div class="col-md-12">
            </div>
  </div>
   <div class="row">
    <div class="col-md-5">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Agregar categoría</span>
         </strong>
        </div>
        <div class="panel-body">
          <form method="post" action="categoria.php">
            <div class="form-group">
                <input type="text" class="form-control" name="categorie-name" placeholder="Nombre de la categoría" required="">
            </div>
            <button type="submit" name="add_cat" class="btn btn-primary">Agregar categoría</button>
        </form>
        </div>
      </div>
    </div>
    <div class="col-md-7">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Lista de categorías</span>
       </strong>
      </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">#</th>
                    <th>Categorías</th>
                    <th class="text-center" style="width: 100px;">Acciones</th>
                </tr>
            </thead>
            <tbody>
                              <tr>
                    <td class="text-center">1</td>
                    <td></td>
                    <td class="text-center">
                      <div class="btn-group">
                        <a href="#2" class="btn btn-xs btn-warning" data-toggle="tooltip" title="" data-original-title="Editar">
                          <span class="fas fa-edit"></span>
                        </a>
                        <a href="#" class="btn btn-xs btn-danger" data-toggle="tooltip" title="" data-original-title="Eliminar">
                          <span class="fas fa-trash"></span>
                        </a>
                      </div>
                    </td>

                </tr>
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

  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>