
<?php
function asideClientes()
{
	echo
	'<section class="full-box nav-lateral">
			<div class="full-box nav-lateral-bg show-nav-lateral"></div>
			<div class="full-box nav-lateral-content">
				<figure class="full-box nav-lateral-avatar">
					<i class="far fa-times-circle show-nav-lateral"></i>
					<img src="../assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
					<figcaption class="roboto-medium text-center">
						Carlos Alfaro <br><small class="roboto-condensed-light">Web Developer</small>
					</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
						<li>
							<a href="../home.php"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Home</a>
						</li>
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Clientes <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="clienteNuevo.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Cliente</a>
								</li>
								<li>
									<a href="clienteLista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de clientes</a>
								</li>
								<li>
									<a href="clienteBuscar.php"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar cliente</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-pallet fa-fw"></i> &nbsp; Productos <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="../moduloProducto/productoNuevo.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Producto
									</a>
								</li>
								<li>
									<a href="../moduloProducto/productoLista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Productos</a>
								</li>
								<li>
									<a href="../moduloProducto/productoBuscar.php"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Producto</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-file-invoice-dollar fa-fw"></i> &nbsp; Facturas <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="../moduloFactura/facturaNueva.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo Factura</a>
								</li>
								<li>
									<a href="../moduloFactura/facturaLista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Facturas</a>
								</li>
								<li>
									<a href="../moduloFactura/facturaBuscar.php"><i class="fas fa-search-dollar fa-fw"></i> &nbsp; Buscar Facturas</a>
								</li>
								<li>
									<a href="../moduloFactura/facturaPendiente.php"><i class="fas fa-hand-holding-usd fa-fw"></i> &nbsp; Facturas pendientes</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Reportes <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="../moduloReporte/reporteNuevo.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo Reporte</a>
								</li>
								<li>
									<a href="../moduloReporte/reporteLista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Reportes</a>
								</li>
								<li>
									<a href="../moduloReporte/reporteBuscar.php"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Reporte</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="../moduloEmpresa/empresa.php"><i class="fas fa-store-alt fa-fw"></i> &nbsp; Empresa</a>
						</li>
					</ul>
				</nav>
			</div>
		</section>';
}
?>
<?php
function asideHome()
{
	echo
	'<section class="full-box nav-lateral">
			<div class="full-box nav-lateral-bg show-nav-lateral"></div>
			<div class="full-box nav-lateral-content">
				<figure class="full-box nav-lateral-avatar">
					<i class="far fa-times-circle show-nav-lateral"></i>
					<img src="assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
					<figcaption class="roboto-medium text-center">
						Carlos Alfaro <br><small class="roboto-condensed-light">Web Developer</small>
					</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
						<li>
							<a href="home.php"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Home</a>
						</li>
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Clientes <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="moduloCliente/clienteNuevo.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Cliente</a>
								</li>
								<li>
									<a href="moduloCliente/clienteLista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de clientes</a>
								</li>
								<li>
									<a href=moduloCliente/clienteBuscar.php"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar cliente</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-pallet fa-fw"></i> &nbsp; Productos <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="moduloProducto/productoNuevo.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Producto</a>
								</li>
								<li>
									<a href="moduloProducto/productoLista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Productos</a>
								</li>
								<li>
									<a href="moduloProducto/productoBuscar.php"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Producto</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-file-invoice-dollar fa-fw"></i> &nbsp; Facturas <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="moduloFactura/facturaNueva.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo Factura</a>
								</li>
								<li>
									<a href="moduloFactura/facturaLista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Facturas</a>
								</li>
								<li>
									<a href="moduloFactura/facturaBuscar.php"><i class="fas fa-search-dollar fa-fw"></i> &nbsp; Buscar Facturas</a>
								</li>
								<li>
									<a href="moduloFactura/facturaPendiente.php"><i class="fas fa-hand-holding-usd fa-fw"></i> &nbsp; Facturas pendientes</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Reportes <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="moduloReporte/reporteNuevo.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo Reporte</a>
								</li>
								<li>
									<a href="moduloReporte/reporteLista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Reportes</a>
								</li>
								<li>
									<a href="moduloReporte/reporteBuscar.php"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Reporte</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="moduloEmpresa/empresa.php"><i class="fas fa-store-alt fa-fw"></i> &nbsp; Empresa</a>
						</li>
					</ul>
				</nav>
			</div>
		</section>';
}
?>

<?php
function asideEmpresa()
{
	echo
	'<section class="full-box nav-lateral">
			<div class="full-box nav-lateral-bg show-nav-lateral"></div>
			<div class="full-box nav-lateral-content">
				<figure class="full-box nav-lateral-avatar">
					<i class="far fa-times-circle show-nav-lateral"></i>
					<img src="../assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
					<figcaption class="roboto-medium text-center">
						Carlos Alfaro <br><small class="roboto-condensed-light">Web Developer</small>
					</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
						<li>
							<a href="../home.php"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Home</a>
						</li>
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Clientes <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="../moduloCliente/clienteNuevo.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Cliente</a>
								</li>
								<li>
									<a href="../moduloCliente/clienteLista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de clientes</a>
								</li>
								<li>
									<a href=../moduloCliente/clienteBuscar.php"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar cliente</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-pallet fa-fw"></i> &nbsp; Productos <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="../moduloProducto/productoNuevo.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Producto</a>
								</li>
								<li>
									<a href="../moduloProducto/productoLista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Productos</a>
								</li>
								<li>
									<a href="../moduloProducto/productoBuscar.php"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Producto</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-file-invoice-dollar fa-fw"></i> &nbsp; Facturas <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="../moduloFactura/facturaNueva.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Nueva Facturas</a>
								</li>
								<li>
									<a href="../moduloFactura/facturaLista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Facturas</a>
								</li>
								<li>
									<a href="../moduloFactura/facturaBuscar.php"><i class="fas fa-search-dollar fa-fw"></i> &nbsp; Buscar Facturas</a>
								</li>
								<li>
									<a href="../moduloFactura/facturaPendiente"><i class="fas fa-hand-holding-usd fa-fw"></i> &nbsp; Facturas pendientes</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Reportes <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="../moduloReporte/reporteNuevo.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo Reporte</a>
								</li>
								<li>
									<a href="../moduloReporte/reporteNuevo.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Reportes</a>
								</li>
								<li>
									<a href="../moduloReporte/reporteNuevo.php"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Reporte</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="empresa.php"><i class="fas fa-store-alt fa-fw"></i> &nbsp; Empresa</a>
						</li>
					</ul>
				</nav>
			</div>
		</section>';
}
?>

<?php
function asideProductos()
{
	echo '        <section class="full-box nav-lateral">
            <div class="full-box nav-lateral-bg show-nav-lateral"></div>
            <div class="full-box nav-lateral-content">
                <figure class="full-box nav-lateral-avatar">
                    <i class="far fa-times-circle show-nav-lateral"></i>
                    <img src="../assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
                    <figcaption class="roboto-medium text-center">
                        Carlos Alfaro <br><small class="roboto-condensed-light">Web Developer</small>
                    </figcaption>
                </figure>
                <div class="full-box nav-lateral-bar"></div>
                <nav class="full-box nav-lateral-menu">
                    <ul>
                        <li>
                            <a href="../home.php"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Home</a>
                        </li>
                        <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Clientes <i class="fas fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="../moduloCliente/clienteNuevo.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Cliente</a>
                                </li>
                                <li>
                                    <a href="../moduloCliente/clienteLista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de clientes</a>
                                </li>
                                <li>
                                    <a href="../moduloCliente/clienteBuscar.php"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar cliente</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas fa-pallet fa-fw"></i> &nbsp; Productos <i class="fas fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="productoNuevo.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Producto</a>
                                </li>
                                <li>
                                    <a href="productoLista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Productos</a>
                                </li>
                                <li>
                                    <a href="productoBuscar.php"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Producto</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas fa-file-invoice-dollar fa-fw"></i> &nbsp; Facturas <i class="fas fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="../moduloFactura/facturaNueva.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo Factura</a>
                                </li>
                                <li>
                                    <a href="../moduloFactura/facturaLista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Facturas</a>
                                </li>
                                <li>
                                    <a href="../moduloFactura/facturaBuscar.php"><i class="fas fa-search-dollar fa-fw"></i> &nbsp; Buscar Facturas</a>
                                </li>
                                <li>
                                    <a href="../moduloFactura/facturaPendiente.php"><i class="fas fa-hand-holding-usd fa-fw"></i> &nbsp; Facturas pendientes</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Reportes <i class="fas fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="../moduloReporte/reporteNuevo.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo Reporte</a>
                                </li>
                                <li>
                                    <a href="../moduloReporte/reporteLista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Reportes</a>
                                </li>
                                <li>
                                    <a href="../moduloReporte/reporteBuscar.php"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Reporte</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="../moduloEmpresa/empresa.php"><i class="fas fa-store-alt fa-fw"></i> &nbsp; Empresa</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>';
}
?>

<?php 
function asideFacturas()
{
	echo '<section class="full-box nav-lateral">
            <div class="full-box nav-lateral-bg show-nav-lateral"></div>
            <div class="full-box nav-lateral-content">
                <figure class="full-box nav-lateral-avatar">
                    <i class="far fa-times-circle show-nav-lateral"></i>
                    <img src="../assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
                    <figcaption class="roboto-medium text-center">
                        Michael Núñez <br><small class="roboto-condensed-light">Web Developer</small>
                    </figcaption>
                </figure>
                <div class="full-box nav-lateral-bar"></div>
                <nav class="full-box nav-lateral-menu">
                    <ul>
                        <li>
                            <a href="../home.php"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Clientes <i class="fas fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="../moduloCliente/clienteNuevo.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Cliente</a>
                                </li>
                                <li>
                                    <a href="../moduloCliente/clienteLista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de clientes</a>
                                </li>
                                <li>
                                    <a href="../moduloCliente/clienteBuscar.php"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar cliente</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas fa-pallet fa-fw"></i> &nbsp; Producto <i class="fas fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="../moduloProducto/productoNuevo.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Producto</a>
                                </li>
                                <li>
                                    <a href="../moduloProducto/productoLista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Producto</a>
                                </li>
                                <li>
                                    <a href="../moduloProducto/productoBuscar.php"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Producto</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas fa-file-invoice-dollar fa-fw"></i> &nbsp; Facturas <i class="fas fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="facturaNueva.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo Factura</a>
                                </li>
                                <li>
                                    <a href="facturaLista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Facturas</a>
                                </li>
                                <li>
                                    <a href="facturaBuscar.php"><i class="fas fa-search-dollar fa-fw"></i> &nbsp; Buscar Facturas</a>
                                </li>
                                <li>
                                    <a href="facturaPendiente.php"><i class="fas fa-hand-holding-usd fa-fw"></i> &nbsp; Facturas pendientes</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Reportes <i class="fas fa-chevron-down"></i></a>
                            <ul>
                                <li>
                                    <a href="../moduloReporte/reporteNuevo.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo REPORTE</a>
                                </li>
                                <li>
                                    <a href="../moduloReporte/reporteLista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Reportes</a>
                                </li>
                                <li>
                                    <a href="../moduloReporte/reporteBuscar.php"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar REPORTE</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="../moduloEmpresa/empresa.php"><i class="fas fa-store-alt fa-fw"></i> &nbsp; Empresa</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>';
}
?>

<?php 
	function asideReportes(){
		echo '		<section class="full-box nav-lateral">
			<div class="full-box nav-lateral-bg show-nav-lateral"></div>
			<div class="full-box nav-lateral-content">
				<figure class="full-box nav-lateral-avatar">
					<i class="far fa-times-circle show-nav-lateral"></i>
					<img src="../assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
					<figcaption class="roboto-medium text-center">
						Carlos Alfaro <br><small class="roboto-condensed-light">Web Developer</small>
					</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
						<li>
							<a href="../home.php"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard</a>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Clientes <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="../moduloCliente/clienteNuevo.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Cliente</a>
								</li>
								<li>
									<a href="../moduloCliente/clienteLista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de clientes</a>
								</li>
								<li>
									<a href="..moduloCliente/clienteBuscar.php"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar cliente</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-pallet fa-fw"></i> &nbsp; Items <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="../moduloProducto/productoNuevo.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar item</a>
								</li>
								<li>
									<a href="../moduloProducto/productoLista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de items</a>
								</li>
								<li>
									<a href="../moduloProducto/productoBuscar.php"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar item</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-file-invoice-dollar fa-fw"></i> &nbsp; Facturas <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="../moduloFactura/facturaNueva.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo Factura</a>
								</li>
								<li>
									<a href="../moduloFactura/facturaLista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Facturas</a>
								</li>
								<li>
									<a href="../moduloFactura/facturaBuscar.php"><i class="fas fa-search-dollar fa-fw"></i> &nbsp; Buscar Facturas</a>
								</li>
								<li>
									<a href="../moduloFactura/facturaPendiente.php"><i class="fas fa-hand-holding-usd fa-fw"></i> &nbsp; Facturas pendientes</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Reportes <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="reporteNuevo.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo Reporte</a>
								</li>
								<li>
									<a href="reporteLista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Reportes</a>
								</li>
								<li>
									<a href="reporteBuscar.php"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Reporte</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="../moduloEmpresa/empresa.php"><i class="fas fa-store-alt fa-fw"></i> &nbsp; Empresa</a>
						</li>
					</ul>
				</nav>
			</div>
		</section>';
	}
?>