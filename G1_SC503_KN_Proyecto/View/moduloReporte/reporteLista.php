<?php include_once '../layout.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lista Reportes</title>
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap-material-design.min.css">
	<link rel="stylesheet" href="../css/all.css">
	<link rel="stylesheet" href="../css/sweetalert2.min.css">
	<script src="../js/sweetalert2.min.js" ></script>
	<link rel="stylesheet" href="../css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>

	<main class="full-box main-container">
  <?php
    asideReportes();
  ?>
		<section class="full-box page-content">
			<nav class="full-box navbar-info">
				<a href="#" class="float-left show-nav-lateral">
					<i class="fas fa-exchange-alt"></i>
				</a>
				<a href="user-update.html">
					<i class="fas fa-user-cog"></i>
				</a>
				<a href="#" class="btn-exit-system">
					<i class="fas fa-power-off"></i>
				</a>
			</nav>
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE REPORTES
				</h3>
				<p class="text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit nostrum rerum animi natus beatae ex. Culpa blanditiis tempore amet alias placeat, obcaecati quaerat ullam, sunt est, odio aut veniam ratione.
				</p>
			</div>
			
			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a href="reporteNuevo.php"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO REPORTE</a>
					</li>
					<li>
						<a class="active" href="reporteLista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE REPORTES</a>
					</li>
					<li>
						<a href="reporteBuscar.php"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR REPORTE</a>
					</li>
				</ul>	
			</div>
			<div class="container-fluid">
				<div class="table-responsive">
					<table class="table table-dark table-sm">
						<thead>
							<tr class="text-center roboto-medium">
								<th>#</th>
								<th>DNI</th>
								<th>NOMBRE</th>
								<th>APELLIDO</th>
								<th>TELÉFONO</th>
								<th>REPORTE</th>
								<th>EMAIL</th>
								<th>ACTUALIZAR</th>
								<th>ELIMINAR</th>
							</tr>
						</thead>
						<tbody>
							<tr class="text-center" >
								<td>1</td>
								<th>03045643</th>
								<th>NOMBRE DE REPORTE</th>
								<th>APELLIDO DE REPORTE</th>
								<th>2345456</th>
								<th>NOMBRE DE REPORTE</th>
								<th>ADMIN@ADMIN.COM</th>
								<td>
									<a href="user-update.html" class="btn btn-success">
	  									<i class="fas fa-sync-alt"></i>	
									</a>
								</td>
								<td>
									<form action="">
										<button type="button" class="btn btn-warning">
		  									<i class="far fa-trash-alt"></i>
										</button>
									</form>
								</td>
							</tr>
							<tr class="text-center" >
								<td>2</td>
								<th>03045643</th>
								<th>NOMBRE DE REPORTE</th>
								<th>APELLIDO DE REPORTE</th>
								<th>2345456</th>
								<th>NOMBRE DE REPORTE</th>
								<th>ADMIN@ADMIN.COM</th>
								<td>
									<a href="user-update.html" class="btn btn-success">
	  									<i class="fas fa-sync-alt"></i>	
									</a>
								</td>
								<td>
									<form action="">
										<button type="button" class="btn btn-warning">
		  									<i class="far fa-trash-alt"></i>
										</button>
									</form>
								</td>
							</tr>
							<tr class="text-center" >
								<td>3</td>
								<th>03045643</th>
								<th>NOMBRE DE REPORTE</th>
								<th>APELLIDO DE REPORTE</th>
								<th>2345456</th>
								<th>NOMBRE DE REPORTE</th>
								<th>ADMIN@ADMIN.COM</th>
								<td>
									<a href="user-update.html" class="btn btn-success">
	  									<i class="fas fa-sync-alt"></i>	
									</a>
								</td>
								<td>
									<form action="">
										<button type="button" class="btn btn-warning">
		  									<i class="far fa-trash-alt"></i>
										</button>
									</form>
								</td>
							</tr>
							<tr class="text-center" >
								<td>4</td>
								<th>03045643</th>
								<th>NOMBRE DE REPORTE</th>
								<th>APELLIDO DE REPORTE</th>
								<th>2345456</th>
								<th>NOMBRE DE REPORTE</th>
								<th>ADMIN@ADMIN.COM</th>
								<td>
									<a href="user-update.html" class="btn btn-success">
	  									<i class="fas fa-sync-alt"></i>	
									</a>
								</td>
								<td>
									<form action="">
										<button type="button" class="btn btn-warning">
		  									<i class="far fa-trash-alt"></i>
										</button>
									</form>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">Previous</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav>
			</div>
		</section>
	</main>
	<script src="../js/jquery-3.4.1.min.js" ></script>
	<script src="../js/popper.min.js" ></script>
	<script src="../js/bootstrap.min.js" ></script>
	<script src="../js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="../js/bootstrap-material-design.min.js" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
	<script src="../js/main.js" ></script>
</body>
</html>