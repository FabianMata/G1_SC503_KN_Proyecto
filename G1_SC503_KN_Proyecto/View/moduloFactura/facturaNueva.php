<?php include_once '../layout.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Nuevo prestamo</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/sweetalert2.min.css">
    <script src="../js/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main class="full-box main-container">
    <?php 
        asideFacturas();
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
                    <i class="fas fa-plus fa-fw"></i> &nbsp; NUEVA FACTURA
                </h3>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium quod harum vitae, fugit quo soluta. Molestias officiis voluptatum delectus doloribus at tempore, iste optio quam recusandae numquam non inventore dolor.
                </p>
            </div>
            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <a class="active" href="reservation-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVA FACTURA</a>
                    </li>
                    <li>
                        <a href="facturaLista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE FACTURAS</a>
                    </li>
                    <li>
                        <a href="facturaBuscar.php"><i class="fas fa-search-dollar fa-fw"></i> &nbsp; BUSCAR FACTURAS</a>
                    </li>
                    <li>
                        <a href="facturaPendiente.php"><i class="fas fa-hand-holding-usd fa-fw"></i> &nbsp; FACTURAS PENDIENTES</a>
                    </li>
                </ul>
            </div>
            <div class="container-fluid">
            	<div class="container-fluid form-neon">
                    <div class="container-fluid">
                        <p class="text-center roboto-medium">AGREGAR CLIENTE O PRODUCTO</p>
                        <p class="text-center">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCliente"><i class="fas fa-user-plus"></i> &nbsp; Agregar cliente</button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalItem"><i class="fas fa-box-open"></i> &nbsp; Agregar item</button>
                        </p>
                        <div>
                            <span class="roboto-medium">CLIENTE:</span> 
                            <span class="text-danger">&nbsp; <i class="fas fa-exclamation-triangle"></i> Seleccione un cliente</span>
                  			<form action="" style="display: inline-block !important;">
                            	Carlos Alfaro
                                <button type="button" class="btn btn-danger"><i class="fas fa-user-times"></i></button>
                            </form>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-dark table-sm">
                                <thead>
                                    <tr class="text-center roboto-medium">
                                        <th>ITEM</th>
                                        <th>CANTIDAD</th>
                                        <th>ELIMINAR</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center" >
                                        <td>NOMBRE DEL ITEM</td>
                                        <td>7</td>
                                        <td>
                                            <form action="">
                                                <button type="button" class="btn btn-warning">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr class="text-center" >
                                        <td>NOMBRE DEL ITEM</td>
                                        <td>9</td>
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
                    </div>
					<form action="" autocomplete="off">
						<fieldset>
							<legend><i class="far fa-plus-square"></i> &nbsp; Información del prestamo</legend>
							<div class="container-fluid">
								<div class="row">
									<div class="col-12 col-md-4">
										<div class="form-group">
											<label for="prestamo_fecha_inicio">Fecha de reserva</label>
											<input type="date" class="form-control" name="prestamo_fecha_inicio" id="admin-dni">
										</div>
									</div>
									
									<div class="col-12 col-md-4">
										<div class="form-group">
											<label for="prestamo_fecha_final">Fecha de entrega</label>
											<input type="date" class="form-control" name="prestamo_fecha_final" id="prestamo_fecha_final">
										</div>
									</div>
									<div class="col-12 col-md-4">
	                                    <div class="form-group">
	                                        <label for="prestamo_estado" class="bmd-label-floating">Estado</label>
	                                        <select class="form-control" name="item_estado" id="item_estado">
	                                            <option value="" selected="" disabled="">Seleccione una opción</option>
	                                            <option value="Prestamo">Préstamo</option>
	                                            <option value="Reservacion">Reservación</option>
	                                            <option value="Finalizado">Finalizado</option>
	                                        </select>
	                                    </div>
	                                </div>
									<div class="col-12 col-md-6">
										<div class="form-group">
											<label for="prestamo_total" class="bmd-label-floating">Total a pagar</label>
											<input type="text" pattern="[0-9.]{1,10}" class="form-control" name="prestamo_total" id="prestamo_total" maxlength="10">
										</div>
									</div>
	                                <div class="col-12 col-md-6">
	                                    <div class="form-group">
	                                        <label for="prestamo_pagado" class="bmd-label-floating">Total depositado</label>
	                                        <input type="text" pattern="[0-9.]{1,10}" class="form-control" name="prestamo_pagado" id="prestamo_pagado" maxlength="10">
	                                    </div>
	                                </div>
	                                <div class="col-12">
	                                    <div class="form-group">
	                                        <label for="prestamo_observacion" class="bmd-label-floating">Observación</label>
	                                        <input type="text" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ#() ]{1,400}" class="form-control" name="prestamo_observacion" id="prestamo_observacion" maxlength="400">
	                                    </div>
	                                </div>
								</div>
							</div>
						</fieldset>
						<br><br><br>
						<p class="text-center" style="margin-top: 40px;">
							<button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
							&nbsp; &nbsp;
							<button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
						</p>
					</form>
            	</div>
			</div>
            <div class="modal fade" id="ModalCliente" tabindex="-1" role="dialog" aria-labelledby="ModalCliente" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalCliente">Agregar cliente</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="form-group">
                                    <label for="agregar_cliente" class="bmd-label-floating">DNI, Nombre, Apellido, Telefono</label>
                                    <input type="text" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ#() ]{1,30}" class="form-control" name="agregar_cliente" id="agregar_cliente" maxlength="30">
                                </div>
                            </div>
                            <br>
                            <div class="container-fluid">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered table-sm">
                                        <tbody>
                                            <tr class="text-center">
                                                <td>000000000000 - Nombre del cliente</td>
                                                <td>
                                                    <form action="">
                                                        <button type="button" class="btn btn-primary"><i class="fas fa-user-plus"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>000000000000 - Nombre del cliente</td>
                                                <td>
                                                    <form action="">
                                                        <button type="button" class="btn btn-primary"><i class="fas fa-user-plus"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>000000000000 - Nombre del cliente</td>
                                                <td>
                                                    <form action="">
                                                        <button type="button" class="btn btn-primary"><i class="fas fa-user-plus"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>000000000000 - Nombre del cliente</td>
                                                <td>
                                                    <form action="">
                                                        <button type="button" class="btn btn-primary"><i class="fas fa-user-plus"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="ModalItem" tabindex="-1" role="dialog" aria-labelledby="ModalItem" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalItem">Agregar item</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="form-group">
                                    <label for="agregar_item" class="bmd-label-floating">Código, Nombre</label>
                                    <input type="text" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ#() ]{1,30}" class="form-control" name="agregar_item" id="agregar_item" maxlength="30">
                                </div>
                            </div>
                            <br>
                            <div class="container-fluid">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered table-sm">
                                        <tbody>
                                            <tr class="text-center">
                                                <td>000000000000 - Nombre del item</td>
                                                <td>
                                                    <form action="">
                                                        <button type="button" class="btn btn-primary"><i class="fas fa-box-open"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>000000000000 - Nombre del item</td>
                                                <td>
                                                    <form action="">
                                                        <button type="button" class="btn btn-primary"><i class="fas fa-box-open"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>000000000000 - Nombre del item</td>
                                                <td>
                                                    <form action="">
                                                        <button type="button" class="btn btn-primary"><i class="fas fa-box-open"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>000000000000 - Nombre del item</td>
                                                <td>
                                                    <form action="">
                                                        <button type="button" class="btn btn-primary"><i class="fas fa-box-open"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
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