<?php 
$servidor="localhost";
$nombreBd="prejus.cdf";
$usuario="root";
$pass="";
$conexion2 = new mysqli($servidor,$usuario,$pass,$nombreBd);
if($conexion2 -> connect_error ){
    die("No se pudo conectar");
    
}
$conexion2->set_charset('utf8');
$resultado = $conexion2->query("select * from usuarios where id='".$_SESSION['datos_login']['id_usuario']."'")or die($conexion2->error);
$datos_usuario = mysqli_fetch_row($resultado);
$_SESSION['datos_login']['usuario']= $datos_usuario[1];
$_SESSION['datos_login']['telefono_1']= $datos_usuario[6];
$_SESSION['datos_login']['email']= $datos_usuario[6];
$_SESSION['datos_login']['imagen']= $datos_usuario[8];
$_SESSION['datos_login']['nivel']= $datos_usuario[9];
$_SESSION['datos_login']['estado']= $datos_usuario[10];
$_SESSION['datos_login']['conexion']= $datos_usuario[15];
$conexion2->close();
?>