<?php
session_start();
require_once "../../configuracion/conexion.php";
$conexion = conexion();

?>


<!-- btn agregar -->


<!-- fin btn agregar -->

<!-- tabla -->
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header"><i class="fa fa-table"></i> GDF</div>

			<div class="card-header">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
					<i class="fa fa-plus"></i> Agregar GDF
				</button>
			</div>

			<div class="card-body">
				<div class="table-responsive">
					<table id="example" class="table table-bordered">
						<thead>
							<tr>
								<th></th>
								<th>Foto</th>
								<th>Usuario</th>
								<th>Estado</th>
								<th>Opciones</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$sql_query = "SELECT * FROM usuarios where nivel = 'GDF' and eliminado ='1' ";
							$result_set = mysqli_query($conexion, $sql_query);
							$i = 1;
							while ($ver = mysqli_fetch_array($result_set)) {
								$datos = $ver['id'] . "||" .
									$ver['usuario'] . "||" .
									$ver['lider_1'] . "||" .
									$ver['lider_2'] . "||" .
									$ver['telefono_1'] . "||" .
									$ver['telefono_2'] . "||" .
									$ver['email'] . "||" .
									$ver['nivel'] . "||" .
									$ver['estado'];
							?>
								<tr>
									<td><?php echo $i; ?></td>
									<td>
										<img src="images/users/lideres/<?php echo $ver['img_perfil']; ?>" width="20px" height="20px" alt="">

									</td>
									<!-- <td><php echo $f[1]; ?></td> -->
									<!-- <td><php echo $f['GDF']; ?></td> -->
									<td><?php echo $ver['usuario']; ?></td>
									<td><?php echo $ver['estado']; ?></td>
									<td>
										<button class="btn btn-warning btn-small btnVer" data-id="<?php echo $ver['id']; ?>" data-usuario="<?php echo $ver['usuario']; ?>" data-lider_1="<?php echo $ver['lider_1']; ?>" data-lider_2="<?php echo $ver['lider_2']; ?>" data-telefono_1="<?php echo $ver['telefono_1']; ?>" data-telefono_2="<?php echo $ver['telefono_2']; ?>" data-email="<?php echo $ver['email']; ?>" data-estado="<?php echo $ver['estado']; ?>" data-fecha_creacion="<?php echo $ver['fecha_creacion']; ?>" data-fecha_editado="<?php echo $ver['fecha_editado']; ?>" data-toggle="modal" data-target="#modalVer">

											<i class="fas fa-eye"></i>
										</button>

										<button class="btn btn-success glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
											<i class="fa fa-edit"></i>
										</button>

										<button class="btn btn-danger glyphicon glyphicon-remove" onclick="preguntarSiNo('<?php echo $ver['id'] ?>')">
											<i class="fa fa-trash"></i>
										</button>

									</td>
								</tr>
							<?php
								$i++;
							}
							?>
						</tbody>
						<tfoot>
							<tr>
								<th>#</th>
								<th>Foto</th>
								<th>Usuario</th>
								<th>Estado</th>
								<th></th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!--  -->
<!-- modal ver -->
<div class="modal fade" id="modalVer" tabindex="-1" role="dialog" aria-labelledby="modalVer" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form method="POST" enctype="multipart/form-data">
				<div class="modal-header">
					<h5 class="modal-title" id="modalVer">Datos</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<input type="hidden" id="idVer" name="id">


					<div class="row">

						<div class="col-sm-6">
							<label>Usuario</label>
							<div class="input-group mb-3">
								<input type="text" class="form-control input-sm" id="usuarioVer" name="usuario">
							</div>
						</div>

						<div class="col-sm-6">
							<label>Estado</label>
							<input type="text" class="form-control input-sm" id="estadoVer" name="estado">
						</div>

					</div>


					<div class="form-group">
						<label for="lider_1">Lider 1</label> 
						<input type="text" name="lider_1" placeholder="lider 1" id="liderVer_1" class="form-control">

					</div>

					<div class="form-group">
						<label for="lider_2">Lider 2</label>
						<input type="text" name="lider_2" placeholder="lider 2" id="liderVer_2" class="form-control">

					</div>

					<div class="row">

						<div class="col-sm-6">

							<label>Telefono 1</label> 
							<div class="input-group mb-3">
								<input type="text" class="form-control input-sm" id="telefonoVer_1" name="telefono_1">

							</div>
						</div>

						<div class="col-sm-6">
							<label>Telefono 2</label> 
							<div class="input-group mb-3">
								<input type="text" class="form-control input-sm" id="telefonoVer_2" name="telefono_2">

							</div>
						</div>

					</div>
					<div class="form-group">
						<label for="email">Email</label> 
						<input type="text" name="email" placeholder="email" id="emailVer" class="form-control" required>
					</div>


					<div class="row">

						<div class="col-sm-6">

							<label>Creado</label> 
							<div class="input-group mb-3"> 
								<input type="text" class="form-control input-sm" id="fecha_creacionVer" name="fecha_creacionVer">

							</div>
						</div>

						<div class="col-sm-6">
							<label>Ultima modificación</label> 
							<div class="input-group mb-3">
								<input type="text" class="form-control input-sm" id="fecha_editadoVer" name="fecha_editadoVer">

							</div>
						</div>

					</div>



				</div>
			</form>
		</div>
	</div>
</div>
<!-- modal eliminar -->

<!-- scripts -->
<script>
	$(document).ready(function() {
		//Default data table
		$('#default-datatable').DataTable();


		var table = $('#example').DataTable({
			lengthChange: false,
			buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
		});

		table.buttons().container()
			.appendTo('#example_wrapper .col-md-6:eq(0)');

	});
</script>
<!-- eliminar -->

<!-- Ver -->
<script>
	$(document).ready(function() {

		$(".btnVer").click(function() {
			idEditar = $(this).data('id');
			var usuario = $(this).data('usuario');
			var lider_1 = $(this).data('lider_1');
			var lider_2 = $(this).data('lider_2');
			var telefono_1 = $(this).data('telefono_1');
			var telefono_2 = $(this).data('telefono_2');
			var email = $(this).data('email');
			var estado = $(this).data('estado');
			var fecha_creacion = $(this).data('fecha_creacion');
			var fecha_editado = $(this).data('fecha_editado');

			$("#usuarioVer").val(usuario);
			$("#liderVer_1").val(lider_1);
			$("#liderVer_2").val(lider_2);
			$("#telefonoVer_1").val(telefono_1);
			$("#telefonoVer_2").val(telefono_2);
			$("#emailVer").val(email);
			$("#estadoVer").val(estado);
			$("#fecha_creacionVer").val(fecha_creacion);
			$("#fecha_editadoVer").val(fecha_editado);
			$("#idVer").val(idEditar);

			// document.getElementById("emailVer").disabled = true;
			document.getElementById("usuarioVer").disabled = true;
			document.getElementById("liderVer_1").disabled = true;
			document.getElementById("liderVer_2").disabled = true;
			document.getElementById("telefonoVer_1").disabled = true;
			document.getElementById("telefonoVer_2").disabled = true;
			document.getElementById("emailVer").disabled = true;
			document.getElementById("estadoVer").disabled = true;
			document.getElementById("fecha_creacionVer").disabled = true;
			document.getElementById("fecha_editadoVer").disabled = true;


		});
	});
</script>