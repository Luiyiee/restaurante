<?php
include "../../../configuracion/conexion.php";
$conexion = conexion();

 $conexion->query("delete from tiempo_registro where id=".$_POST['id']);
echo '1';

?>