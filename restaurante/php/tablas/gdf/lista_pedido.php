<?php
session_start();
require_once "../../configuracion/conexion.php";
$conexion = conexion();

?>


<!-- btn agregar -->


<!-- fin btn agregar -->

<!-- tabla -->

<div class="row">
    <div class="col-12 col-lg-12">
        <?php
            $sql_query = "SELECT * FROM `tb_carrito` as c INNER JOIN `tb_carta` as ca on c.fk_id_comida=ca.id_comida WHERE c.fk_id_usuario=118";
            $result_set = mysqli_query($conexion, $sql_query);
            if($result_set->num_rows==0){
        ?>
        <h1>No se encontro nada</h1>
        <?php
            }else{
        ?>
            <div class="card">
                <div class="card-header"><h2>Pedido o carrito</h2></div>
                <ul class="list-group list-group-flush">
                    <?php
                    while ($ver = mysqli_fetch_array($result_set)) {
                    ?>
                    <li class="list-group-item bg-transparent">
                        <div class="media align-items-center">
                            <img src="assets\images\avatars\avatar-13.png" alt="image" class="customer-img rounded-circle">
                            <div class="media-body ml-3">
                                <h4 class="mb-0"><?php echo $ver['nombre']; ?></h4>
                                <p class="mb-0 small-font">Cantidad: indefinido</p>
                            </div>
                            <div class="star"><?php echo $ver['precio']; ?></div>
                        </div>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        <?php
            }
        ?>
        <div class="media align-items-center">
            <div class="media-body ml-3">
                <h3 class="mb-0">TOTAL</h3>
            </div>
            <div class="star mr-3">$100</div>
        </div>
    </div>
</div>
        
<!--  -->
<!-- modal ver -->