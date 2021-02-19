<?php 
$iduser=$_SESSION['datos_login']['usuario'];

// miembros gdf
$select_miembros_gdf  = "SELECT COUNT(*) total_miembros_gdf FROM gdf where usuario = '$iduser' ";
$resul_miembros_gdf  = mysqli_query($conexion, $select_miembros_gdf);
$total_miembros_gdf = mysqli_fetch_assoc($resul_miembros_gdf);

// registros cartelera (evento)
$select_registros  = "SELECT COUNT(*) total_registros FROM registros ";
$query_registros  = mysqli_query($conexion, $select_registros);
$total_registros = mysqli_fetch_assoc($query_registros);

//NO consolidados
$select_no_consolidados  = "SELECT COUNT(*) total_no_consolidados from gdf WHERE consolidado  = 'Pendiente' and usuario = '$iduser'  ";
$result_no_consolidados  = mysqli_query($conexion, $select_no_consolidados);
$total_no_consolidados = mysqli_fetch_assoc($result_no_consolidados);

//consolidados
$select_consolidados  = "SELECT COUNT(*) total_consolidados from gdf WHERE consolidado  = 'Consolidado' and usuario = '$iduser'  ";
$result_consolidados  = mysqli_query($conexion, $select_consolidados);
$total_consolidados = mysqli_fetch_assoc($result_consolidados);

//bautizados
$select_bautizados  = "SELECT COUNT(*) total_bautizados from gdf WHERE bautizado = 'Si' and usuario = '$iduser' ";
$result_bautizados  = mysqli_query($conexion, $select_bautizados);
$total_bautizados = mysqli_fetch_assoc($result_bautizados);

//no encuentro
$select_no_encuentros  = "SELECT COUNT(*) total_no_encuentros from gdf WHERE encuentro = 'Pendiente'   ";
$result_no_encuentros  = mysqli_query($conexion, $select_no_encuentros);
$total_no_encuentros = mysqli_fetch_assoc($result_no_encuentros);

//encuentro
$select_encuentros  = "SELECT COUNT(*) total_encuentros from gdf WHERE encuentro = 'Encuentro' and usuario = '$iduser'  ";
$result_encuentros  = mysqli_query($conexion, $select_encuentros);
$total_encuentros = mysqli_fetch_assoc($result_encuentros);

//sin escuela de lideres
$select_sin_escuela_lideres  = "SELECT COUNT(*) total_sin_escuela_lideres from gdf WHERE escuela_lideres  = 'Pendiente' and usuario = '$iduser'";
$result_sin_escuela_lideres  = mysqli_query($conexion, $select_sin_escuela_lideres);
$total_sin_escuela_lideres = mysqli_fetch_assoc($result_sin_escuela_lideres);

//escuela de lideres no terminada
$select_abandonado_escuela_lideres  = "SELECT COUNT(*) total_abandonado_escuela_lideres from gdf WHERE escuela_lideres  = 'Abandonado' and usuario = '$iduser'";
$result_abandonado_escuela_lideres  = mysqli_query($conexion, $select_abandonado_escuela_lideres);
$total_abandonado_escuela_lideres = mysqli_fetch_assoc($result_abandonado_escuela_lideres);

//escuela de lideres proceso 
$select_proceso_escuela_lideres  = "SELECT COUNT(*) total_proceso_escuela_lideres from gdf WHERE escuela_lideres  = 'Proceso' and usuario = '$iduser'";
$result_proceso_escuela_lideres  = mysqli_query($conexion, $select_proceso_escuela_lideres);
$total_proceso_escuela_lideres = mysqli_fetch_assoc($result_proceso_escuela_lideres);

//escuela de lideres terminada
$select_escuela_lideres  = "SELECT COUNT(*) total_escuela_lideres from gdf WHERE escuela_lideres  = 'Lider' and usuario = '$iduser'";
$result_escuela_lideres  = mysqli_query($conexion, $select_escuela_lideres);
$total_escuela_lideres = mysqli_fetch_assoc($result_escuela_lideres);



//bautizos pendientes
$select_pendientes_bautizados  = "SELECT COUNT(*) total_pendientes_bautizados from gdf WHERE bautizado  = 'Pendiente' and usuario = '$iduser' ";
$result_pendientes_bautizados  = mysqli_query($conexion, $select_pendientes_bautizados);
$total_pendientes_bautizados = mysqli_fetch_assoc($result_pendientes_bautizados);

//bautizos en proceso
$select_proceso_bautizados  = "SELECT COUNT(*) total_proceso_bautizados from gdf WHERE bautizado  = 'Proceso' and usuario = '$iduser' ";
$result_proceso_bautizados  = mysqli_query($conexion, $select_proceso_bautizados);
$total_proceso_bautizados = mysqli_fetch_assoc($result_proceso_bautizados);

//bautizados
$select_bautizados  = "SELECT COUNT(*) total_bautizados from gdf WHERE bautizado  = 'Si' and usuario = '$iduser' ";
$result_bautizados  = mysqli_query($conexion, $select_bautizados);
$total_bautizados = mysqli_fetch_assoc($result_bautizados);

?>

        <!--Grupo 1-->
        <div class="card mt-3">
          <div class="card-content">
            <div class="row row-group m-0">
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"> <?php echo $total_miembros_gdf['total_miembros_gdf']; ?> <span class="float-right"> <i aria-hidden="true" class="fa fa-users"></i> </span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: <?php echo $total_miembros_gdf['total_miembros_gdf'] ?>%"></div>
                  </div>
                  <p class="mb-0 text-white small-font">Miembros <span class="float-right">+4.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
              </div>
             
           
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"> <?php echo $total_no_consolidados['total_no_consolidados']; ?> <span class="float-right"> <i class="fa fa-frown-o" aria-hidden="true"></i> </span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: <?php echo $total_no_consolidados['total_no_consolidados'] ?>%"></div>
                  </div>
                  <p class="mb-0 text-white small-font"> No onsolidados <span class="float-right">+5.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
              </div>

              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"> <?php echo $total_consolidados['total_consolidados']; ?> <span class="float-right"> <i class="fa fa-smile-o" aria-hidden="true"></i> </span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: <?php echo $total_consolidados['total_consolidados'] ?>%"></div>
                  </div>
                  <p class="mb-0 text-white small-font">Consolidados <span class="float-right">+2.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
              </div>

              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"> <?php echo $total_encuentros['total_encuentros']; ?> <span class="float-right"> <i class="fa fa-heartbeat" aria-hidden="true"></i> </span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: <?php echo $total_encuentros['total_encuentros'] ?>%"></div>
                  </div>
                  <p class="mb-0 text-white small-font"> No encuentros <span class="float-right">+5.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- fin grupo 1-->


        <!--Grupo 2-->
        <div class="card mt-3">
          <div class="card-content">
            <div class="row row-group m-0">
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"> <?php echo $total_encuentros['total_encuentros']; ?> <span class="float-right"> <i aria-hidden="true" class="fa fa-heart"></i> </span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: <?php echo $total_encuentros['total_encuentros']; ?>%"></div>
                  </div>
                  <p class="mb-0 text-white small-font">Encuentros <span class="float-right">+4.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
              </div>
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"> <?php echo $total_sin_escuela_lideres['total_sin_escuela_lideres']; ?> <span class="float-right"> <i class="fa fa-archive" aria-hidden="true"></i> </span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: <?php echo $total_sin_escuela_lideres['total_sin_escuela_lideres']; ?>%"></div>
                  </div>
                  <p class="mb-0 text-white small-font">Sin escuela </p>
                </div>
              </div>
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"> <?php echo $total_abandonado_escuela_lideres['total_abandonado_escuela_lideres']; ?> <span class="float-right"> <i class="fa fa-frown-o" aria-hidden="true"></i> </span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: <?php echo $total_abandonado_escuela_lideres['total_abandonado_escuela_lideres'] ?>%"></div>
                  </div>
                  <p class="mb-0 text-white small-font">Escuela no terminada </p>
                </div>
              </div>
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"> <?php echo $total_proceso_escuela_lideres['total_proceso_escuela_lideres']; ?> <span class="float-right"> <i class="fa fa-university" aria-hidden="true"></i>  </span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: <?php echo $total_proceso_escuela_lideres['total_proceso_escuela_lideres']; ?>%"></div>
                  </div>
                  <p class="mb-0 text-white small-font">En escuela de lideres </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- fin grupo 2-->

        <!--Grupo 3-->
        <div class="card mt-3">
          <div class="card-content">
            <div class="row row-group m-0">
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"> <?php echo $total_escuela_lideres['total_escuela_lideres']; ?> <span class="float-right"> <i aria-hidden="true" class="fa fa-mortar-board"></i> </span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: <?php echo $total_escuela_lideres['total_escuela_lideres']; ?>%"></div>
                  </div>
                  <p class="mb-0 text-white small-font">Escuela terminada </p>
                </div>
              </div>
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"> <?php echo $total_pendientes_bautizados['total_pendientes_bautizados']; ?> <span class="float-right"> <i class="fa fa-heartbeat" aria-hidden="true"></i> </span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: <?php echo $total_pendientes_bautizados['total_pendientes_bautizados']; ?>%"></div>
                  </div>
                  <p class="mb-0 text-white small-font"> Buatizos pendendientes</p>
                </div>
              </div>
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"> <?php echo $total_proceso_bautizados['total_proceso_bautizados']; ?> <span class="float-right"> <i class="fa fa-medkit" aria-hidden="true"></i> </span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: <?php echo $total_proceso_bautizados['total_proceso_bautizados'] ?>%"></div>
                  </div>
                  <p class="mb-0 text-white small-font"> Bautizos proceso</p>
                </div>
              </div>
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"> <?php echo $total_bautizados['total_bautizados']; ?> <span class="float-right"> <i aria-hidden="true" class="fa fa-heart"></i>   </span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: <?php echo $total_bautizados['total_bautizados']; ?>%"></div>
                  </div>
                  <p class="mb-0 text-white small-font"> Bautizados</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- fin grupo 4-->


     