<?php
include "../../../configuracion/conexion.php";
$conexion = conexion();

// $conexion->query("delete from usuarios where id=".$_POST['id']);
 $conexion->query("update gdf set consolidado= 'Consolidado' where id=".$_POST['id']);
echo '1';

?>