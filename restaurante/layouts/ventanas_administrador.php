<?php 
// usuarios
$select_admin  = "SELECT COUNT(*) total_admin FROM usuarios where nivel = 'Administrador' ";
$resul_admin  = mysqli_query($conexion, $select_admin);
$total_admin = mysqli_fetch_assoc($resul_admin);

$select_gdf  = "SELECT COUNT(*) total_gdf FROM usuarios where nivel = 'GDF' ";
$resul_gdf  = mysqli_query($conexion, $select_gdf);
$total_gdf = mysqli_fetch_assoc($resul_gdf);

//cartelera
$sql_cartelera  = "SELECT COUNT(*) total_cartelera FROM cartelera";
$result_cartelera  = mysqli_query($conexion, $sql_cartelera);
$fila_cartelera = mysqli_fetch_assoc($result_cartelera);

// registros cartelera
$select_registros  = "SELECT COUNT(*) total_registros FROM registros ";
$query_registros  = mysqli_query($conexion, $select_registros);
$total_registros = mysqli_fetch_assoc($query_registros);

//testimonios-peticiones
$select_total_pt  = "SELECT COUNT(*) total_peticiones FROM p_t";
$result_pt  = mysqli_query($conexion, $select_total_pt);
$total_pt = mysqli_fetch_assoc($result_pt);

//peticiones
$select_peticiones  = "SELECT COUNT(*) total_peticiones FROM p_t where p_t = 'peticion' and eliminado = '1' ";
$query_peticiones  = mysqli_query($conexion, $select_peticiones);
$total_peticiones = mysqli_fetch_assoc($query_peticiones);

//peticiones
$select_testimonios  = "SELECT COUNT(*) total_testimonios FROM p_t where p_t = 'testimonio' and eliminado = '1' ";
$query_testimonios  = mysqli_query($conexion, $select_testimonios);
$total_testimonios = mysqli_fetch_assoc($query_testimonios);

//NO consolidados
$select_no_consolidados  = "SELECT COUNT(*) total_no_consolidados from gdf WHERE consolidado  = 'Pendiente'  ";
$result_no_consolidados  = mysqli_query($conexion, $select_no_consolidados);
$total_no_consolidados = mysqli_fetch_assoc($result_no_consolidados);

//consolidados
$select_consolidados  = "SELECT COUNT(*) total_consolidados from gdf WHERE consolidado  = 'Consolidado'  ";
$result_consolidados  = mysqli_query($conexion, $select_consolidados);
$total_consolidados = mysqli_fetch_assoc($result_consolidados);

//bautizados
$select_bautizados  = "SELECT COUNT(*) total_bautizados from gdf WHERE bautizado = 'Si'  ";
$result_bautizados  = mysqli_query($conexion, $select_bautizados);
$total_bautizados = mysqli_fetch_assoc($result_bautizados);

//no encuentro
$select_no_encuentros  = "SELECT COUNT(*) total_no_encuentros from gdf WHERE encuentro = 'Pendiente'   ";
$result_no_encuentros  = mysqli_query($conexion, $select_no_encuentros);
$total_no_encuentros = mysqli_fetch_assoc($result_no_encuentros);

//encuentro
$select_encuentros  = "SELECT COUNT(*) total_encuentros from gdf WHERE encuentro = 'Encuentro'   ";
$result_encuentros  = mysqli_query($conexion, $select_encuentros);
$total_encuentros = mysqli_fetch_assoc($result_encuentros);

//sin escuela de lideres
$select_sin_escuela_lideres  = "SELECT COUNT(*) total_sin_escuela_lideres from gdf WHERE escuela_lideres  = 'Pendiente' ";
$result_sin_escuela_lideres  = mysqli_query($conexion, $select_sin_escuela_lideres);
$total_sin_escuela_lideres = mysqli_fetch_assoc($result_sin_escuela_lideres);

//escuela de lideres no terminada
$select_abandonado_escuela_lideres  = "SELECT COUNT(*) total_abandonado_escuela_lideres from gdf WHERE escuela_lideres  = 'Abandonado' ";
$result_abandonado_escuela_lideres  = mysqli_query($conexion, $select_abandonado_escuela_lideres);
$total_abandonado_escuela_lideres = mysqli_fetch_assoc($result_abandonado_escuela_lideres);

//escuela de lideres proceso 
$select_proceso_escuela_lideres  = "SELECT COUNT(*) total_proceso_escuela_lideres from gdf WHERE escuela_lideres  = 'Proceso' ";
$result_proceso_escuela_lideres  = mysqli_query($conexion, $select_proceso_escuela_lideres);
$total_proceso_escuela_lideres = mysqli_fetch_assoc($result_proceso_escuela_lideres);

//escuela de lideres terminada
$select_escuela_lideres  = "SELECT COUNT(*) total_escuela_lideres from gdf WHERE escuela_lideres  = 'Lider' ";
$result_escuela_lideres  = mysqli_query($conexion, $select_escuela_lideres);
$total_escuela_lideres = mysqli_fetch_assoc($result_escuela_lideres);



//bautizos pendientes
$select_pendientes_bautizados  = "SELECT COUNT(*) total_pendientes_bautizados from gdf WHERE bautizado  = 'Pendiente'  ";
$result_pendientes_bautizados  = mysqli_query($conexion, $select_pendientes_bautizados);
$total_pendientes_bautizados = mysqli_fetch_assoc($result_pendientes_bautizados);

//bautizos en proceso
$select_proceso_bautizados  = "SELECT COUNT(*) total_proceso_bautizados from gdf WHERE bautizado  = 'Proceso'  ";
$result_proceso_bautizados  = mysqli_query($conexion, $select_proceso_bautizados);
$total_proceso_bautizados = mysqli_fetch_assoc($result_proceso_bautizados);

//bautizados
$select_bautizados  = "SELECT COUNT(*) total_bautizados from gdf WHERE bautizado  = 'Si'  ";
$result_bautizados  = mysqli_query($conexion, $select_bautizados);
$total_bautizados = mysqli_fetch_assoc($result_bautizados);
?>
        <!--Grupo 1-->
        <div class="card mt-3">
          <div class="card-content">
            <div class="row row-group m-0">
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"> <?php echo $total_admin['total_admin']; ?> <span class="float-right"> <i aria-hidden="true" class="fa fa-user"></i> </span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: <?php echo $total_admin['total_admin'] ?>%"></div>
                  </div>
                  <p class="mb-0 text-white small-font">Administradores <span class="float-right">+4.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
              </div>
             
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"> <?php echo $total_registros['total_registros']; ?> <span class="float-right"> <span class="ti-briefcase"></span></span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: <?php echo $total_registros['total_registros'] ?>%"></div>
                  </div>
                  <p class="mb-0 text-white small-font"> Registros Evento <span class="float-right">+5.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
              </div>
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"> <?php echo $total_peticiones['total_peticiones']; ?> <span class="float-right"> <i aria-hidden="true" class="fa fa-envelope"></i> </span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: <?php echo $total_peticiones['total_peticiones'] ?>%"></div>
                  </div>
                  <p class="mb-0 text-white small-font"> Peticiones <span class="float-right">+5.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
              </div>
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"> <?php echo $total_testimonios['total_testimonios']; ?> <span class="float-right"> <i aria-hidden="true" class="fa fa-envelope"></i> </span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: <?php echo $total_testimonios['total_testimonios'] ?>%"></div>
                  </div>
                  <p class="mb-0 text-white small-font">Testimonios <span class="float-right">+2.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
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
                  <h5 class="text-white mb-0"> <?php echo $total_no_consolidados['total_no_consolidados']; ?> <span class="float-right"> <i class="fa fa-frown-o" aria-hidden="true"></i> </span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: <?php echo $total_no_consolidados['total_no_consolidados']; ?>%"></div>
                  </div>
                  <p class="mb-0 text-white small-font">No consoliados <span class="float-right">+4.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
              </div>
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"> <?php echo $total_consolidados['total_consolidados']; ?> <span class="float-right"> <i class="fa fa-smile-o" aria-hidden="true"></i> </span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: <?php echo $total_consolidados['total_consolidados']; ?>%"></div>
                  </div>
                  <p class="mb-0 text-white small-font">Consoliados <span class="float-right">+1.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
              </div>
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"> <?php echo $total_no_encuentros['total_no_encuentros']; ?> <span class="float-right"> <i aria-hidden="true" class="fa fa-heartbeat"></i> </span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: <?php echo $total_no_encuentros['total_no_encuentros']; ?>%"></div>
                  </div>
                  <p class="mb-0 text-white small-font"> No encuentros <span class="float-right">+5.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
              </div>
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"> <?php echo $total_encuentros['total_encuentros']; ?> <span class="float-right"> <i aria-hidden="true" class="fa fa-heart"></i> </span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: <?php echo $total_encuentros['total_encuentros']; ?>%"></div>
                  </div>
                  <p class="mb-0 text-white small-font">Encuentros <span class="float-right"> </span></p>
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
                  <h5 class="text-white mb-0"> <?php echo $total_sin_escuela_lideres['total_sin_escuela_lideres']; ?> <span class="float-right"> <i class="fa fa-archive" aria-hidden="true"></i> </span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: <?php echo $total_sin_escuela_lideres['total_sin_escuela_lideres']; ?>%"></div>
                  </div>
                  <p class="mb-0 text-white small-font">Sin escuela de lideres <span class="float-right"> </span></p>
                </div>
              </div>

              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"> <?php echo $total_abandonado_escuela_lideres['total_abandonado_escuela_lideres']; ?> <span class="float-right"> <i class="fa fa-frown-o" aria-hidden="true"></i> </span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: <?php echo $total_abandonado_escuela_lideres['total_abandonado_escuela_lideres']; ?>%"></div>
                  </div>
                  <p class="mb-0 text-white small-font">  Escuela no terminada <span class="float-right"> </span></p>
                </div>
              </div>

              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"> <?php echo $total_proceso_escuela_lideres['total_proceso_escuela_lideres']; ?> <span class="float-right"> <i class="fa fa-university" aria-hidden="true"></i> </span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: <?php echo $total_proceso_escuela_lideres['total_proceso_escuela_lideres'] ?>%"></div>
                  </div>
                  <p class="mb-0 text-white small-font">Proceso escuela <span class="float-right"> </span></p>
                </div>
              </div>

              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"> <?php echo $total_escuela_lideres['total_escuela_lideres']; ?> <span class="float-right"> <i aria-hidden="true" class="fa fa-mortar-board"></i>  </span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: <?php echo $total_escuela_lideres['total_escuela_lideres']; ?>%"></div>
                  </div>
                  <p class="mb-0 text-white small-font">Escuela terminada <span class="float-right"> </span></p>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <!-- fin grupo 3-->

        <!--Grupo 3-->
        <div class="card mt-3">
          <div class="card-content">
            <div class="row row-group m-0">
              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"> <?php echo $total_gdf['total_gdf']; ?> <span class="float-right"> <i aria-hidden="true" class="fa fa-heart"></i> </span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: <?php echo $total_gdf['total_gdf']; ?>%"></div>
                  </div>
                  <p class="mb-0 text-white small-font"> Usuarios GDF  <span class="float-right">+4.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
              </div>

              <!-- <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"> <?php echo $total_gdf['total_gdf']; ?> <span class="float-right"> <i aria-hidden="true" class="fa fa-mortar-board"></i> </span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: <?php echo $total_gdf['total_gdf']; ?>%"></div>
                  </div>
                  <p class="mb-0 text-white small-font">  GDF <span class="float-right">+1.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
              </div>

              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"> <?php echo $total_gdf['total_gdf']; ?> <span class="float-right"> <i aria-hidden="true" class="fa fa-users"></i> </span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: <?php echo $total_gdf['total_gdf'] ?>%"></div>
                  </div>
                  <p class="mb-0 text-white small-font">GDF <span class="float-right">+1.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
              </div>

              <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"> <?php echo $total_bautizados['total_bautizados']; ?> <span class="float-right"><i class="fa fa-envira"></i></span></h5>
                  <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: <?php echo $total_bautizados['total_bautizados']; ?>%"></div>
                  </div>
                  <p class="mb-0 text-white small-font">Bautizados <span class="float-right">+2.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
              </div> -->

            </div>
          </div>
        </div>
        <!-- fin grupo 3-->

    
        <!--End Row-->