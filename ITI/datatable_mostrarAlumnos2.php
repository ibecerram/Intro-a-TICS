<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Web by Isaac Becerra</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="global_assets/js/main/jquery.min.js"></script>
	<script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="global_assets/js/plugins/forms/selects/select2.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="global_assets/js/demo_pages/datatables_basic.js"></script>
	<!-- /theme JS files -->





	<!-- Theme JS files -->
	<script src="global_assets/js/plugins/notifications/bootbox.min.js"></script>
	<script src="global_assets/js/demo_pages/components_modals.js"></script>
	<!-- /theme JS files -->



</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="index2.php" class="d-inline-block">
				<img src="assets/img/Logo.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-git-compare"></i>
						<span class="d-md-none ml-2">Actualizaciones</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">8</span>
					</a>

					<div class="dropdown-menu dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Actualizaciones</span>
							<a href="#" class="text-default"><i class="icon-sync"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>

									<div class="media-body">
										Cambio de logo principal
										<div class="text-muted font-size-sm">25 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon"><i class="icon-git-commit"></i></a>
									</div>
									
									<div class="media-body">
										Implementación de sweet alerts
										<div class="text-muted font-size-sm">5 hours ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-info text-info rounded-round border-2 btn-icon"><i class="icon-git-branch"></i></a>
									</div>
									
									<div class="media-body">
										Omar Jasso modificó el grupo ITI 1 - 1
										<div class="text-muted font-size-sm">Nov 29, 13:45</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-git-merge"></i></a>
									</div>
									
									<div class="media-body">
										Actualización transporte (sistema abierto)
										<div class="text-muted font-size-sm">Nov 28, 07:24</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>
									
									<div class="media-body">
										Implementación de gráficos
										<div class="text-muted font-size-sm">Nov 25, 20:00</div>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">Todas las actualizaciones</a>
							<div>
								<a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
								<a href="#" class="text-grey ml-2" data-popup="tooltip" title="Bug tracker"><i class="icon-bug2"></i></a>
							</div>
						</div>
					</div>
				</li>
			</ul>

			<span class="badge bg-success ml-md-3 mr-md-auto">Conectado</span>

			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-people"></i>
						<span class="d-md-none ml-2">Usuarios</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-300">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Usuarios conectados</span>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<img src="assets/img/userIsaac.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Isaac Becerra</a>
										<span class="d-block text-muted font-size-sm">Administrador</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="assets/img/logoJasso.png" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Omar Jasso</a>
										<span class="d-block text-muted font-size-sm">Diseñador</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="assets/img/logoMario.png" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Mario Rodríguez</a>
										<span class="d-block text-muted font-size-sm">Administrador</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All users</a>
							<a href="#" class="text-grey"><i class="icon-gear"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="d-md-none ml-2">Mensajes</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">2</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Mensajes</span>
							<a href="#" class="text-default"><i class="icon-compose"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3 position-relative">
										<img src="assets/img/logoUPV2.png" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="http://www.upvictoria.edu.mx/">
												<span class="font-weight-semibold">Servicios escolares</span>
												<span class="text-muted float-right font-size-sm">04:58</span>
											</a>
										</div>

										<span class="text-muted">Ya están los cursos disponibles para nuevo ingreso...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3 position-relative">
										<img src="assets/img/logoTranspais.png" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="https://www.transpaisturismo.com.mx/">
												<span class="font-weight-semibold">Transpais</span>
												<span class="text-muted float-right font-size-sm">12:16</span>
											</a>
										</div>

										<span class="text-muted">Sistema actualizado para venta de boletos...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="assets/img/logoUPV.png" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="http://www.upvictoria.edu.mx/">
												<span class="font-weight-semibold">Dirección General</span>
												<span class="text-muted float-right font-size-sm">22:48</span>
											</a>
										</div>

										<span class="text-muted">Necesitamos una modificación en el sistema...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="assets/img/logoJasso.png" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="https://academia.ojasso.me">
												<span class="font-weight-semibold">Omar Jasso</span>
												<span class="text-muted float-right font-size-sm">Tue</span>
											</a>
										</div>

										<span class="text-muted">Necesito el repositorio en Git actualizado...</span>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer justify-content-center p-0">
							<a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Cargar mensajes"><i class="icon-menu7 d-block top-0"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="assets/img/userIsaac.jpg" class="rounded-circle mr-2" height="34" alt="">
						<span>Isaac</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
						<div class="dropdown-divider"></div>
						<a href="http://ibecerram.systems/" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="assets/img/userIsaac.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">Isaac Becerra</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;Cd. Victoria, Tam, MX.
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Principal</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="index2.php" class="nav-link">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-users"></i> <span>Alumnos</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								
								<li class="nav-item"><a href="formAgregarAlumnos2.php" class="nav-link">Agregar alumnos</a></li>
								<li class="nav-item"><a href="formEditarAlumnos2.php" class="nav-link">Editar alumnos</a></li>
								<li class="nav-item"><a href="datatable_mostrarAlumnos2.php" class="nav-link">Mostrar alumnos</a></li>
							</ul>
						</li>

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-user-tie"></i> <span>Profesores</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li class="nav-item"><a href="formAgregarProfesores2.php" class="nav-link">Agregar profesores</a></li>
								<li class="nav-item"><a href="formEditarProfesores2.php" class="nav-link">Editar profesores</a></li>
								<li class="nav-item"><a href="datatable_mostrarProfesores2.php" class="nav-link">Mostrar profesores</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-books"></i> <span>Materias</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Starter kit">
								
								<li class="nav-item"><a href="formAgregarMateria2.php" class="nav-link">Agregar materias</a></li>
								<li class="nav-item"><a href="formEditarMaterias2.php" class="nav-link">Editar materias</a></li>
								<li class="nav-item"><a href="datatable_mostrarMaterias2.php" class="nav-link">Mostrar materias</a></li>
							</ul>
						</li>

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-collaboration"></i> <span>Grupos</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Starter kit">
								
								<li class="nav-item"><a href="formAgregarGrupos2.php" class="nav-link">Agregar grupos</a></li>
								<li class="nav-item"><a href="formEditarGrupos2.php" class="nav-link">Editar grupos</a></li>
								<li class="nav-item"><a href="datatable_mostrarGrupos2.php" class="nav-link">Mostrar grupos</a></li>
							</ul>
						</li>

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-bus"></i> <span>Tranporte</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Starter kit">
								
								<li class="nav-item"><a href="formAgregarPago2.php" class="nav-link">Reservar transporte (pagar)</a></li>
							</ul>
						</li>

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-reading"></i> <span>Tutorías</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Starter kit">
								
								<li class="nav-item"><a href="formAgregarTutorias2.php" class="nav-link">Agregar tutorías</a></li>
								<li class="nav-item"><a href="formEditarTutorias2.php" class="nav-link">Editar tutorías</a></li>
								<li class="nav-item"><a href="datatable_mostrarTutorias2.php" class="nav-link">Mostrar tutorías</a></li>
							</ul>
						</li>

						<!-- /main -->

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Base de datos</span> - Alumnos</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<a href="#" class="breadcrumb-item">Base de datos</a>
							<span class="breadcrumb-item active">Alumnos</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="breadcrumb justify-content-center">
							<a href="http://ibecerram.systems/imfreelancer/mylightblog/#contact-block" class="breadcrumb-elements-item">
								<i class="icon-comment-discussion mr-2"></i>
								Contacto
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<!-- Basic datatable -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title"><b>ALUMNOS</b></h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<button type="submit" class="btn btn-outline-danger"  data-toggle="modal" data-target="#modal_form_horizontal">Agregar alumno <i class="icon-file-plus ml-2"></i></button>
					</div>

					<table class="table datatable-basic table-hover">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Apellidos</th>
								<th>Matrícula</th>
								<th>Carrera</th>
								<th>Cuatrimestre</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Juan</td>
								<td>Hernandez Hinojosa</td>
								<td>1930062</td>
								<td>ITI</td>
								<td>1</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal_form_horizontal-editar" ><i class="icon-database-edit2"></i>Editar</a>
												<a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal_theme_warning"  ><i class="icon-cancel-square2"></i>Eliminar</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Pedro</td>
								<td>Martínez Becerra</td>
								<td>1930063</td>
								<td>IM</td>
								<td>3</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal_form_horizontal-editar" ><i class="icon-database-edit2"></i>Editar</a>
												<a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal_theme_warning"  ><i class="icon-cancel-square2"></i>Eliminar</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Laura</td>
								<td>Santiago Noroña</td>
								<td>1930064</td>
								<td>LAYGE</td>
								<td>5</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal_form_horizontal-editar" ><i class="icon-database-edit2"></i>Editar</a>
												<a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal_theme_warning"  ><i class="icon-cancel-square2"></i>Eliminar</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Karla</td>
								<td>Heredia Jasso</td>
								<td>1930516</td>
								<td>ISA</td>
								<td>4</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal_form_horizontal-editar" ><i class="icon-database-edit2"></i>Editar</a>
												<a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal_theme_warning"  ><i class="icon-cancel-square2"></i>Eliminar</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Javier Leonardo</td>
								<td>Arredondo OValle</td>
								<td>1930684</td>
								<td>ITM</td>
								<td>2</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal_form_horizontal-editar" ><i class="icon-database-edit2"></i>Editar</a>
												<a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal_theme_warning"  ><i class="icon-cancel-square2"></i>Eliminar</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- /Basic datatable -->


			</div>
			<!-- /content area -->
			
			 <!-- Horizontal form modal -->
			<div id="modal_form_horizontal" class="modal fade" tabindex="-1">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Agregar alumno</h5>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						

						<!-- Content area -->
						<div class="content">				
			
							<!-- 2 columns form -->
							<div class="card">
								<div class="card-header header-elements-inline">
									<h5 class="card-title">Datos del alumno</h5>
									<div class="header-elements">
										<div class="list-icons">
			   			            		<a class="list-icons-item" data-action="collapse"></a>
			   			            		<a class="list-icons-item" data-action="reload"></a>
			   			            		<a class="list-icons-item" data-action="remove"></a>
			   			            	</div>
					    			        	</div>
								</div>
			
								<div class="card-body">
									<form action="#">
							<div class="row">
								<div class="col-md-6">
									<fieldset>
										<legend class="font-weight-semibold"><i class="icon-reading mr-2"></i> Detalles personales</legend>
										
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Nombre</label>
											<div class="col-lg-9">
												<div class="row">
													<div class="col-md-6">
														<input type="text" placeholder="Nombre" class="form-control">
													</div>

													<div class="col-md-6">
														<input type="text" placeholder="Apellido paterno" class="form-control">
													</div>

													<div class="col-md-6">
														<input type="text" placeholder="Apellido materno" class="form-control">
													</div>
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Sexo:</label>
	
											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input type="radio" class="form-input-styled" name="gender" checked="">
													Masculino
												</label>
											</div>
	
											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input type="radio" class="form-input-styled" name="gender">
													Femenino
												</label>
											</div>
										</div>
								
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Ingresa tu matrícula</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" placeholder="Matrícula">
											</div>
										</div>
										
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Correo electrónico</label>
											<div class="col-lg-9">
												<input type="text" placeholder="tucorreo@gmail.com" class="form-control">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Teléfono celular</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" placeholder="Celular">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Teléfono de emergencia</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" placeholder="Celular">
											</div>
										</div>
		
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Dirección</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" placeholder="¿Dónde vives?">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">CURP</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" placeholder="CURP">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Observaciones</label>
											<div class="col-lg-9">
												<textarea rows="5" cols="5" class="form-control" placeholder="Opcional"></textarea>
											</div>
										</div>
									</fieldset>
								</div>

								<div class="col-md-6">
									<fieldset>
					                	<legend class="font-weight-semibold"><i class="icon-graduation2 mr-2"></i> Datos escolares</legend>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Selecciona tu carrera</label>
											<div class="col-lg-9">
												<select data-placeholder="Carreras" class="form-control form-control-select2">
													<option>
														
													</option>
													<optgroup label="Ingenierías">
														<option value="ITI">Tecnologías de la Información</option>
														<option value="ISA">Sistemas Automotrices</option>
														<option value="IM">Mecatrónica</option>
														<option value="ITM">Tecnologías de Manufactura</option>
													</optgroup>
													<optgroup label="Licenciaturas">
														<option value="LAYGE">Administración y Gestión Empresarial</option>
													</optgroup>
													<optgroup label="Maestrías">
														<option value="MER">Energías Renovables</option>
														<option value="MI">Ingeniería</option>
													</optgroup>
												</select>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Selecciona tu cuatrimestre</label>
											<div class="col-lg-9">
												<select data-placeholder="Cuatrimestres" class="form-control form-control-select2">
													<option>
														
													</option>
													<optgroup label="Cuatrimestres">
														<option value="1">Cuatrimestre 1</option>
														<option value="2">Cuatrimestre 2</option>
														<option value="3">Cuatrimestre 3</option>
														<option value="4">Cuatrimestre 4</option>
														<option value="5">Cuatrimestre 5</option>
														<option value="6">Cuatrimestre 6</option>
														<option value="7">Cuatrimestre 7</option>
														<option value="8">Cuatrimestre 8</option>
														<option value="9">Cuatrimestre 9</option>
														<option value="10">Cuatrimestre 10</option>
													</optgroup>
												</select>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Año de ingreso</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" placeholder="Año">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Promedio</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" placeholder="10.0">
											</div>
										</div>

									</fieldset>
								</div>
							</div>

							<div class="text-right">
								<button type="submit" class="btn btn-primary">Agregar alumno <i class="icon-profile ml-2"></i></button>
							</div>
						</form>
								</div>
							</div>
							<!-- /2 columns form -->	
						</div>
						<!-- /content area -->
					</div>
				</div>
			</div>
			<!-- /horizontal form modal -->

			 <!-- Horizontal form modal EDITAR -->
			<div id="modal_form_horizontal-editar" class="modal fade" tabindex="-1">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Editar alumno</h5>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						

						<!-- Content area -->
						<div class="content">				
			
							<!-- 2 columns form -->
							<div class="card">
								<div class="card-header header-elements-inline">
									<h5 class="card-title">Datos del alumno</h5>
									<div class="header-elements">
										<div class="list-icons">
			   			            		<a class="list-icons-item" data-action="collapse"></a>
			   			            		<a class="list-icons-item" data-action="reload"></a>
			   			            		<a class="list-icons-item" data-action="remove"></a>
			   			            	</div>
					    			        	</div>
								</div>
			
								<div class="card-body">
									<form action="#">
							<div class="row">
								<div class="col-md-6">
									<fieldset>
										<legend class="font-weight-semibold"><i class="icon-reading mr-2"></i> Detalles personales</legend>
										
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Nombre</label>
											<div class="col-lg-9">
												<div class="row">
													<div class="col-md-6">
														<input type="text" placeholder="Nombre" class="form-control">
													</div>

													<div class="col-md-6">
														<input type="text" placeholder="Apellido paterno" class="form-control">
													</div>

													<div class="col-md-6">
														<input type="text" placeholder="Apellido materno" class="form-control">
													</div>
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Sexo:</label>
	
											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input type="radio" class="form-input-styled" name="gender" checked="">
													Masculino
												</label>
											</div>
	
											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input type="radio" class="form-input-styled" name="gender">
													Femenino
												</label>
											</div>
										</div>
								
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Ingresa tu matrícula</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" placeholder="Matrícula">
											</div>
										</div>
										
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Correo electrónico</label>
											<div class="col-lg-9">
												<input type="text" placeholder="tucorreo@gmail.com" class="form-control">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Teléfono celular</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" placeholder="Celular">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Teléfono de emergencia</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" placeholder="Celular">
											</div>
										</div>
		
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Dirección</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" placeholder="¿Dónde vives?">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">CURP</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" placeholder="CURP">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Observaciones</label>
											<div class="col-lg-9">
												<textarea rows="5" cols="5" class="form-control" placeholder="Opcional"></textarea>
											</div>
										</div>
									</fieldset>
								</div>

								<div class="col-md-6">
									<fieldset>
					                	<legend class="font-weight-semibold"><i class="icon-graduation2 mr-2"></i> Datos escolares</legend>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Selecciona tu carrera</label>
											<div class="col-lg-9">
												<select data-placeholder="Carreras" class="form-control form-control-select2">
													<option>
														
													</option>
													<optgroup label="Ingenierías">
														<option value="ITI">Tecnologías de la Información</option>
														<option value="ISA">Sistemas Automotrices</option>
														<option value="IM">Mecatrónica</option>
														<option value="ITM">Tecnologías de Manufactura</option>
													</optgroup>
													<optgroup label="Licenciaturas">
														<option value="LAYGE">Administración y Gestión Empresarial</option>
													</optgroup>
													<optgroup label="Maestrías">
														<option value="MER">Energías Renovables</option>
														<option value="MI">Ingeniería</option>
													</optgroup>
												</select>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Selecciona tu cuatrimestre</label>
											<div class="col-lg-9">
												<select data-placeholder="Cuatrimestres" class="form-control form-control-select2">
													<option>
														
													</option>
													<optgroup label="Cuatrimestres">
														<option value="1">Cuatrimestre 1</option>
														<option value="2">Cuatrimestre 2</option>
														<option value="3">Cuatrimestre 3</option>
														<option value="4">Cuatrimestre 4</option>
														<option value="5">Cuatrimestre 5</option>
														<option value="6">Cuatrimestre 6</option>
														<option value="7">Cuatrimestre 7</option>
														<option value="8">Cuatrimestre 8</option>
														<option value="9">Cuatrimestre 9</option>
														<option value="10">Cuatrimestre 10</option>
													</optgroup>
												</select>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Año de ingreso</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" placeholder="Año">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Promedio</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" placeholder="10.0">
											</div>
										</div>

									</fieldset>
								</div>
							</div>

							<div class="text-right">
								<button type="submit" class="btn btn-primary">Editar alumno <i class="icon-magazine ml-2"></i></button>
							</div>
						</form>
								</div>
							</div>
							<!-- /2 columns form -->	
						</div>
						<!-- /content area -->
					</div>
				</div>
			</div>
			<!-- /horizontal form modal -->

			<!-- Warning modal -->
				<div id="modal_theme_warning" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-warning">
								<h2 class="modal-title">¡Alerta! Cuidado... 
									<i class="icon-shield-notice ml-4"></i>
								</h2>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h3 class="font-weight-semibold">¿Estás seguro?</h3>
								<p>
									Estás a punto de eliminar un dato del sistema. Al dar clic en eliminar no podrás deshacer cambios y los datos se eliminarán permanentemente.
								</p>

								<hr>

								<p class="font-weight-semibold">
									Para mayor seguridad, deberás indicar tu usuario y contraseña:
								</p>

								<div class="form-group row">
									<label class="col-lg-3 col-form-label">Ingresa usuario</label>
									<div class="col-md-6">
										<input type="text" class="form-control" placeholder="Usuario">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-lg-3 col-form-label">Ingresa contraseña</label>
									<div class="col-md-6">
										<input type="password" class="form-control" placeholder="Contraseña">
									</div>
								</div>

							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Cancelar</button>
								<button type="button" class="btn bg-warning" data-dismiss="modal">Eliminar</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /warning modal -->

			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						Derechos reservados &copy; 2019.  <a href="http://ibecerram.systems/sistema/ITI/">Sistema UPV</a> by <a href="http://ibecerram.systems/" target="_blank">IB Systems</a>
					</span>

					<ul class="navbar-nav ml-lg-auto">
						<li class="nav-item"><a href="http://ibecerram.systems/imfreelancer/mylightblog/#contact-block" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Ayuda</a></li>
						<li class="nav-item"><a href="http://ibecerram.systems/imfreelancer/mylightblog/?page_id=275" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-embed2 mr-2"></i> Información del programador</span></a></li>
					</ul>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
