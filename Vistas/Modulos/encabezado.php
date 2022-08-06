
<!--?php require_once('../../Controlador/css_js.php')?-->

<header id="header">
      <div class="logo pull-left"> Menú del inventario </div>
      <div class="header-content">
      <div class="header-date pull-left">
        <strong><!--?php echo date("d/m/Y  g:i a");?--></strong>
      </div>
      <div class="pull-right clearfix">
        <ul class="info-menu list-inline list-unstyled">
          <li class="profile">
            <a href="#" data-toggle="dropdown" class="toggle" aria-expanded="false">
              <img src="uploads/users/<?php #echo $user['image'];?>" alt="user-image" class="img-circle img-inline"-->
              <span><!--?php echo remove_junk(ucfirst($user['name'])); ?--> <i class="caret"></i></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                  <a href="profile.php?id=<?php #echo (int)$user['id'];?>">
                      <i class="glyphicon glyphicon-user"></i>
                      Perfil
                  </a-->
              </li>
             <li>
                 <a href="edit_account.php" title="edit account">
                     <i class="glyphicon glyphicon-cog"></i>
                     Configuración
                 </a>
             </li>
             <li class="last">
                 <a href="logout.php">
                     <i class="glyphicon glyphicon-off"></i>
                     Salir
                 </a>
             </li>
           </ul>
          </li>
        </ul>
      </div>
     </div>
    </header>