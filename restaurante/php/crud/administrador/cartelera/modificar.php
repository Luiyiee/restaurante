<?php
session_start();

require_once "../../../configuracion/conexion.php";
$conexion = conexion();
$id_2 = $_POST['id'];

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$descripcion = $_POST['descripcion'];
$fecha = $_POST['fecha'];



if (
	preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $nombre) &&
	preg_replace("/[^0-9]/", '', $telefono)
) {

	if ($_FILES['imagen']['name'] != '') {
		$carpeta = "../../../../images/cartelera/";
		$nombreI = $_FILES['imagen']['name'];

		//imagen.casa.jpg
		$temp = explode('.', $nombreI);
		$extension = end($temp);

		$nombreFinal = time() . '.' . $extension;
		if ($extension == 'jpg' || $extension == 'png' || $extension == 'jpeg' || $extension = 'JPG') {
			if (move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta . $nombreFinal)) {
				$fila = $conexion->query('select imagen from cartelera where id=' . $_POST['id']);
				$id = mysqli_fetch_row($fila);
				if (file_exists('../../../../images/cartelera/' . $id[0])) {
					unlink('../../../../images/cartelera/' . $id[0]);
				}
				$conexion->query("update cartelera set imagen='" . $nombreFinal . "' where id=" . $_POST['id']);
			} else {

				echo "no se puede subir la imagen";
			}
		}
	}

	$sql = "UPDATE cartelera set
 nombre='$nombre', telefono='$telefono', descripcion='$descripcion', fecha='$fecha'  where id='$id_2'";
	echo $result = mysqli_query($conexion, $sql);
}
