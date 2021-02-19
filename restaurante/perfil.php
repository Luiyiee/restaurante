<?php

session_start();
include "configuracion/conexion.php";
if (!isset($_SESSION['datos_login'])) {
    header("Location: ../index.php");
}
$arregloUsuario = $_SESSION['datos_login'];



if (!isset($_GET['edit_id'])) {
    header("Location: ../prejus.cdf/inicio.php");
   
} else if(isset($_GET['edit_id'])) {

    if($arregloUsuario['id_usuario']== $_GET['edit_id']){
    $sql_query = "SELECT * FROM usuarios WHERE id=" . $_GET['edit_id'];
    $result_set = mysqli_query($conexion, $sql_query);
    $fetched_row = mysqli_fetch_array($result_set, MYSQLI_ASSOC); 
    
   }else {
    header("Location: ../prejus.cdf/inicio.php");
   }
   
    
}
?>

<title>Cartelera</title>
<?php require 'layouts/menu.php' ?>
<?php require 'layouts/barra.php' ?>

    <!-- <div class="content-wrapper">
    <div class="container-fluid"> -->
        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row mt-3">

                    <!-- 3 -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">

                                    <li class="nav-item">
                                        <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"> <span class="hidden-xs">Información</span></a>
                                    </li>
                                </ul>

                                <!-- salto -->
                                <div class="form-group row"></div>

                                <!-- form edi -->
                                <div class="tab-pane" id="edit">
                                    <form method="post" enctype="multipart/form-data">

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label form-control-label">Nombre: </label>
                                            <div class="col-lg-9">

                                                <input  type="text" value="<?php echo $fetched_row['nombre'] ?>" class="form-control" id="nombre" name="nombre">

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label form-control-label">Lider 1: </label>
                                            <div class="col-lg-9">
                                                <input  type="text" value="<?php echo $fetched_row['lider_1'] ?>" class="form-control" id="lider_1" name="lider_1">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label form-control-label">Lider 2: </label>
                                            <div class="col-lg-9">
                                                <input  type="text" value="<?php echo $fetched_row['lider_2'] ?>" class="form-control" id="lider_2" name="lider_2">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label form-control-label">Telefono 1: </label>
                                            <div class="col-lg-9">
                                                <input  type="text" value="<?php echo $fetched_row['telefono_1'] ?>" class="form-control" id="telefono_1" name="telefono">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label form-control-label">Telefono 2: </label>
                                            <div class="col-lg-9">
                                                <input type="text" value="<?php echo $fetched_row['telefono_2'] ?>" class="form-control" id="telefono_2" name="telefono">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label form-control-label">Email: </label>
                                            <div class="col-lg-9">
                                                <input type="text" value="<?php echo $fetched_row['email'] ?>" class="form-control" id="email" name="email">
                                            </div>
                                        </div>

                                </div>

                                <div class="form-group row">

                                    <label class="col-lg-3 col-form-label form-control-label">Imagen</label>
                                    <div class="col-lg-6">
                                     <?php if($_SESSION['datos_login']['nivel']=='Administrador'){
                                         ?>
                                        <center>  <img src="../images/users/<?php echo $fetched_row['img_perfil']; ?>" width="50%" height="100%" alt=""></center>
                                         <?php 
                                     }else if($_SESSION['datos_login']['nivel']=='Lider'){
                                        ?>  
                                         <center>  <img src="../images/users/lideres/<?php echo $fetched_row['img_perfil']; ?>" width="50%" height="100%" alt=""></center>
                                        <?php
                                     }?>
                                    </div>

                                </div>

                                </form>
                            </div>
                            <!-- form edit -->

                        </div>
                    </div>
                </div>
                <!-- 3 -->
            </div>

        </div>



    </div>

</div>
<!--start overlay-->
<div class="overlay toggle-menu"></div>
<!--end overlay-->
<script>

                document.getElementById("nombre").disabled = true;
                document.getElementById("lider_1").disabled = true;
                document.getElementById("lider_2").disabled = true;
                document.getElementById("telefono_1").disabled = true;
                document.getElementById("telefono_2").disabled = true;
                document.getElementById("email").disabled = true;
    
                 
</script>

<!-- Bootstrap core JavaScript-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- simplebar js -->
<script src="assets/plugins/simplebar/js/simplebar.js"></script>
<!-- sidebar-menu js -->
<script src="assets/js/sidebar-menu.js"></script>

<!-- Custom scripts -->
<script src="assets/js/app-script.js"></script>

</body>

</html>