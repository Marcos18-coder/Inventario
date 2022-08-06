<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="Vistas/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="Vistas/css/home.css">
</head>
<body style="background: #fff8ba">

<div class="container">
<div class="login-page">
    <div class="text-center">



<?php
if(isset($_GET['_err'])){
	echo '<div class="alert alert-danger" role="alert">
Datos Incorrectos
</div>';
}

 ?>
       <h1>Bienvenido</h1>
       <p>Iniciar sesión </p>
     </div>

     <!--?php echo display_msg($msg); ?-->
      <form method="post" action="verificar_login.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label">Usuario</label>
              <input type="name" class="form-control" name="usuario" placeholder="Usuario">
        </div>
        <div class="form-group">
            <label for="Password" class="control-label">Contraseña</label>
            <input type="password" name= "password" class="form-control" placeholder="Contraseña">
        </div>
        <div class="form-group">
             <button type="submit" class="btn btn-info  pull-right" name="entrar">Entrar</button>
        </div>
	</div>
    </form>
</div>
</div>

</body>
</html>
