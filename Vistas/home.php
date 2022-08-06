<?php
	require_once('../Controlador/Control_Logica.php');
	require_once('../Modelos/Enlaces.php');
	require_once('../Modelos/CRUD.php');

?>
<?php require_once('../Controlador/css_js.php')?>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<body>

	<header id="header" style="background: white">

		<div class="logo pull-left" style="background-color: #717f7d">
			Menú del Inventario

		</div>


				<img src="../img/logo.48.52 AM.jpeg "  class="rounded-left" width="60px">


	</header>
	<div class="sidebar">
              <!-- admin menu -->.
              <style type="text/css">
              	.sidebar ul li a{
              		padding: 10px;
              	}

              	.sidebar ul li a:hover{
              		padding: 10px;
              		padding-left:  25px;
              		background-color: gray;
              		color: white;
              	}
              </style>

     <ul>
	  <li>
	    <a href="home.php?accion=Inicio">
	      <i class="fas fa-home"></i>
	      <span style="padding: 15px;">Inicio</span>

	    </a>
	  </li>

	  <li>
	    <a href="home.php?accion=Articulos">
	      <i class="fa fa-warehouse"></i>
	      <span style="padding: 15px;">Artículos</span>
	    </a>
	  </li>

	  <!--li>
	    <a href="home.php?accion=Categorias">
	      <i class="fas fa-layer-group"></i>
	      <span style="padding: 15px;">Categorías</span>
	    </a>
	  </li-->

	  <li>
	    <a href="home.php?accion=entradasSalidas">
	      <i class="fas fa-stream"></i>
	      <span style="padding: 15px;">Entradas/Salidas</span>
	    </a>
	  </li>

	  	  <li>
	    <a href="home.php?accion=Proveedores" >
	      <i class="fas fa-users"></i>
	      <span style="padding: 15px;">Proveedores</span>
	    </a>
	  </li>

	  <li>
	    <a href="home.php?accion=Usuarios">
	      <i class="fas fa-user"></i>
	      <span style="padding: 15px;">Usuarios</span>
	    </a>
	  </li>
		<li>
			<a href="home.php?accion=addVenta">
				<i class="fas fa-user"></i>
				<span style="padding: 15px;">Nueva Venta</span>
			</a>
		</li>
		<li>
			<a href="home.php?accion=addCompra">
				<i class="fas fa-user"></i>
				<span style="padding: 15px;">Nueva Compra</span>
			</a>
		</li>
	</ul>
   </div>

   <div class="page" style="background-color: ">
   	<div class="panel">
   <div class="container-fluid col-9 offset-2" > <!--contenido -->
   <?php
   		ob_start();
   		if (isset($_GET["accion"])) {
   			$res=new Control_General();
   			$res->EnlacesControlContenido();
   		}else{
   			$res=new Control_General();
   			$res->EnlaceInicio();
   		}
   		ob_end_flush();
    ?>

   </div>
   </div>
</div>
<style type="text/css">
	.page{
		margin-left: 100px;
		width: 100%;
		height: 100%;
		position: absolute;
		padding: 25px;
		box-sizing: border-box;
	}
</style>

</body>
</html>
