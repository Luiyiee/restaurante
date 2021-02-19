<?php 
session_start();    

require_once "../../../configuracion/conexion.php";
$conexion = conexion();


$fecha = $_POST['fecha'];
$estado = $_POST['estado'];


if(isset($fecha) &&  isset($estado) ){
    
  
        
            $conexion->query("insert into tiempo_registro
                (fecha, estado) values
                ('$fecha','$estado') 
                ")or die($conexion->error);
                echo "1";
}else{

}


?>