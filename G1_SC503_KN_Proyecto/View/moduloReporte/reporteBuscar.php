<?php include_once '../layout.php'?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Buscar reportes</title>

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
					<i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR USUARIO
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
						<a href="reporteLista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE REPORTES</a>
					</li>
					<li>
						<a class="active" href="reporteBuscar.php"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR REPORTE</a>
					</li>
				</ul>	
			</div>
			<div class="container-fluid">
				<form class="form-neon" action="">
					<div class="container-fluid">
						<div class="row justify-content-md-center">
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="inputSearch" class="bmd-label-floating">¿Qué reporte estas buscando?</label>
									<input type="text" class="form-control" name="busqueda-" id="inputSearch" maxlength="30">
								</div>
							</div>
							<div class="col-12">
								<p class="text-center" style="margin-top: 40px;">
									<button type="submit" class="btn btn-raised btn-info"><i class="fas fa-search"></i> &nbsp; BUSCAR</button>
								</p>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="container-fluid">
				<form action="">
					<input type="hidden" name="eliminar-busqueda" value="eliminar">
					<div class="container-fluid">
						<div class="row justify-content-md-center">
							<div class="col-12 col-md-6">
								<p class="text-center" style="font-size: 20px;">
									Resultados de la busqueda <strong>“Buscar”</strong>
								</p>
							</div>
							<div class="col-12">
								<p class="text-center" style="margin-top: 20px;">
									<button type="submit" class="btn btn-raised btn-danger"><i class="far fa-trash-alt"></i> &nbsp; ELIMINAR BÚSQUEDA</button>
								</p>
							</div>
						</div>
					</div>
				</form>
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
								<th>USUARIO</th>
								<th>EMAIL</th>
								<th>ACTUALIZAR</th>
								<th>ELIMINAR</th>
							</tr>
						</thead>
						<tbody>
							<tr class="text-center" >
								<td>1</td>
								<th>03045643</th>
								<th>NOMBRE DE USUARIO</th>
								<th>APELLIDO DE USUARIO</th>
								<th>2345456</th>
								<th>NOMBRE DE USUARIO</th>
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
								<th>NOMBRE DE USUARIO</th>
								<th>APELLIDO DE USUARIO</th>
								<th>2345456</th>
								<th>NOMBRE DE USUARIO</th>
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
								<th>NOMBRE DE USUARIO</th>
								<th>APELLIDO DE USUARIO</th>
								<th>2345456</th>
								<th>NOMBRE DE USUARIO</th>
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
								<th>NOMBRE DE USUARIO</th>
								<th>APELLIDO DE USUARIO</th>
								<th>2345456</th>
								<th>NOMBRE DE USUARIO</th>
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
	</main>.
	<script src="../js/jquery-3.4.1.min.js" ></script>
	<script src="../js/popper.min.js" ></script>
	<script src="../js/bootstrap.min.js" ></script>
	<script src="../js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="../js/bootstrap-material-design.min.js" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
	<script src="../js/main.js" ></script>
</body>
</html>