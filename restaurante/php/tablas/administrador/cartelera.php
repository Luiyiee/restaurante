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
			<div class="card-header"><i class="fa fa-table"></i> CARTELERA EVENTO</div>

			<div class="card-header">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
					<i class="fa fa-plus"></i> Agregar evento
				</button>
			</div>

			<div class="card-body">
				<div class="table-responsive">
					<table id="example" class="table table-bordered">
						<thead>
							<tr>
								<th></th>
								<th>Foto</th>
								<th>nombre</th>
								<th>telefono</th>
								<th>Opciones</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$sql_query = "SELECT * FROM cartelera where eliminado ='1' ";
							$result_set = mysqli_query($conexion, $sql_query);
							$i = 1;
							while ($ver = mysqli_fetch_array($result_set)) {
								$datos = $ver['id'] . "||" .
									     $ver['nombre'] . "||" .
									     $ver['telefono'] . "||" .
									     $ver['descripcion'] . "||" .
									     $ver['fecha'];
							?>
								<tr>
									<td><?php echo $i; ?></td>
									<td>
										<img src="images/cartelera/<?php echo $ver['imagen']; ?>" width="20px" height="20px" alt="">

									</td>
     								<td><?php echo $ver['nombre']; ?></td>
									<td><?php echo $ver['telefono']; ?></td>
									<td>
										<button class="btn btn-warning btn-small btnVer" 
                                        data-id="<?php echo $ver['id']; ?>" 
                                        data-nombre="<?php echo $ver['nombre']; ?>"
                                        data-telefono="<?php echo $ver['telefono']; ?>"
                                        data-descripcion="<?php echo $ver['descripcion']; ?>"
                                        data-fecha="<?php echo $ver['fecha']; ?>"

                                        data-toggle="modal" data-target="#modalVer">

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
								<th>Nombre</th>
								<th>Telefono</th>
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

                    <div class="form-group">
                    <label>Nombre del evento</label> 
                    <input type="text" class="form-control input-sm" id="nombreVer" name="nombre">
					</div>
					
					<div class="row">

						<div class="col-sm-6">

							<label>Fecha</label> 
							<div class="input-group mb-3">
								<input type="text" class="form-control input-sm" id="fechaVer" name="fecha">

							</div>
						</div>

						<div class="col-sm-6">
							<label>Telefono</label> 
							<div class="input-group mb-3">
								<input type="text" class="form-control input-sm" id="telefonoVer" name="telefono">

							</div>
						</div>

					</div>
					<div class="form-group">
						<label for="email">Descripcion</label> 
                        <textarea type="text" name="descripcion" id="descripcionVer" class="form-control" required cols="30" rows="5">
                            </textarea>
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
			var nombre = $(this).data('nombre');
			var telefono = $(this).data('telefono');
			var descripcion = $(this).data('descripcion');
			var fecha = $(this).data('fecha');

			$("#nombreVer").val(nombre);
			$("#telefonoVer").val(telefono);
			$("#descripcionVer").val(descripcion);
			$("#fechaVer").val(fecha);
			$("#idVer").val(idEditar);

			// document.getElementById("emailVer").disabled = true;
			document.getElementById("nombreVer").disabled = true;
			document.getElementById("telefonoVer").disabled = true;
			document.getElementById("descripcionVer").disabled = true;
			document.getElementById("fechaVer").disabled = true;
		

		});
	});
</script>