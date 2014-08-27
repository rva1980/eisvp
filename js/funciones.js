/**
 * @author rva1980
 */


$(document).ready(function () {

	//////////////////////////////// MENU ////////////////////////////////
	
	$("#botonMenu").click(function() {
		$("#desplegable").slideToggle();
	});

	$(window).resize(function() {
		if ($(document).width() > 663) {
			$('#desplegable').css('display','block');
			//alert("hola");
		}
		else {
			$('#desplegable').css('display','none');
		} 
	});	
				
	if (paginaActual == "Inicio") {
		$("#botonInicio").css({"background-color":"#6699ff","box-shadow":"0px 0px 8px #ffffff"});
	}
	else {
		$("#botonInicio").hover(
			function() {
				$(this).css({"background-color":"#6699ff","box-shadow":"0px 0px 8px #ffffff"});
			},
			function() {
				$(this).css({"background-color":"none","box-shadow":"none"});
			}
		);
	};

	if (paginaActual == "Noticias") {
		$("#botonNoticias").css({"background-color":"#6699ff","box-shadow":"0px 0px 8px #ffffff"});
	}
	else {
		$("#botonNoticias").hover(
			function() {
				$(this).css({"background-color":"#6699ff","box-shadow":"0px 0px 8px #ffffff"});
			},
			function() {
				$(this).css({"background-color":"none","box-shadow":"none"});
			}
		);
	};

	if (paginaActual == "Informacion") {
		$("#botonInformacion").css({"background-color":"#6699ff","box-shadow":"0px 0px 8px #ffffff"});
	}
	else {
		$("#botonInformacion").hover(
			function() {
				$(this).css({"background-color":"#6699ff","box-shadow":"0px 0px 8px #ffffff"});
			},
			function() {
				$(this).css({"background-color":"none","box-shadow":"none"});
			}
		);
	};

	if (paginaActual == "ProyectoEducativo") {
		$("#botonProyectoEducativo").css({"background-color":"#6699ff","box-shadow":"0px 0px 8px #ffffff"});
	}
	else {
		$("#botonProyectoEducativo").hover(
			function() {
				$(this).css({"background-color":"#6699ff","box-shadow":"0px 0px 8px #ffffff"});
			},
			function() {
				$(this).css({"background-color":"none","box-shadow":"none"});
			}
		);
	};

	if (paginaActual == "Instalaciones") {
		$("#botonInstalaciones").css({"background-color":"#6699ff","box-shadow":"0px 0px 8px #ffffff"});
	}
	else {
		$("#botonInstalaciones").hover(
			function() {
				$(this).css({"background-color":"#6699ff","box-shadow":"0px 0px 8px #ffffff"});
			},
			function() {
				$(this).css({"background-color":"none","box-shadow":"none"});
			}
		);
	};

	if (paginaActual == "Localizacion") {
		$("#botonLocalizacion").css({"background-color":"#6699ff","box-shadow":"0px 0px 8px #ffffff"});
	}
	else {
		$("#botonLocalizacion").hover(
			function() {
				$(this).css({"background-color":"#6699ff","box-shadow":"0px 0px 8px #ffffff"});
			},
			function() {
				$(this).css({"background-color":"none","box-shadow":"none"});
			}
		);
	};

	if (paginaActual == "Contacto") {
		$("#botonContacto").css({"background-color":"#6699ff","box-shadow":"0px 0px 8px #ffffff"});
	}
	else {
		$("#botonContacto").hover(
			function() {
				$(this).css({"background-color":"#6699ff","box-shadow":"0px 0px 8px #ffffff"});
			},
			function() {
				$(this).css({"background-color":"none","box-shadow":"none"});
			}
		);
	};

	if (paginaActual == "AccesoPadres") {
		$("#botonAccesoPadres").css({"background-color":"#6699ff","box-shadow":"0px 0px 8px #ffffff"});
	}
	else {
		$("#botonAccesoPadres").hover(
			function() {
				$(this).css({"background-color":"#6699ff","box-shadow":"0px 0px 8px #ffffff"});
			},
			function() {
				$(this).css({"background-color":"none","box-shadow":"none"});
			}
		);
	};

	//////////////////////////////// CONTENIDO ////////////////////////////////
	
	$(window).load(function() {
		var altoWindow = $(window).height();
		var altoBody = $("body").height();	
		var altoContenido = $("#contenido1").height();
		var altoMinContenido = altoWindow - altoBody + altoContenido + "px";
		//alert(altoWindow + " " + altoBody + " " + altoContenido + " " + altoMinContenido);
		$("#contenido1").css("min-height",altoMinContenido);
	});
	
//	$(window).resize(function() {
//		var altoWindow = $(window).height();
//		var altoBody = $("body").height();	
//		var altoContenido = $("#contenido1").height();
//		var altoMinContenido = altoWindow - altoBody + altoContenido + "px";
//		//alert(altoWindow + " " + altoBody + " " + altoContenido + " " + altoMinContenido);
//		$("#contenido1").css("min-height",altoMinContenido);
//	});
		
});

