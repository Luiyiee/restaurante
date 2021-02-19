<?php
session_start();

require_once "../../../configuracion/conexion.php";
$conexion = conexion();
$id_2 = $_POST['id'];

$fecha = $_POST['fecha'];
$estado = $_POST['estado'];


if(isset($fecha) &&  isset($estado) ){

				$sql = "UPDATE tiempo_registro set
                    fecha='$fecha', estado='$estado'  where id='$id_2'";
				    $result = mysqli_query($conexion, $sql)or die($conexion->$sql);
                   echo "1";
}else{

}



