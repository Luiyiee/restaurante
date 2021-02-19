<?php
session_start();

require_once "../../../configuracion/conexion.php";
$conexion = conexion();
$id_2 = $_POST['id'];
$usuario = $_POST['usuario'];
$telefono_1 = $_POST['telefono_1'];
$telefono_2 = $_POST['telefono_2'];

$email = $_POST['email'];
$estado = $_POST['estado'];

$iduser = $_SESSION['datos_login']['usuario'];



if ($_FILES['imagen']['name'] != '') {
	$carpeta = "../../../../images/users/administradores/";
	$nombreI = $_FILES['imagen']['name'];

	//imagen.casa.jpg
	$temp = explode('.', $nombreI);
	$extension = end($temp);

	$nombreFinal = time() . '.' . $extension;
	if ($extension == 'jpg' || $extension == 'png' || $extension == 'jpeg') {
		if (move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta . $nombreFinal)) {
			$fila = $conexion->query('select img_perfil from usuarios where id=' . $_POST['id']);
			$id = mysqli_fetch_row($fila);
			if (file_exists('../../../../images/users/administradores/' . $id[0])) {
				unlink('../../../../images/users/administradores/' . $id[0]);
			}
			$conexion->query("update usuarios set img_perfil='" . $nombreFinal . "' where id=" . $_POST['id']);
		} else {

			echo "no se puede subir la imagen";
		}
	}

}

if (!preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $usuario)) {
	echo "No se pudo actualizar el usuario $usuario <br> Ingrese solo letras ";
} else
	if (preg_replace("/^[0-9]{10}+$/", '', $telefono_1)) {
	echo "No se pudo actualizar el teléfono $telefono_1 <br> Ingrese solo 10 números ";
} else
	
	if (preg_replace("/^[0-9]{10}+$/", '', $telefono_2)) {
	echo "No se pudo actualizar el teléfono $telefono_1 <br> Ingrese solo 10 números ";
} else 
	if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,10})$/', $email)) {
	echo "No se pudo actualizar el email $email";
} else {

	$sql = "UPDATE usuarios set
											usuario='$usuario',		
											telefono_1='$telefono_1', telefono_2='$telefono_2',	
											email='$email', estado='$estado', usuario_editado='$iduser' where id='$id_2'";
	echo $result = mysqli_query($conexion, $sql);
}
