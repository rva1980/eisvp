<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Contacto - Escuela Infantil San Vicente de Paúl</title>
		<meta name="description" content="Formulario de contacto de la Escuela Infantil San Vicente de Paúl para niños de primer ciclo de 0 a 3 años en el barrio de Carabanchel, Madrid">
		<meta name="keywords" content="Escuela Infantil San Vicente de Paúl, escuela infantil, escuelas infantiles, guarderia, guarderias, centro educativo, bebe, bebes, Madrid, Carabanchel,">
		<meta name="author" content="rvafactory">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
		<link rel="stylesheet" type="text/css" href="css/lightbox.css"/>
		<link href="favicon.ico" rel="shortcut icon" type="image/x-icon"/>
		<link href='http://fonts.googleapis.com/css?family=Open%20Sans%20Condensed%3A700%7COpen%20Sans%3A400%2C700%7CSacramento' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="js/lightbox.min.js"></script>
		<script type="text/javascript" src="js/funciones.js"></script>
		<script type="text/javascript" src="js/validar.js"></script>
		<script type="text/javascript">
			var RecaptchaOptions = {
				lang : 'es',
				theme : 'red',
				custom_translations : { instructions_visual : "Ingrese los caracteres:" }
			};
		</script>
		<script type="text/javascript">
			required.add('Nombre_Completo','VALIDAR_NO_VACIO','Nombre Completo');
			required.add('Direccion_Email','VALIDAR_EMAIL','Dirección Email');
			required.add('Su_Mensaje','VALIDAR_NO_VACIO','Su Mensaje');
		</script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-54379516-1', 'auto');
			ga('send', 'pageview');
		</script>
	</head>

	<body>
		<div id="marco">
			<header>
				<div id="cabeceroSol">
					<img src="img/cabeceroSol.png" alt="Cabecero Sol"/>
				</div>
				<div id="cabeceroNubeIzqSombra">
					<img src="img/cabeceroNubeIzqSombra.png" alt="Cabecero Nube Izquierda Sombra"/>
				</div>
				<div id="cabeceroNubeDerSombra">
					<img src="img/cabeceroNubeDerSombra.png" alt="Cabecero Nube Derecha Sombra"/>
				</div>
				<div id="cabeceroNubeIzqBlanca">
					<img src="img/cabeceroNubeIzqBlanca.png" alt="Cabecero Nube Izquierda Blanca"/>
				</div>
				<div id="cabeceroNubeDerBlanca">
					<img src="img/cabeceroNubeDerBlanca.png" alt="Cabecero Nube Derecha Blanca"/>
				</div>
				<div id="cabeceroNubeIzqAzul">
					<img src="img/cabeceroNubeIzqAzul.png" alt="Cabecero Nube Izquierda Azul"/>
				</div>
				<div id="cabeceroNubeDerAzul">
					<img src="img/cabeceroNubeDerAzul.png" alt="Cabecero Nube Derecha Azul"/>
				</div>
				<div id="logo">
					<img src="img/logo.png" alt="Logo"/>
				</div>
			</header>
			<div id="solapaContenido">
			</div>
			<div id="contenido0">
				<nav>
					<div id="botonMenu">
						MENU
						<img src="img/menu.png" alt="Menú"/>
					</div>
					<div id="desplegable">
						<div class="menuGrupo">
							<a id="botonInicio" href="index.html">
								INICIO
							</a>
							<a id="botonInformacion" href="informacion.html">
								INFORMACIÓN
							</a>
							<a id="botonNoticias" href="noticias.html">
								NOTICIAS
							</a>
							<a id="botonProyectoEducativo" href="proyectoeducativo.html">
								PROYECTO EDUCATIVO
							</a>
						</div>
						<div class="menuGrupo">
							<a id="botonInstalaciones" href="instalaciones.html">
								INSTALACIONES
							</a>
							<a id="botonLocalizacion" href="localizacion.html">
								LOCALIZACIÓN
							</a>
							<a id="botonContacto" href="contacto.php">
								CONTACTO
							</a>
							<a id="botonAccesoPadres" href="accesopadres.html">
								ACCESO PADRES
							</a>
						</div>
					</div>
				</nav>
				<div id="contenido1">
					<div class="entrada">
						<div class="pizarra">
							<h2>
								Formulario de Contacto
							</h2>
							<img src="img/muralArdilla.png" alt="Mural Ardilla"/>
						</div>
						<div class="texto">
							<p>
								Si tiene alguna pregunta, sugerencia o duda y quiere que nos pongamos en contacto con usted, por favor, rellene el siguiente formulario y le responderemos lo antes posible.
							</p>
							<!--EMPIEZA FORMULARIO-->
							<?php
								if(isset($_POST['Direccion_Email']) AND ($_POST['enviar'])) {
									session_start();
									$mensaje_error = "";
									include 'config-formulario.php';
									require_once('recaptchalib.php');

									$resp = recaptcha_check_answer ($privatekey,
															$_SERVER["REMOTE_ADDR"],
															$_POST["recaptcha_challenge_field"],
															$_POST["recaptcha_response_field"]);

									if (!$resp->is_valid) {
										$mensaje_error .= "Control Anti SPAM no es válido <br />";
									}

									if(!isset($_POST['Nombre_Completo']) ||
										!isset($_POST['Direccion_Email']) ||
										!isset($_POST['Numero_Telefono']) ||
										!isset($_POST['Su_Mensaje'])		
										) {
										$mensaje_error .='Al Parecer tiene un problema con el Formulario <br />';		
									}

									$su_nombre = strip_tags($_POST['Nombre_Completo']);
									$_SESSION['su_nombre'] = $su_nombre;

									$email_de = strip_tags($_POST['Direccion_Email']);
									$_SESSION['email_de'] = $email_de;

									$telefono = strip_tags($_POST['Numero_Telefono']); 
									$_SESSION['telefono'] = $telefono;

									$su_comentario = strip_tags( $_POST['Su_Mensaje']);
									$_SESSION['su_comentario'] = $su_comentario;

									$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
									if(preg_match($email_exp,$email_de)==0) {
										$mensaje_error .= 'La dirección Email no es válida<br />';
									}
									if(strlen($su_nombre) < 2) {
										$mensaje_error .= 'Ingrese su Nombre y Apellido<br />';
									}
									if(strlen($su_comentario) < 5) {
										$mensaje_error .= 'Su Mensaje no es válido.<br />';
									}

									if(strlen($mensaje_error) > 0) {
										echo '
											<div class="alerta"> <b>ERROR AL ENVIAR EL FORMULARIO</b><br /> '.$mensaje_error.'</div>		
										';
									}

									// Si todo está bien, entonces enviamos el mensaje Email

									if (strlen($mensaje_error) == 0){ 

										$mensaje_email = "MENSAJE DEL FORMULARIO DE CONTACTO. <br /><br />";

										function clean_string($string) {
											$bad = array("content-type","bcc:","to:","cc:");
											return str_replace($bad,"",$string);
										}
										$su_comentario= nl2br ($su_comentario);

										$mensaje_email .= "Nombre: ".clean_string($su_nombre)."<br />";
										$mensaje_email .= "Dirección Email: ".clean_string($email_de)."<br />";
										$mensaje_email .= "Teléfono: ".clean_string($telefono)."<br />";
										$mensaje_email .= "Mensaje: ".clean_string($su_comentario)."<br />";

										$cabeceras = 'From:'.$email_de."\r\n".
											'Reply-To:'. $email_de. "\r\n".
											'X-Mailer: PHP/' . phpversion().
											'Return-Path:' .$email_de."\r\n".
											'MIME-Version: 1.0' . "\r\n".
											'Content-type: text/html; charset=iso-8859-1' . "\r\n";

										mail($enviar_a, $asunto, $mensaje_email, $cabeceras);
										header("Location: $pagina_confirmacion");
										echo "
											<script>location.replace('".$pagina_confirmacion."')</script>
										";
									}
								}
							?>
							<p>
								Los campos marcados con asteriscos (<span class="estrella">*</span>) son obligatorios.
							</p>
							<form name="formulariocontacto" method="post" action="contacto.php" onSubmit="return validate.check(this)">
								<p>
									<div class="etiquetaFormulario">
										Tu Nombre<span class="estrella">*</span>:
									</div>
									<input name="Nombre_Completo" type="text" id="Nombre_Completo" value="<?php echo $_SESSION['su_nombre'] ?>" maxlength="50">
									
								</p>
								<p>
									<div class="etiquetaFormulario">
										Tu E-Mail<span class="estrella">*</span>:
									</div>
									<input name="Direccion_Email" type="text" id="Direccion_Email" value="<?php echo $_SESSION['email_de'] ?>" maxlength="30">
								</p>
								<p>
									<div class="etiquetaFormulario">
										Tu Teléfono:
									</div>
									<input name="Numero_Telefono" type="text" id="Numero_Telefono" value="<?php echo $_SESSION['telefono'] ?>" maxlength="25">
								</p>
								<p>
									<div id="etiquetaMensaje" class="etiquetaFormulario">
										Mensaje<span class="estrella">*</span>:
									</div>
									<textarea name="Su_Mensaje" id="Su_Mensaje" maxlength="2000"><?php echo $_SESSION['su_comentario']?></textarea>
								</p>
								<p>
									Por favor, introduzca los caracteres que ve en la imagen de abajo. Esto es requerido para evitar envíos automáticos.
								</p>
								<div id="antiSpam" align="center">
									<?php
										include 'config-formulario.php';
										require_once('recaptchalib.php');
										echo recaptcha_get_html($publickey);
									?>
								</div>
								<p>
									Política de Privacidad:
								</p>
								<p>
									En cumplimiento de lo dispuesto en la Ley Orgánica 15/1999 de Protección de Datos de Carácter Personal, le informamos de que los datos que nos facilite a través del presente formulario pasarán a formar parte de un fichero propiedad de la ESCUELA INFANTIL SAN VICENTE DE PAÚL. y serán utilizados ÚNICAMENTE con la finalidad de remitirle la información que usted nos solicite. En consecuencia, sus datos no serán almacenados ni utilizados para cualquier otra finalidad, ni cedidos a terceras personas. Usted podrá ejercer, en cualquier momento, sus derechos de acceso, rectificación, cancelación y oposición mediante escrito dirigido a la dirección de correo electrónico eisvp@planalfa.es junto con copia del correspondiente documento acreditativo de su identidad.
								</p>
								<div id="botonesFormulario">
									<input name="limpiar" id="limpiar" type="reset" value="Limpiar">&nbsp;
									<input name="enviar" id="enviar" type="submit" value="Enviar"> 
								</div> 		
							</form>
               				<!--TERMINA FORMULARIO-->
						</div>
					</div>
				</div>
			</div>
			<footer>
				<div id="pieColegioIzqSombra">
					<img src="img/pieColegioIzqSombra.png" alt="Pie Colegio Izquierda Sombra"/>
				</div>
				<div id="pieNubeDerSombra">
					<img src="img/pieNubeDerSombra.png" alt="Pie Nube Derecha Sombra"/>
				</div>
				<div id="pieColegioIzqBlanco">
					<img src="img/pieColegioIzqBlanco.png" alt="Pie Colegio Izquierda Blanco"/>
				</div>
				<div id="pieNubeDerBlanca">
					<img src="img/pieNubeDerBlanca.png" alt="Pie Nube Derecha Blanca"/>
				</div>
				<div id="pieColegioIzqRojo">
					<img src="img/pieColegioIzqRojo.png" alt="Pie Colegio Izquierda Rojo"/>
				</div>
				<div id="pieNubeDerAzul">
					<img src="img/pieNubeDerAzul.png" alt="Pie Nube Derecha Azul"/>
				</div>
				<div id="pieSanVicente">
					<img src="img/pieSanVicente.png" alt="Pie San Vicente"/>
				</div>
			</footer>
		</div>
		<script type="text/javascript">
			var paginaActual = "Contacto";
		</script>
	</body>

</html>