<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Login</title>

	<link rel="stylesheet" href="css/normalize.css">

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="css/bootstrap-material-design.min.css">

	<link rel="stylesheet" href="css/all.css">

	<link rel="stylesheet" href="css/sweetalert2.min.css">

	<script src="js/sweetalert2.min.js" ></script>

	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">

	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div class="login-container">
		<div class="login-content">
			<p class="text-center">
				<i class="fas fa-user-circle fa-5x"></i>
			</p>
			<p class="text-center">
				Inicia sesión con tu cuenta
			</p>
			<form action="">
				<div class="form-group">
					<label for="UserName" class="bmd-label-floating"><i class="fas fa-user-secret"></i> &nbsp; Usuario</label>
					<input type="text" class="form-control" id="UserName" name="usuario" pattern="[a-zA-Z0-9]{1,35}" maxlength="35">
				</div>
				<div class="form-group">
					<label for="UserPassword" class="bmd-label-floating"><i class="fas fa-key"></i> &nbsp; Contraseña</label>
					<input type="password" class="form-control" id="UserPassword" name="clave" maxlength="200">
				</div>
				<a href="home.php" class="btn-login text-center">LOG IN</a>
			</form>
		</div>
	</div>

	<script src="js/jquery-3.4.1.min.js" ></script>

	<script src="js/popper.min.js" ></script>

	<script src="js/bootstrap.min.js" ></script>

	<script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>

	<script src="js/bootstrap-material-design.min.js" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

	<script src="js/main.js" ></script>
</body>
</html>