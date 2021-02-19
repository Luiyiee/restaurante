<?php 
session_start();    

require_once "../../../configuracion/conexion.php";
$conexion = conexion();
$id_2=$_POST['id'];
$usuario = $_POST['usuario'];
$lider_1 = $_POST['lider_1'];
$lider_2 = $_POST['lider_2'];
$telefono_1 = $_POST['telefono_1'];
$telefono_2 = $_POST['telefono_2'];

$email = $_POST['email'];
$estado = $_POST['estado'];

$iduser=$_SESSION['datos_login']['usuario'];


		if(preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/',$usuario) && 
		preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/',$lider_1) && 
		preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/',$lider_2) && 
		preg_replace("/[^0-9]/", '', $telefono_1) &&
		preg_replace("/[^0-9]/", '', $telefono_2) &&
		preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,10})$/',$email) &&
		preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/',$estado) 
		 ){

if ($_FILES['imagen']['name'] != '') {
    $carpeta="../../../../images/users/lideres/";
$nombreI = $_FILES['imagen']['name'];

//imagen.casa.jpg
$temp= explode( '.' ,$nombreI);
$extension= end($temp);

$nombreFinal = time().'.'.$extension;
if($extension=='jpg' || $extension == 'png' || $extension == 'jpeg' || $extension='JPG'){
	if(move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta.$nombreFinal)){
		$fila = $conexion->query('select img_perfil from usuarios where id=' . $_POST['id']);
		$id = mysqli_fetch_row($fila);
		if (file_exists('../../../../images/users/lideres/' . $id[0])) {
			unlink('../../../../images/users/lideres/' . $id[0]);
		}
		$conexion->query("update usuarios set img_perfil='" . $nombreFinal . "' where id=" . $_POST['id']);

	}else{
        
        echo "no se puede subir la imagen";
    }

}
}
    	   
$sql="UPDATE usuarios set
 usuario='$usuario',	
 lider_1='$lider_1', lider_2='$lider_2',	
 telefono_1='$telefono_1', telefono_2='$telefono_2',	
 email='$email', estado='$estado'  where id='$id_2'";
echo $result=mysqli_query($conexion,$sql);

	}

