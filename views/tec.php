<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../css/estilos.css">	
		
	<title>The Web Hosting</title>
</head>
<body background="../css/imagenes/fondo.png">
<section id="contenedor">
<a id="ver" href="#">

<picture>
<header>
<a href="compa.php">
			<img id="compañia" src="../css/imagenes/compañia.png">
		</a>
		<a href="servicios.php">
			<img id="servicios" src="../css/imagenes/servicios.png">
		</a>
<a href="soluciones.php">
			<img id="soluciones" src="../css/imagenes/soluciones.png">
		</a>
<a href="cliente_p.php">
			<img id="clientes" src="../css/imagenes/clientes.png"> 
		</a>

		<a href="contacto.view.php">
			<img id="contacto" src="../css/imagenes/contacto.png">
		</a> 	
</header>
		
<br>
<center>
	<h1> Tecnologías </h1>

	<div class="feature-section-holder__features "><div class="feature-section-holder-features__block "><img src="//www.hostinger.mx/assets/images/technology-page/global-data-centers-080c50fc5f.svg" alt="Centros De Datos Globales Hostinger"><div class="feature-section-holder-features-block__text"><h4>Centros De Datos Globales Hostinger</h4>
	<p>Nuestros servidores se encuentran desplegados en 7 regiones distintas: Reino Unido, Estados Unidos, Brasil, Holanda, Singapur, Indonesia y Lituania (próximamente). Nuestros clientes ahora pueden disfrutar de la más baja latencia. Y la confiabilidad está garantizada a medida que expandimos la implementación en centros de datos Tier-3 conectados globalmente.</p></div></div><div class="feature-section-holder-features__block "><img src="//www.hostinger.mx/assets/images/technology-page/data-redundancy-65b072cd83.svg" alt="Redundancia De Datos Hostinger"><div class="feature-section-holder-features-block__text"><h4>Redundancia De Datos Hostinger</h4><p>La información almacenada en los servidores está protegida por varios niveles de seguridad anti fallos, RAID-10, y backups diarios o semanales.</p></div></div><div class="feature-section-holder-features__block "><img src="//www.hostinger.mx/assets/images/technology-page/high-availability-d2f074dc4f.svg" alt="Alta Disponibilidad Hostinger"><div class="feature-section-holder-features-block__text"><h4>Alta Disponibilidad Hostinger</h4><p>Todos nuestros servidores DC tienen uplinks duales con múltiples ISP. Protegemos a nuestros clientes de ataques DDoS en múltiples capas: Analizador de tráfico Wanguard anti-DDoS y reglas de firewall inteligente a nivel de switch, Bitninja (Firewall de aplicación web) en cada servidor, CloudFlare opcional para cada cuenta, así como reglas de servidor web personalizadas para asegurarse de que tu sitio esté bien protegido contra cualquier tipo de ataque.</p></div></div><div class="feature-section-holder-features__block "><img src="//www.hostinger.mx/assets/images/technology-page/php-http-81cb1532bc.svg" alt="Hostinger PHP HTTP"><div class="feature-section-holder-features-block__text"><h4>Hostinger PHP HTTP</h4><p>Al contar con las más recientes actualizaciones se verán beneficiados el SEO, la retención de visitantes y las conversiones, gracias a la potencia para procesar hasta 3 veces más solicitudes por segundo.</p></div></div><div class="feature-section-holder-features__block "><img src="//www.hostinger.mx/assets/images/technology-page/multi-tier-cache-f6684289ed.svg" alt="Caché Multi Nivel Hostinger"><div class="feature-section-holder-features-block__text"><h4>Caché Multi Nivel Hostinger</h4><p>Contamos con una configuración de caché única: caché multi nivel en una capa de servicio web (NGINX), así como un memcached fork de Twitter (fatcache). Así se pueden reducir drásticamente los tiempos de carga de contenidos tanto estáticos como dinámicos. Los sistemas CMS como WordPress y Joomla alcanzan a mejorar la velocidad de carga hasta 10 veces cuando está habilitado el caché.</p></div></div><div class="feature-section-holder-features__block "><img src="//www.hostinger.mx/assets/images/technology-page/scalable-architecture-468c9efdd6.svg" alt="Arquitectura Ascendible Hostinger"><div class="feature-section-holder-features-block__text"><h4>Arquitectura Ascendible Hostinger</h4><p>Los tiempos de implementación de nuestros servidores varían alrededor de los 10 minutos. Contamos con un proceso de arranque (bootstrap) totalmente automatizado. Se oprime el botón de encendido, se conectan los cables de red, la automatización se activa (kickstart, ansible) y el servidor se conecta.</p></div></div><div class="feature-section-holder-features__block "><img src="//www.hostinger.mx/assets/images/technology-page/fully-managed-90ad520a00.svg" alt="Hostinger Totalmente Administrado"><div class="feature-section-holder-features-block__text"><h4>Hostinger Totalmente Administrado</h4><p>Nos encargamos de que los servidores y toda la infraestructura estén operativos y que todos los paquetes se encuentren actualizados. Todos los ingenieros están permanentemente disponibles en Pagerduty, y tenemos una respuesta reactiva casi instantánea a los incidentes. También configuramos el monitoreo predictivo a través de Prometheus para así prevenir los problemas incluso antes de que se produzcan.</p></div></div>



<div class="col-md-4">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <a href="Web_Hosting.view.php"><button type="button" class="btn btn-secondary btn-lg btn-block">INICIO</button></a>
</section>

    </picture>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>

  
     <footer>
		<a id="mapa" href="mapa.view.php">
            <img src="../css/imagenes/maps.png" alt="">
		</a>


<form method="POST" action="guardar.php" accept-charset="utf.g">
	<font size="4px">
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
		<button id="enviar" type="submit" class="btn btn-light">Enviar</button>	
	
	</form>

	</footer>

</body>
</html>