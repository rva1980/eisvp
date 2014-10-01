<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php echo Site::title() . ' - ' . Site::name(); ?></title>
		<meta name="description" content="<?php echo Site::description(); ?>">
		<meta name="keywords" content="<?php echo Site::keywords(); ?>">
		<meta name="robots" content="<?php echo Page::robots(); ?>">
		<meta name="author" content="rvafactory">

		<?php Action::run('theme_meta'); ?>

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Styles -->
		<link rel="stylesheet" href="<?php echo Site::url(); ?>/public/assets/css/lightbox.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo Site::url(); ?>/public/themes/eisvp/css/estilos.css" type="text/css" />
		<?php Stylesheet::load(); ?>

		<link rel="icon" href="<?php echo Site::url(); ?>/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="<?php echo Site::url(); ?>/favicon.ico" type="image/x-icon">

		<link href='http://fonts.googleapis.com/css?family=Open%20Sans%20Condensed%3A700%7COpen%20Sans%3A400%2C700%7CSacramento' rel='stylesheet' type='text/css'>

		<!-- JavaScripts -->
		<?php Javascript::add('public/assets/js/jquery-1.11.0.min.js', 'frontend', 1); ?>
		<?php Javascript::add('public/assets/js/lightbox.min.js', 'frontend', 2); ?>
		<?php Javascript::add('public/themes/eisvp/js/funciones.js', 'frontend', 3); ?>
		<?php Javascript::load(); ?>

		<?php Action::run('theme_header'); ?>

	</head>

	<body>
		<div id="marco">
			<header>
				<div id="cabeceroSol">
					<img src="<?php echo Site::url(); ?>/img/cabeceroSol.png" alt="Cabecero Sol"/>
				</div>
				<div id="cabeceroNubeIzqSombra">
					<img src="<?php echo Site::url(); ?>/img/cabeceroNubeIzqSombra.png" alt="Cabecero Nube Izquierda Sombra"/>
				</div>
				<div id="cabeceroNubeDerSombra">
					<img src="<?php echo Site::url(); ?>/img/cabeceroNubeDerSombra.png" alt="Cabecero Nube Derecha Sombra"/>
				</div>
				<div id="cabeceroNubeIzqBlanca">
					<img src="<?php echo Site::url(); ?>/img/cabeceroNubeIzqBlanca.png" alt="Cabecero Nube Izquierda Blanca"/>
				</div>
				<div id="cabeceroNubeDerBlanca">
					<img src="<?php echo Site::url(); ?>/img/cabeceroNubeDerBlanca.png" alt="Cabecero Nube Derecha Blanca"/>
				</div>
				<div id="cabeceroNubeIzqAzul">
					<img src="<?php echo Site::url(); ?>/img/cabeceroNubeIzqAzul.png" alt="Cabecero Nube Izquierda Azul"/>
				</div>
				<div id="cabeceroNubeDerAzul">
					<img src="<?php echo Site::url(); ?>/img/cabeceroNubeDerAzul.png" alt="Cabecero Nube Derecha Azul"/>
				</div>
				<div id="logo">
					<img src="<?php echo Site::url(); ?>/img/logo.png" alt="Logo"/>
				</div>
			</header>
			<div id="solapaContenido">
			</div>

			<div id="contenido0">
				<nav>
					<div id="botonMenu">
						MENU
						<img src="<?php echo Site::url(); ?>/img/menu.png" alt="Menú"/>
					</div>
					<div id="desplegable">
						<!--?php echo Menu::get(); ?-->
						<div class="menuGrupo">
							<a id="botonInicio" href="<?php echo Site::url(); ?>/index.html">
								INICIO
							</a>
							<a id="botonInformacion" href="<?php echo Site::url(); ?>/info">
								INFORMACIÓN
							</a>
							<a id="botonNoticias" href="<?php echo Site::url(); ?>/noticias">
								NOTICIAS
							</a>
							<a id="botonProyectoEducativo" href="<?php echo Site::url(); ?>/proyectoeducativo.html">
								PROYECTO EDUCATIVO
							</a>
						</div>
						<div class="menuGrupo">
							<a id="botonInstalaciones" href="<?php echo Site::url(); ?>/instalaciones.html">
								INSTALACIONES
							</a>
							<a id="botonLocalizacion" href="<?php echo Site::url(); ?>/localizacion.html">
								LOCALIZACIÓN
							</a>
							<a id="botonContacto" href="<?php echo Site::url(); ?>/contacto.php">
								CONTACTO
							</a>
							<a id="botonAccesoPadres" href="<?php echo Site::url(); ?>/users/login">
								ACCESO PADRES
							</a>
						</div>
					</div>
				</nav>
			<div id="contenido1">