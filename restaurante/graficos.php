<?php
session_start();

if (!isset($_SESSION['datos_login'])) {
    header("Location: ../");
}

$arregloUsuario = $_SESSION['datos_login'];

if ($arregloUsuario['nivel'] != 'Administrador') {
    header("Location: ../");
}

include_once 'php/configuracion/conexion.php';
$conexion = conexion();


//testimonios-peticiones
$sql_pt  = "SELECT COUNT(*) total_pt FROM p_t";
$result_pt  = mysqli_query($conexion, $sql_pt);
$total_pt = mysqli_fetch_assoc($result_pt);

$sql_peticion  = "SELECT COUNT(*) total_peticion FROM p_t where p_t = 'peticion' ";
$result_peticion  = mysqli_query($conexion, $sql_peticion);
$total_peticion = mysqli_fetch_assoc($result_peticion);

$sql_testimonio = "SELECT COUNT(*) total_testimonio FROM p_t where p_t = 'testimonio' ";
$result_testimonio  = mysqli_query($conexion, $sql_testimonio);
$total_testimonio = mysqli_fetch_assoc($result_testimonio);

//peticiones

$peticiones_enero      = "select COUNT(*) total_peticiones_enero       from p_t WHERE p_t LIKE 'peticion' AND fecha BETWEEN '2020-01-1' AND '2020-01-31' ";
$peticiones_febrero    = "select COUNT(*) total_peticiones_febrero     from p_t WHERE p_t LIKE 'peticion' AND fecha BETWEEN '2020-02-1' AND '2020-02-28' ";
$peticiones_marzo      = "select COUNT(*) total_peticiones_marzo       from p_t WHERE p_t LIKE 'peticion' AND fecha BETWEEN '2020-03-1' AND '2020-03-31' ";
$peticiones_abril      = "select COUNT(*) total_peticiones_abril       from p_t WHERE p_t LIKE 'peticion' AND fecha BETWEEN '2020-04-1' AND '2020-04-30' ";
$peticiones_mayo       = "select COUNT(*) total_peticiones_mayo        from p_t WHERE p_t LIKE 'peticion' AND fecha BETWEEN '2020-05-1' AND '2020-05-31' ";
$peticiones_junio      = "select COUNT(*) total_peticiones_junio       from p_t WHERE p_t LIKE 'peticion' AND fecha BETWEEN '2020-06-1' AND '2020-06-30' ";
$peticiones_julio      = "select COUNT(*) total_peticiones_julio       from p_t WHERE p_t LIKE 'peticion' AND fecha BETWEEN '2020-07-1' AND '2020-07-31' ";
$peticiones_agosto     = "select COUNT(*) total_peticiones_agosto      from p_t WHERE p_t LIKE 'peticion' AND fecha BETWEEN '2020-08-1' AND '2020-08-31' ";
$peticiones_septiembre = "select COUNT(*) total_peticiones_septiembre  from p_t WHERE p_t LIKE 'peticion' AND fecha BETWEEN '2020-09-1' AND '2020-09-30' ";
$peticiones_octubre    = "select COUNT(*) total_peticiones_octubre     from p_t WHERE p_t LIKE 'peticion' AND fecha BETWEEN '2020-10-1' AND '2020-10-31' ";
$peticiones_noviembre  = "select COUNT(*) total_peticiones_noviembre   from p_t WHERE p_t LIKE 'peticion' AND fecha BETWEEN '2020-11-1' AND '2020-11-30' ";
$peticiones_diciembre  = "select COUNT(*) total_peticiones_diciembre   from p_t WHERE p_t LIKE 'peticion' AND fecha BETWEEN '2020-12-1' AND '2020-12-31' ";


$peticiones_enero      = mysqli_query($conexion, $peticiones_enero);
$peticiones_febrero    = mysqli_query($conexion, $peticiones_febrero);
$peticiones_marzo      = mysqli_query($conexion, $peticiones_marzo);
$peticiones_abril      = mysqli_query($conexion, $peticiones_abril);
$peticiones_mayo       = mysqli_query($conexion, $peticiones_mayo);
$peticiones_junio      = mysqli_query($conexion, $peticiones_junio);
$peticiones_julio      = mysqli_query($conexion, $peticiones_julio);
$peticiones_agosto     = mysqli_query($conexion, $peticiones_agosto);
$peticiones_septiembre = mysqli_query($conexion, $peticiones_septiembre);
$peticiones_octubre    = mysqli_query($conexion, $peticiones_octubre);
$peticiones_noviembre  = mysqli_query($conexion, $peticiones_noviembre);
$peticiones_diciembre  = mysqli_query($conexion, $peticiones_diciembre);


$peticiones_enero      = mysqli_fetch_assoc($peticiones_enero);
$peticiones_febrero    = mysqli_fetch_assoc($peticiones_febrero);
$peticiones_marzo      = mysqli_fetch_assoc($peticiones_marzo);
$peticiones_abril      = mysqli_fetch_assoc($peticiones_abril);
$peticiones_mayo       = mysqli_fetch_assoc($peticiones_mayo);
$peticiones_junio      = mysqli_fetch_assoc($peticiones_junio);
$peticiones_julio      = mysqli_fetch_assoc($peticiones_julio);
$peticiones_agosto     = mysqli_fetch_assoc($peticiones_agosto);
$peticiones_septiembre = mysqli_fetch_assoc($peticiones_septiembre);
$peticiones_octubre    = mysqli_fetch_assoc($peticiones_octubre);
$peticiones_noviembre  = mysqli_fetch_assoc($peticiones_noviembre);
$peticiones_diciembre  = mysqli_fetch_assoc($peticiones_diciembre);


//testimonios 

$testimonios_enero      = "select COUNT(*) total_testimonios_enero      from p_t WHERE p_t LIKE 'testimonio' AND fecha BETWEEN '2020-01-1' AND '2020-01-31' ";
$testimonios_febrero    = "select COUNT(*) total_testimonios_febrero    from p_t WHERE p_t LIKE 'testimonio' AND fecha BETWEEN '2020-02-1' AND '2020-02-28' ";
$testimonios_marzo      = "select COUNT(*) total_testimonios_marzo      from p_t WHERE p_t LIKE 'testimonio' AND fecha BETWEEN '2020-03-1' AND '2020-03-31' ";
$testimonios_abril      = "select COUNT(*) total_testimonios_abril      from p_t WHERE p_t LIKE 'testimonio' AND fecha BETWEEN '2020-04-1' AND '2020-04-30' ";
$testimonios_mayo       = "select COUNT(*) total_testimonios_mayo       from p_t WHERE p_t LIKE 'testimonio' AND fecha BETWEEN '2020-05-1' AND '2020-05-31' ";
$testimonios_junio      = "select COUNT(*) total_testimonios_junio      from p_t WHERE p_t LIKE 'testimonio' AND fecha BETWEEN '2020-06-1' AND '2020-06-30' ";
$testimonios_julio      = "select COUNT(*) total_testimonios_julio      from p_t WHERE p_t LIKE 'testimonio' AND fecha BETWEEN '2020-07-1' AND '2020-07-31' ";
$testimonios_agosto     = "select COUNT(*) total_testimonios_agosto     from p_t WHERE p_t LIKE 'testimonio' AND fecha BETWEEN '2020-08-1' AND '2020-08-31' ";
$testimonios_septiembre = "select COUNT(*) total_testimonios_septiembre from p_t WHERE p_t LIKE 'testimonio' AND fecha BETWEEN '2020-09-1' AND '2020-09-30' ";
$testimonios_octubre    = "select COUNT(*) total_testimonios_octubre    from p_t WHERE p_t LIKE 'testimonio' AND fecha BETWEEN '2020-10-1' AND '2020-10-31' ";
$testimonios_noviembre  = "select COUNT(*) total_testimonios_noviembre  from p_t WHERE p_t LIKE 'testimonio' AND fecha BETWEEN '2020-11-1' AND '2020-11-30' ";
$testimonios_diciembre  = "select COUNT(*) total_testimonios_diciembre  from p_t WHERE p_t LIKE 'testimonio' AND fecha BETWEEN '2020-12-1' AND '2020-12-31' ";


$testimonios_enero      = mysqli_query($conexion, $testimonios_enero);
$testimonios_febrero    = mysqli_query($conexion, $testimonios_febrero);
$testimonios_marzo      = mysqli_query($conexion, $testimonios_marzo);
$testimonios_abril      = mysqli_query($conexion, $testimonios_abril);
$testimonios_mayo       = mysqli_query($conexion, $testimonios_mayo);
$testimonios_junio      = mysqli_query($conexion, $testimonios_junio);
$testimonios_julio      = mysqli_query($conexion, $testimonios_julio);
$testimonios_agosto     = mysqli_query($conexion, $testimonios_agosto);
$testimonios_septiembre = mysqli_query($conexion, $testimonios_septiembre);
$testimonios_octubre    = mysqli_query($conexion, $testimonios_octubre);
$testimonios_noviembre  = mysqli_query($conexion, $testimonios_noviembre);
$testimonios_diciembre  = mysqli_query($conexion, $testimonios_diciembre);


$testimonios_enero      = mysqli_fetch_assoc($testimonios_enero);
$testimonios_febrero    = mysqli_fetch_assoc($testimonios_febrero);
$testimonios_marzo      = mysqli_fetch_assoc($testimonios_marzo);
$testimonios_abril      = mysqli_fetch_assoc($testimonios_abril);
$testimonios_mayo       = mysqli_fetch_assoc($testimonios_mayo);
$testimonios_junio      = mysqli_fetch_assoc($testimonios_junio);
$testimonios_julio      = mysqli_fetch_assoc($testimonios_julio);
$testimonios_agosto     = mysqli_fetch_assoc($testimonios_agosto);
$testimonios_septiembre = mysqli_fetch_assoc($testimonios_septiembre);
$testimonios_octubre    = mysqli_fetch_assoc($testimonios_octubre);
$testimonios_noviembre  = mysqli_fetch_assoc($testimonios_noviembre);
$testimonios_diciembre  = mysqli_fetch_assoc($testimonios_diciembre);



//registros
// $testimonios_total      = "select COUNT(*) total_testimonios            from p_t WHERE p_t LIKE 'testimonio' ";
$sql_registros_enero      = "SELECT COUNT(*) total_registros_enero      FROM registros WHERE fecha BETWEEN '2020-01-1' AND '2020-01-31'";
$sql_registros_febrero    = "SELECT COUNT(*) total_registros_febrero    FROM registros WHERE fecha BETWEEN '2020-02-1' AND '2020-02-28'";
$sql_registros_marzo      = "SELECT COUNT(*) total_registros_marzo      FROM registros WHERE fecha BETWEEN '2020-03-1' AND '2020-03-31'";
$sql_registros_abril      = "SELECT COUNT(*) total_registros_abril      FROM registros WHERE fecha BETWEEN '2020-04-1' AND '2020-04-30'";
$sql_registros_mayo       = "SELECT COUNT(*) total_registros_mayo       FROM registros WHERE fecha BETWEEN '2020-05-1' AND '2020-05-31'";
$sql_registros_junio      = "SELECT COUNT(*) total_registros_junio      FROM registros WHERE fecha BETWEEN '2020-06-1' AND '2020-06-30'";
$sql_registros_julio      = "SELECT COUNT(*) total_registros_julio      FROM registros WHERE fecha BETWEEN '2020-07-1' AND '2020-07-31'";
$sql_registros_agosto     = "SELECT COUNT(*) total_registros_agosto     FROM registros WHERE fecha BETWEEN '2020-08-1' AND '2020-08-31'";
$sql_registros_septiembre = "SELECT COUNT(*) total_registros_septiembre FROM registros WHERE fecha BETWEEN '2020-09-1' AND '2020-09-30'";
$sql_registros_octubre    = "SELECT COUNT(*) total_registros_octubre    FROM registros WHERE fecha BETWEEN '2020-10-1' AND '2020-10-31'";
$sql_registros_noviembre  = "SELECT COUNT(*) total_registros_noviembre  FROM registros WHERE fecha BETWEEN '2020-11-1' AND '2020-11-30'";
$sql_registros_diciembre  = "SELECT COUNT(*) total_registros_diciembre  FROM registros WHERE fecha BETWEEN '2020-12-1' AND '2020-12-31'";



$result_registros_enero      = mysqli_query($conexion, $sql_registros_enero);
$result_registros_febrero    = mysqli_query($conexion, $sql_registros_febrero);
$result_registros_marzo      = mysqli_query($conexion, $sql_registros_marzo);
$result_registros_abril      = mysqli_query($conexion, $sql_registros_abril);
$result_registros_mayo       = mysqli_query($conexion, $sql_registros_mayo);
$result_registros_junio      = mysqli_query($conexion, $sql_registros_junio);
$result_registros_julio      = mysqli_query($conexion, $sql_registros_julio);
$result_registros_agosto     = mysqli_query($conexion, $sql_registros_agosto);
$result_registros_septiembre = mysqli_query($conexion, $sql_registros_septiembre);
$result_registros_octubre    = mysqli_query($conexion, $sql_registros_octubre);
$result_registros_noviembre  = mysqli_query($conexion, $sql_registros_noviembre);
$result_registros_diciembre  = mysqli_query($conexion, $sql_registros_diciembre);

$fila_registros_enero      = mysqli_fetch_assoc($result_registros_enero);
$fila_registros_febrero    = mysqli_fetch_assoc($result_registros_febrero);
$fila_registros_marzo      = mysqli_fetch_assoc($result_registros_marzo);
$fila_registros_abril      = mysqli_fetch_assoc($result_registros_abril);
$fila_registros_mayo       = mysqli_fetch_assoc($result_registros_mayo);
$fila_registros_junio      = mysqli_fetch_assoc($result_registros_junio);
$fila_registros_julio      = mysqli_fetch_assoc($result_registros_julio);
$fila_registros_agosto     = mysqli_fetch_assoc($result_registros_agosto);
$fila_registros_septiembre = mysqli_fetch_assoc($result_registros_septiembre);
$fila_registros_octubre    = mysqli_fetch_assoc($result_registros_octubre);
$fila_registros_noviembre  = mysqli_fetch_assoc($result_registros_noviembre);
$fila_registros_diciembre  = mysqli_fetch_assoc($result_registros_diciembre);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Dashtreme - Multipurpose Bootstrap4 Admin Template</title>
  <!--favicon-->
  <link rel="icon" href="assets\images\favicon.ico" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="assets\plugins\simplebar\css\simplebar.css" rel="stylesheet">
  <!-- Bootstrap core CSS-->
  <link href="assets\css\bootstrap.min.css" rel="stylesheet">
  <!-- animate CSS-->
  <link href="assets\css\animate.css" rel="stylesheet" type="text/css">
  <!-- Icons CSS-->
  <link href="assets\css\icons.css" rel="stylesheet" type="text/css">
  <!-- Sidebar CSS-->
  <link href="assets\css\sidebar-menu.css" rel="stylesheet">
  <!-- Custom Style-->
  <link href="assets\css\app-style.css" rel="stylesheet">
  
</head>

<body class="bg-theme bg-theme1">

  <!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner"><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <!--Start sidebar-wrapper-->
   
 <?php include 'layouts/menu.php' ?>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<?php include 'layouts/barra.php' ?>

<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
     <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Chart JS</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Dashtreme</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Charts</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chart JS</li>
         </ol>
	   </div>
	   <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
        <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
        <span class="caret"></span>
        </button>
        <div class="dropdown-menu">
          <a href="javaScript:void();" class="dropdown-item">Action</a>
          <a href="javaScript:void();" class="dropdown-item">Another action</a>
          <a href="javaScript:void();" class="dropdown-item">Something else here</a>
          <div class="dropdown-divider"></div>
          <a href="javaScript:void();" class="dropdown-item">Separated link</a>
        </div>
      </div>
     </div>
     </div>
    <!-- End Breadcrumb-->
    
     <div class="row">
        <div class="col-lg-6 col-xl-10">
          <div class="card">
            <div class="card-header text-uppercase">Line chart</div>
           <div class="card-body">
                 <canvas id="lineChart"></canvas>
             </div>
          </div>
        </div>
        <div class="col-lg-6 col-xl-10">
          <div class="card">
            <div class="card-header text-uppercase">Peticiones - Testimonios</div>
            <div class="card-body">
              <canvas id="barChart"></canvas>
            </div>
          </div>
        </div>
      </div><!--End Row-->

	   <div class="row">
	   <div class="col-lg-6 col-xl-4">
          <div class="card">
            <div class="card-header text-uppercase">Tribus</div>
            <div class="card-body">
              <canvas id="polarChart" height="240"></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-xl-4">
          <div class="card">
            <div class="card-header text-uppercase">Pie Chart</div>
            <div class="card-body">
              <canvas id="pieChart" height="240"></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-xl-4">
          <div class="card">
            <div class="card-header text-uppercase">Doughnut Chart</div>
            <div class="card-body">
              <canvas id="doughnutChart" height="240"></canvas>
            </div>
          </div>
        </div>
      </div><!--End Row-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 Dashtreme Admin
        </div>
      </div>
    </footer>
	<!--End footer-->
	
	<!--start color switcher-->

  <!--end color cwitcher-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="assets\js\jquery.min.js"></script>
  <script src="assets\js\popper.min.js"></script>
  <script src="assets\js\bootstrap.min.js"></script>
	
  <!-- simplebar js -->
  <script src="assets\plugins\simplebar\js\simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets\js\sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets\js\app-script.js"></script>
  <!-- Chart JS -->
  <script src="assets\plugins\Chart.js\Chart.min.js"></script>
 
<script type="text/javascript">

(function(window, document, $, undefined) {
	  "use strict";
	$(function() {

		if ($('#lineChart').length) {
			
			var ctx = document.getElementById('lineChart').getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'line',
				data: {
					labels: [
                             'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio',
                             'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
                            ],
					datasets: [{
						label: 'Convertidos',
						data: [
							3, 30, 6, 6, 3, 4, 11,32,54,87,1,354
						],
						backgroundColor: "rgb(255, 255, 255)",
						borderColor: "transparent",
						pointRadius :"0",
						borderWidth: 1
					}, {
						label: 'Reconciliados',
						data: [3, 30, 6, 6, 3, 4, 11,32,54,87,1,354],
						backgroundColor: "rgba(255, 255, 255, 0.25)",
						borderColor: "transparent",
						pointRadius :"0",
						borderWidth: 1
					}]
				},
			options: {
				legend: {
				  display: true,
				  labels: {
					fontColor: '#ddd',  
					boxWidth:40
				  }
				},
				tooltips: {
				  enabled:false
				},	
			  scales: {
				  xAxes: [{
					ticks: {
						beginAtZero:true,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }],
				   yAxes: [{
					ticks: {
						beginAtZero:true,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }]
				 }

			 }
			});
			
		}
// REGISTROS

		if ($('#barChart').length) {
			var ctx = document.getElementById("barChart").getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: [
                             'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio',
                             'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre','total'
                            ],
					datasets: [{
						label: 'Peticiones',
						data: [
							<?php echo $peticiones_enero['total_peticiones_enero'] ?>, <?php echo $peticiones_febrero['total_peticiones_febrero'] ?>,
							<?php echo $peticiones_marzo['total_peticiones_marzo'] ?>, <?php echo $peticiones_abril['total_peticiones_abril'] ?>,
							<?php echo $peticiones_mayo['total_peticiones_mayo'] ?>, <?php echo $peticiones_junio['total_peticiones_junio'] ?>,
							<?php echo $peticiones_julio['total_peticiones_julio'] ?>, <?php echo $peticiones_agosto['total_peticiones_agosto'] ?>,
							<?php echo $peticiones_septiembre['total_peticiones_septiembre'] ?>, <?php echo $peticiones_octubre['total_peticiones_octubre'] ?>,
							<?php echo $peticiones_noviembre['total_peticiones_noviembre'] ?>, <?php echo $peticiones_diciembre['total_peticiones_diciembre'] ?>,
							<?php echo $total_peticion['total_peticion'] ?>,

						],
						backgroundColor: "rgba(255, 0.50, 255, 0.25)"
					}, {
						label: 'Testimonios',
						data: [
							<?php echo $testimonios_enero['total_testimonios_enero'] ?>, <?php echo $testimonios_febrero['total_testimonios_febrero'] ?>,
							<?php echo $testimonios_marzo['total_testimonios_marzo'] ?>, <?php echo $testimonios_abril['total_testimonios_abril'] ?>,
							<?php echo $testimonios_mayo['total_testimonios_mayo'] ?>, <?php echo $testimonios_junio['total_testimonios_junio'] ?>,
							<?php echo $testimonios_julio['total_testimonios_julio'] ?>, <?php echo $testimonios_agosto['total_testimonios_agosto'] ?>,
							<?php echo $testimonios_septiembre['total_testimonios_septiembre'] ?>, <?php echo $testimonios_octubre['total_testimonios_octubre'] ?>,
							<?php echo $testimonios_noviembre['total_testimonios_noviembre'] ?>, <?php echo $testimonios_diciembre['total_testimonios_diciembre'] ?>,
							<?php echo $total_testimonio['total_testimonio'] ?>,
						],
						backgroundColor:  "rgba(255, 255, 0.50, 0.50)"
					
					}, {
						label: 'Total',
						data: [
							0,0,0,0,0,0,0,0,0,0,0,0,
							<?php echo $total_pt['total_pt'] ?>,
						],
						backgroundColor: "#fff"
					}]
				},
			options: {
				legend: {
				  display: true,
				  labels: {
					fontColor: '#ddd',  
					boxWidth:40
				  }
				},
				tooltips: {
				  enabled:false
				},	
			  scales: {
				  xAxes: [{
					  barPercentage: .5,
					ticks: {
						beginAtZero:true,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }],
				   yAxes: [{
					ticks: {
						beginAtZero:true,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }]
				 }

			 }
			});
		}
// Tribus
		if ($('#polarChart').length) {
			var ctx = document.getElementById("polarChart").getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'polarArea',
				data: {
					labels: [
						<?php 
								$sql_query = "SELECT * FROM tribus  ";
								$result_set = mysqli_query($conexion, $sql_query);
								$i = 1;
								while ($ver = mysqli_fetch_array($result_set)) {
									$datos = $ver['id'] . "||" . $ver['nombre'];
											 ?>
                                 "<?php echo $ver['nombre']?>",
					<?php } ?>
					],
					datasets: [{
						backgroundColor: [
							"blue",
							"yellow",
							"red",
							"green"
						],
						data: [
							<?php 
								$sql_query = "SELECT COUNT(tribu) total from registros GROUP BY tribu ";
								$result_set = mysqli_query($conexion, $sql_query);
								$i = 1;
								while ($ver = mysqli_fetch_array($result_set)) {  ?>
                                 "<?php echo $ver['total']?>",
					<?php } ?>
                                 
                                ],
						borderWidth: [0, 0, 0, 0]
					}]
				},
			options: {
			   legend: {
				 position :"right",	
				 display: true,
				    labels: {
					  fontColor: '#ddd',  
					  boxWidth:15
				   }
				},
			scale: {
				  gridLines: {
					   color: "rgba(221, 221, 221, 0.12)" 
					 }, 
				}
			   }
			});
		}

// Registros
		if ($('#pieChart').length) {
			var ctx = document.getElementById("pieChart").getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'pie',
				data: {
					labels: ["Prejus Camp", "One the line", "Lable3", "Lable4,","asd"],
					datasets: [{
						backgroundColor: [
							"rgba(255, 255, 255, 0.35)",
							"#ffffff",
							"rgba(255, 255, 255, 0.12)",
							"rgba(255, 255, 255, 0.71)"
						],
						data: [13, 120, 11, 20,12],
						borderWidth: [0, 0, 0, 0]
					}]
				},
			options: {
			   legend: {
				 position :"right",	
				 display: true,
				    labels: {
					  fontColor: '#ddd',  
					  boxWidth:15
				   }
				}
			   }
			});
		}

// Lideres
		if ($('#doughnutChart').length) {
			var ctx = document.getElementById("doughnutChart").getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'doughnut',
				data: {
					labels: ["Convertidos", "Reconciliados", "Encuentros", "Escuela de lideres"],
					datasets: [{
						backgroundColor: [
							"rgba(255, 255, 255, 0.35)",
							"#ffffff",
							"rgba(255, 255, 255, 0.12)",
							"rgba(255, 255, 255, 0.71)"
						],
						data: [13, 120, 11, 20],
						borderWidth: [0, 0, 0, 0]
					}]
				},
			options: {
			   legend: {
				 position :"right",	
				 display: true,
				    labels: {
					  fontColor: '#ddd',  
					  boxWidth:15
				   }
				}
			   }
			});
		}


	});

})(window, document, window.jQuery);
</script>

</body>
</html>
