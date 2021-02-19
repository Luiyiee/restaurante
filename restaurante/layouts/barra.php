<?php
include_once 'configuracion/conexion.php';

$select_bautizados = "SELECT count(*) total_bautizados FROM gdf where bautizado = 'Proceso' and notificacion = '1' ";
$query_bautizados      = mysqli_query($conexion, $select_bautizados);
$total_bautizados  = mysqli_fetch_assoc($query_bautizados);

          $select_registros = "SELECT count(*) total_registros FROM registros where notificacion = '1' ";
          $query_registros      = mysqli_query($conexion, $select_registros);
          $total_registros  = mysqli_fetch_assoc($query_registros);

          $select_peticiones = "SELECT count(*) total_peticiones FROM p_t where  p_t = 'peticion' and notificacion = '1' ";
          $query_peticiones      = mysqli_query($conexion, $select_peticiones);
          $total_peticiones  = mysqli_fetch_assoc($query_peticiones);

          $select_testimonios = "SELECT count(*) total_testimonios FROM p_t where p_t = 'testimonio' and notificacion = '1' ";
          $query_testimonios      = mysqli_query($conexion, $select_testimonios);
          $total_testimonios  = mysqli_fetch_assoc($query_testimonios);

          $total_notificaciones= $total_registros['total_registros'] + 
                                  $total_peticiones['total_peticiones'] + 
                                  $total_testimonios['total_testimonios'];
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
      
      <?php if($total_notificaciones > 0){
        
        ?>
      <i class="fa fa-envelope-open-o"></i>
      <span class="badge badge-light badge"> <?php echo $total_bautizados['total_bautizados'] ?> </span>
      </a>
      <?php
       } else{
        ?>
         
          <?php } ?>
          
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
         <li class="list-group-item d-flex justify-content-between align-items-center">
         Tienes <?php echo $total_bautizados['total_bautizados'] ?> Mensajes nuevos
          <span class="badge badge-light">12</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
          <?php 
$sql_query = "SELECT usuario,img_perfil, COUNT(*) total_bautizados FROM usuarios INNER JOIN gdf ON usuarios.usuario = gdf.id_usuario where gdf.bautizado = 'Proceso' GROUP by id_usuario ";
            $result_set = mysqli_query($conexion, $sql_query);
          
            while ($ver = mysqli_fetch_array($result_set)) {
          ?>
           <div class="media" >
             <div class="avatar"><img class="align-self-start mr-3"  src="images/users/lideres/<?php echo $ver['img_perfil']; ?>" alt="user avatar" width="60px"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title"> <?php echo $ver['usuario']?> </h6>
            <p class="msg-info"> <?php echo $ver['total_bautizados']?> Nuevo bautizado</p>
            <!-- <small><php echo $ver['total_bautizados']?></small> -->
            </div>
           <hr>
          </div>
          <?php } ?>
          </a>
          </li>

          <!-- 
            SELECT nombreUsuario, COUNT(*) FROM usuarios INNER JOIN gdf ON usuarios.nombreUsuario = gdf.usuario where gdf.bautizado = 'Proceso' GROUP by usuario

           -->

         <!-- 
SELECT usuario, COUNT(*) FROM usuarios INNER JOIN gdf ON usuarios.usuario = gdf.nombreUsuario where gdf.bautizado = 'Proceso' GROUP by nombreUsuario

          -->
         <!-- SELECT COUNT(*) FROM usuarios INNER JOIN gdf 
ON usuarios.usuario = gdf.nombreUsuario where gdf.bautizado = 'Proceso' GROUP by nombreUsuario
 -->
          <!-- style="
    overflow-y: scroll;
    height: 50%y;
    height: 500px;
" -->
      
          <li class="list-group-item text-center"><a href="javaScript:void();">See All Messages</a></li>
        </ul>
        </div>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
    <i class="fa fa-bell-o"></i><span class="badge badge-info badge"> <?php echo $total_notificaciones ?> </span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center">
           <?php echo $total_notificaciones ?> Notificaciones
          <span class="badge badge-info"> <?php echo $total_notificaciones ?> </span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-accounts fa-2x mr-3 text-info"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title"> <?php echo $total_registros['total_registros'] ?> Nuevos registros</h6>
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
            <h6 class="mt-0 msg-title"> <?php echo $total_peticiones['total_peticiones'] ?> Nuevas peticiones</h6>
            <!-- <p class="msg-info">Lorem ipsum dolor sit amet...</p> -->
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-notifications-active fa-2x mr-3 text-danger"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title"> <?php echo $total_testimonios['total_testimonios'] ?> Nuevos testimonios</h6>
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
          <img src="images/users/administradores/<?php echo $_SESSION['datos_login']['imagen']; ?>" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="images/users/administradores/<?php echo $_SESSION['datos_login']['imagen']; ?>" alt="user avatar"></div>
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