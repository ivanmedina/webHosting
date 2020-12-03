<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../css/estilos.css">	
	
	<!-- Smartsupp Live Chat script -->
	<script type="text/javascript">
		var _smartsupp = _smartsupp || {};
			_smartsupp.key = 'ce7827efac9ef6ec229f403021ef2b9166188a7e';
			window.smartsupp||(function(d) {
  			var s,c,o=smartsupp=function(){ 
				o._.push(arguments)};
				o._=[];
				s=d.getElementsByTagName('script')[0];
				c=d.createElement('script');
  				c.type='text/javascript';c.charset='utf-8';c.async=true;
				c.src='https://www.smartsuppchat.com/loader.js?';
				s.parentNode.insertBefore(c,s);
		})(document);
	</script>
	
	
	<title>The Web Hosting</title>
</head>
<body background="../css/imagenes/fondo.png">
<section id="contenedor">
	<a id="ver" href="../bs-slider/index.php">
	
	<picture>
		<!-- BOTON VER MAS -> BANNER -->
		<source media="(min-width: 800px)" srcset="../css/imagenes/ver_mas.png">
		<img src="../css/imagenes/ver_mas.png" alt="Ejemplo">

		<!-- BOTONES BANNER SUPERIOR | COMPAÑIA-SERVICIOS-SOLUCIONES-CLIENTES-CONTACTO-->
		<header>
			<a href="compa.php"><img id="compañia" src="./../css/imagenes/compañia.png"></a>
			<a href="servicios.php"><img id="servicios" src="../css/imagenes/servicios.png"></a>
			<a href="soluciones.php"><img id="soluciones" src="../css/imagenes/soluciones.png"></a>
			<a href="cliente_p.php"><img id="clientes" src="../css/imagenes/clientes.png"></a>
			<a href="contacto.view.php"><img id="contacto" src="../css/imagenes/contacto.png"></a> 	
		</header>

	</picture>
	
	<style>
		.mySlides {display:none}
		.w3-left, .w3-right, .w3-badge {cursor:pointer}
		.w3-badge {height:13px;width:13px;padding:0;}
		.w3-center{
			text-align: right;
			margin-top: -170px;
			font-size: xx-large;
		}
	</style>
	
	<!-- TEXTO BANNER SUPERIOR -->
	<section id="banner"> <!-- BANNER FOTO  DESDE CSS -->
		<div id= "slider" class="w3-content w3-display-container" style="max-width:800px">
  			<img id = "pic" class="mySlides" src="../css/imagenes/banner.png" style="width:160%">
			<img id = "pic" class="mySlides" src="../css/imagenes/banner12.png" style="width:160%">
			<img id = "pic" class="mySlides" src="../css/imagenes/banner13.jpg" style="width:160%">
			<img id = "pic" class="mySlides" src="../css/imagenes/banner8.jpg" style="width:160%">
		
		</div>
		<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    			<div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    			<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    			<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    			<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  		</div>
		
		<!--
		<pre id="baner1">
			Ilimitados dominios en el Hosting.
			Espacio ilimitado.
			Ilimitada transferencia de archivos.
			Ilimitadas cuentas de correo.
			Gratis un nombre de dominio.
		</pre> -->
	</section>

<script>

	var slideIndex = 1;
	showDivs(slideIndex);

	function plusDivs(n) {
	  showDivs(slideIndex += n);
	}

	function currentDiv(n) {
	  showDivs(slideIndex = n);
	}

	function showDivs(n) {
	  var i;
	  var x = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("demo");
	  if (n > x.length) {slideIndex = 1}
	  if (n < 1) {slideIndex = x.length}
	  for (i = 0; i < x.length; i++) {
	    x[i].style.display = "none";  
	  }
	  for (i = 0; i < dots.length; i++) {
	    dots[i].className = dots[i].className.replace(" w3-white", "");
	  }
	  x[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " w3-white";
	}
</script>
	

	<section id="noticias">
		<a href="web.php"><img id="web" src="../css/imagenes/web.png"></a>
		<a href="servidor.php"><img id="servidor" src="../css/imagenes/servidor.png"></a>
		<a href="poliza.php"><img id="poliza" src="../css/imagenes/poliza.png"></a>
		<a href="porque.php"><img id="porque" src="../css/imagenes/porque.png"></a>
		<a href="centro.php"><img id="centro" src="../css/imagenes/centro_ayuda.png"></a>
		<a href="dominios.php"><img id="dominios" src="../css/imagenes/dominios.png"></a>
		<a href="mas.php"><img id="mas" src="../css/imagenes/mas.png"></a>
		<a href="tec.php"><img id="tec" src="../css/imagenes/tec.png"></a>
		<a href="resellers.php"><img id="resellers" src="../css/imagenes/resellers.png"></a>
		<a href="pregunta.php"><img id="preguntas" src="../css/imagenes/preg.png"></a>


	<div id="anterior_starter" src="../css/imagenes/tacha.png">$500</div>
	<div id="costo_starter">$250/año</div>
		<pre id="starter" style="font-size:small">
    	¡Todo lo que necesitas para comenzar!
		Transferencia ilimitada.
		Configuración instantanea.
		Registro de dominio.
		Espacio Web: 10GB. 
		</pre>
	<a href="#"><img id="starter_detalle" src="../css/imagenes/detalles.png"></a>		

	<div id="anterior_basico">$955</div>
	<div id="costo_basico">$455/año</div>
		<pre id="basico" style="font-size:small">
    	¡La mejor solución para grandes proyectos!
		Espacio Web: 100GB. 
		Incluye un dominio gratis.
		Configuración instantanea.
		Transferencia ilimitada.
		Mas de 140 Apps.
		SiteBuilter con plantillas.
		</pre>
	<a href="#"><img id="basico_detalle" src="../css/imagenes/detalles.png"></a>	

	<div id="anterior_no_limite">$1,598</div>
	<div id="costo_no_limite">$799/año</div>
		<pre id="no_limite" style="font-size:small">
    	¡Maximo rendimiento para proyectos
   	interactivos y con contenidos dinamicos!
		Espacio Web: Ilimitado. 
		Incluye un dominio gratis.
		Configuración instantanea.
		Transferencia ilimitada.
		Mas de 140 Apps.
		SiteBuilter con plantillas.
		Base de datos con MySql: Ilimitadas.
		Cuentas de correos:Ilimitadas.
		</pre>
	<a href="#"><img id="no_limite_detalle" src="../css/imagenes/detalles.png"></a>

	<div id="anterior_avanzado">$2,988</div>
	<div id="costo_avanzado">$1,039/año</div>
		<pre id="avanzado" style="font-size:small">
	¡Un plan superior, ideal para desarrolladores!
		Soporte de expertos en apps. 
		Espacio Web: Ilimitado.
		Incluye un dominio gratis.
		2GB de memoria RAM garantizados.
		Transferencia ilimitada.
		Mas de 140 Apps.
		SiteBuilter con plantillas.
		Base de datos con MySql: Ilimitadas.
		Cuentas de correos:Ilimitadas.
		</pre>
	<a href="#"><img id="avanzado_detalle" src="../css/imagenes/detalles.png"></a>

	<!-- ********* TEXTO LATERAL DERECHO ********** -->
	<pre id="texto" style="font-size:smaller">
  La maxima calidad de hosting al mejor
  precio. Los planes incluyen todo lo
  necesitas: Mayor rendimiento y
  maxima seguridad para tu sitio Web.

  The Best Host te ofrece el mas alto
  nivel de confiabilidad gracias a 
  nuestra georredundancia: lo que
  significa que tu pagina web estara
  almacenada en dos centros de datos
  de alto rendimiento independientes
  localizados en distintos lugares

  Si tienes alguna pregunta puedes
  ponerte en contacto con nosotros a:
	</pre>
	
	<div id="correo_texto">help@thebesthost.com</div> <!-- DIV VERTICAL LADO DERECHO -->
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<!--<font size="5px"> <a id="counterVisitas" style="color:white"> &nbsp&nbsp&nbsp &nbsp&nbsp Visitas: </a></font>-->
	<br>
	<!-- BOTON ADMINISTRADOR PARA INGRESAR A LOGIN -->
	<!--<font size="5px"> <a id="administrador" href="login.php" style="color:white">  &nbsp&nbsp Administrador</a> </font>-->
	<a href="cuenta.php"><button id="admin" type="button" class="btn btn-secondary">Mi cuenta</button></a><br>
	</section>

	<!-- footer solamente parte inferior derecha -->
    <footer>
		<a id="mapa" href="mapa.view.php">
            <img src="../css/imagenes/maps.png" alt="">
		</a>

		<form method="POST" action="guardar.php" accept-charset="utf.g">
			<div id=name>
				<input type="text" id="nombre" name="nombre" class="name" maxlength="30" placeholder="Ingrese su nombre"required>
			</div>

			<div id="correo">
				<input type="email" id="email" name="email" class="correo" maxlength="30"
				placeholder="Ingrese su Email" required>
			</div>
		
			<div>
				<textarea id="sugerencia" name="sugerencia" class="sugerencia" maxlength="1000" required>
						</textarea> 
				</div>
		
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
			<button id="enviar" type="submit" class="btn btn-light">Enviar Sugerencia</button>	
		</form>
	</footer>

</section>
		
	<form class="contador" >
		<!--<div id="sfcmx6gc8ds8j6j7pkuu9qe1srrqerptduh"></div><script type="text/javascript" src="https://counter6.wheredoyoucomefrom.ovh/private/counter.js?c=mx6gc8ds8j6j7pkuu9qe1srrqerptduh&down=async" async></script><br><a href="https://www.contadorvisitasgratis.com"></a><noscript><a href="https://www.contadorvisitasgratis.com" title="contador de visitas gratis"><img src="https://counter6.wheredoyoucomefrom.ovh/private/contadorvisitasgratis.php?c=mx6gc8ds8j6j7pkuu9qe1srrqerptduh" border="0" title="contador de visitas gratis" alt="contador de visitas gratis"></a></noscript>-->
		<div id="sfc9wc5kytqxxlbxb9q1g3sn7n6pm3ztk2e"></div> 
			<script type="text/javascript" src="https://counter3.stat.ovh/private/counter.js?c=9wc5kytqxxlbxb9q1g3sn7n6pm3ztk2e&down=async" async></script>
		<br><a href="https://www.contadorvisitasgratis.com"></a><noscript><a href="https://www.contadorvisitasgratis.com" title="contador de visitas para joomla"><img src="https://counter3.stat.ovh/private/contadorvisitasgratis.php?c=9wc5kytqxxlbxb9q1g3sn7n6pm3ztk2e" border="0" title="contador de visitas para joomla" alt="contador de visitas para joomla"></a></noscript>
	</form>
</body>
</html>
