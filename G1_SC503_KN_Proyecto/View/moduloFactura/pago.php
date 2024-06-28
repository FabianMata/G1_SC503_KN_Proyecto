<?php include_once '../layout.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Pagos</title>
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
                    <i class="fas fa-dollar-sign fa-fw"></i> &nbsp; PAGOS
                </h3>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium quod harum vitae, fugit quo soluta. Molestias officiis voluptatum delectus doloribus at tempore, iste optio quam recusandae numquam non inventore dolor.
                </p>
            </div>
            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <a href="facturaNueva.php"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO PRÉSTAMO</a>
                    </li>
                    <li>
                        <a href="facturaLista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PRÉSTAMOS</a>
                    </li>
                    <li>
                        <a href="facturaBuscar.php"><i class="fas fa-search-dollar fa-fw"></i> &nbsp; BUSCAR PRÉSTAMOS</a>
                    </li>
                    <li>
                        <a href="facturaPendiente.php"><i class="fas fa-hand-holding-usd fa-fw"></i> &nbsp; PRÉSTAMOS PENDIENTES</a>
                    </li>
                </ul>
            </div>
            <div class="container-fluid">
                <div class="container-fluid form-neon">
                    <div class="container-fluid">
                        <p class="text-center roboto-medium">AGREGAR NUEVO PAGO A ESTE PRÉSTAMO</p>
                        <p class="text-center">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalPago"><i class="far fa-money-bill-alt"></i> &nbsp; Agregar pago</button>
                        </p>
                        <div>
                            <span class="roboto-medium">CLIENTE:</span> 
                            &nbsp; Carlos Alfaro
                        </div>
                        <div class="table-responsive">
                            <table class="table table-dark table-sm">
                                <thead>
                                    <tr class="text-center roboto-medium">
                                        <th>#</th>
                                        <th>FECHA</th>
                                        <th>CANTIDAD</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center" >
                                        <td>1</td>
                                        <td>11/10/2019</td>
                                        <td>$10 USD</td>
                                    </tr>
                                    <tr class="text-center" >
                                        <td>2</td>
                                        <td>17/10/2019</td>
                                        <td>$40 USD</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <fieldset>
                        <legend><i class="far fa-plus-square"></i> &nbsp; Información del prestamo</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="prestamo_fecha_inicio">Fecha de reserva</label>
                                        <input type="date" class="form-control" readonly="" id="admin-dni">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="prestamo_fecha_final">Fecha de entrega</label>
                                        <input type="date" class="form-control" readonly="" id="prestamo_fecha_final">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="prestamo_estado" class="bmd-label-floating">Estado</label>
                                        <input type="text" pattern="[0-9.]{1,10}" class="form-control" readonly="" id="prestamo_estado" maxlength="10">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="prestamo_total" class="bmd-label-floating">Total a pagar</label>
                                        <input type="text" pattern="[0-9.]{1,10}" class="form-control" readonly="" id="prestamo_total" maxlength="10">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="prestamo_pagado" class="bmd-label-floating">Total depositado</label>
                                        <input type="text" pattern="[0-9.]{1,10}" class="form-control" readonly="" id="prestamo_pagado" maxlength="10">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="prestamo_observacion" class="bmd-label-floating">Observación</label>
                                        <input type="text" readonly=""  class="form-control" id="prestamo_observacion" maxlength="400">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="modal fade" id="ModalPago" tabindex="-1" role="dialog" aria-labelledby="ModalPago" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalPago">Agregar pago</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="form-group">
                                    <label for="monto_pago" class="bmd-label-floating">Monto</label>
                                    <input type="text" pattern="[0-9.]{1,10}" class="form-control" name="monto_pago" id="monto_pago" maxlength="10">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-raised btn-info btn-sm" data-dismiss="modal">Agregar pago</button> &nbsp;&nbsp; 
                            <button type="button" class="btn btn-raised btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
                        </div>
                    </form>
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