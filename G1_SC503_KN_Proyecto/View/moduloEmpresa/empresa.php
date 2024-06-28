<?php include_once '../layout.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Datos de la empresa</title>
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
        asideEmpresa();
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
                    <i class="fas fa-building fa-fw"></i> &nbsp; INFORMACÓN DE LA EMPRESA
                </h3>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero nam eaque nostrum, voluptates, rerum quo. Consequuntur ut, maxime? Quibusdam ipsum maxime non veritatis dignissimos qui reiciendis, amet eum nihil! Et!
                </p>
            </div>
            <div class="container-fluid">
                <form action="" class="form-neon" autocomplete="off">
                    <fieldset>
                        <legend><i class="far fa-building"></i> &nbsp; Información de la empresa</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="empresa_nombre" class="bmd-label-floating">Nombre de la empresa</label>
                                        <input type="text" pattern="[a-zA-z0-99áéíóúÁÉÍÓÚñÑ ]{1,70}" class="form-control" name="empresa_nombre" id="empresa_nombre" maxlength="70">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="empresa_email" class="bmd-label-floating">Correo</label>
                                        <input type="email" class="form-control" name="empresa_email" id="empresa_email" maxlength="70">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="empresa_telefono" class="bmd-label-floating">Telefono</label>
                                        <input type="text" pattern="[0-9()+]{1,20}" class="form-control" name="empresa_telefono" id="empresa_telefono" maxlength="20">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="empresa_direccion" class="bmd-label-floating">Dirección</label>
                                        <input type="text" pattern="[a-zA-z0-99áéíóúÁÉÍÓÚñÑ ]{1,190}" class="form-control" name="empresa_direccion" id="empresa_direccion" maxlength="190">
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
            <div class="container-fluid">
                <form action="" class="form-neon" autocomplete="off">
                    <fieldset>
                        <legend><i class="far fa-building"></i> &nbsp;Actualizar Información de la empresa</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="empresa_nombre" class="bmd-label-floating">Nombre de la empresa</label>
                                        <input type="text" pattern="[a-zA-z0-99áéíóúÁÉÍÓÚñÑ ]{1,70}" class="form-control" name="empresa_nombre" id="empresa_nombre" maxlength="70">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="empresa_email" class="bmd-label-floating">Correo</label>
                                        <input type="email" class="form-control" name="empresa_email" id="empresa_email" maxlength="70">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="empresa_telefono" class="bmd-label-floating">Telefono</label>
                                        <input type="text" pattern="[0-9()+]{1,20}" class="form-control" name="empresa_telefono" id="empresa_telefono" maxlength="20">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="empresa_direccion" class="bmd-label-floating">Dirección</label>
                                        <input type="text" pattern="[a-zA-z0-99áéíóúÁÉÍÓÚñÑ ]{1,190}" class="form-control" name="empresa_direccion" id="empresa_direccion" maxlength="190">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <br><br><br>
                    <p class="text-center" style="margin-top: 40px;">
                        <button type="submit" class="btn btn-raised btn-success btn-sm"><i class="fas fa-sync-alt"></i> &nbsp; ACTUALIZAR</button>
                    </p>
                </form>
            </div>
        </section>
    </main>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../js/bootstrap-material-design.min.js"></script>
    <script>
        $(document).ready(function() {
            $('body').bootstrapMaterialDesign();
        });
    </script>
    <script src="../js/main.js"></script>
</body></html>