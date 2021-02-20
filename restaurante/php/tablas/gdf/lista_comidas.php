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
        <div class="card">
            <div class="card-header"><h1>Arroz</h1></div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush table-borderless">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Comida</th>
                                <th>Precio</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql_query = "SELECT * from tb_carta where categoria='comidas' and subcategoria='arroz' ";
                        $result_set = mysqli_query($conexion, $sql_query);
                        $i = 1;
                        while ($ver = mysqli_fetch_array($result_set)) {
                        ?>
                            <tr>
                                <td><img src="descarga.png" class="product-img" alt="product img"></td>
                                <td><?php echo $ver['nombre']; ?></td>
                                <td><?php echo '$ '.$ver['precio']; ?></td>
                                <td><button class="btn btn-outline-success">Agregar al pedido</button></td>
                            </tr>
                        <?php
                            $i++;
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<hr>
<br>
<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header"><h1>Sopa</h1></div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush table-borderless">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Comida</th>
                                <th>Precio</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql_query = "SELECT * from tb_carta where categoria='comidas' and subcategoria='sopa' ";
                        $result_set = mysqli_query($conexion, $sql_query);
                        $i = 1;
                        while ($ver = mysqli_fetch_array($result_set)) {
                        ?>
                            <tr>
                                <td><img src="descarga.png" class="product-img" alt="product img"></td>
                                <td><?php echo $ver['nombre']; ?></td>
                                <td><?php echo '$ '.$ver['precio']; ?></td>
                                <td><button class="btn btn-outline-success">Agregar al pedido</button></td>
                            </tr>
                        <?php
                            $i++;
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<hr>
<br>
<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header"><h1>Fritura</h1></div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush table-borderless">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Comida</th>
                                <th>Precio</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql_query = "SELECT * from tb_carta where categoria='comidas' and subcategoria='fritura' ";
                        $result_set = mysqli_query($conexion, $sql_query);
                        $i = 1;
                        while ($ver = mysqli_fetch_array($result_set)) {
                        ?>
                            <tr>
                                <td><img src="descarga.png" class="product-img" alt="product img"></td>
                                <td><?php echo $ver['nombre']; ?></td>
                                <td><?php echo '$ '.$ver['precio']; ?></td>
                                <td><button class="btn btn-outline-success">Agregar al pedido</button></td>
                            </tr>
                        <?php
                            $i++;
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->
<!-- modal ver -->