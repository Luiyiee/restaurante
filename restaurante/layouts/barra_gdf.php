<?php
include_once 'configuracion/conexion.php';
$iduser=$_SESSION['datos_login']['usuario'];

  $select_consolidados_gdf = "SELECT count(*) total_consolidados_gdf FROM gdf where consolidado = 'Consolidado' and  notificacion = '1' and usuario = '$iduser' ";
  $result_consolidados_gdf      = mysqli_query($conexion, $select_consolidados_gdf);
  $total_consolidados_gdf  = mysqli_fetch_assoc($result_consolidados_gdf);

  $select_bautizados_gdf = "SELECT count(*) total_bautizados_gdf FROM gdf where  bautizado = 'Si' and notificacion = '1' and usuario = '$iduser' ";
  $result_bautizados_gdf      = mysqli_query($conexion, $select_bautizados_gdf);
  $total_bautizados_gdf  = mysqli_fetch_assoc($result_bautizados_gdf);


  $total_notificaciones_gdf = $total_consolidados_gdf['total_consolidados_gdf'] + $total_bautizados_gdf['total_bautizados_gdf'];
          ?>
<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      
      <?php if($total_notificaciones_gdf > 0){
        
        ?>
      <i class="fa fa-envelope-open-o"></i>
      <span class="badge badge-light badge"> <?php echo $total_notificaciones_gdf ?> </span>
      </a>
      <?php
       } else{
        ?>
         
          <?php } ?>
          
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
         <li class="list-group-item d-flex justify-content-between align-items-center">
         Tienes <?php echo $total_notificaciones_gdf ?> Mensajes nuevos
          <span class="badge badge-light">12</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="images/default.jpg" alt="user avatar" width="60px"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Jhon Deo</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Today, 4:10 PM</small>
            </div>
          </div>
          </a>
          </li>
         
     
      
          <li class="list-group-item text-center"><a href="javaScript:void();">See All Messages</a></li>
        </ul>
        </div>
    </li>

    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
    <i class="fa fa-bell-o"></i><span class="badge badge-info badge"> <?php echo $total_notificaciones_gdf ?> </span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center">
           <?php echo $total_notificaciones_gdf ?> Notificaciones
          <span class="badge badge-info"> <?php echo $total_notificaciones_gdf ?> </span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-accounts fa-2x mr-3 text-info"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title"> <?php echo $total_consolidados_gdf['total_consolidados_gdf'] ?> Nuevos consolidados</h6>
            <!-- <p class="msg-info">Lorem ipsum dolor sit amet...</p> -->
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-coffee fa-2x mr-3 text-warning"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title"> <?php echo $total_bautizados_gdf['total_bautizados_gdf'] ?> Nuevas peticiones</h6>
            <!-- <p class="msg-info">Lorem ipsum dolor sit amet...</p> -->
            </div>
          </div>
          </a>
          </li>
        
          <li class="list-group-item text-center"><a href="javaScript:void();">See All Notifications</a></li>
        </ul>
      </div>
    </li>
    
    <!--  -->
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
        </ul>
    </li>
    <!-- idiomas -->
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile">
          <img src="images/users/lideres/<?php echo $_SESSION['datos_login']['imagen']; ?>" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="images/users/lideres/<?php echo $_SESSION['datos_login']['imagen']; ?>" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title"> <?php echo $_SESSION['datos_login']['usuario']; ?> </h6>
            <p class="user-subtitle"> <?php echo $_SESSION['datos_login']['email']; ?> </p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> <a href="configuracion/cerrar_sesion.php"> Cerrar sesión</a></li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->