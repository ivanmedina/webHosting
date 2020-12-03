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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
 	<link type="text/css" rel="stylesheet" href="../css/acordeonpreguntas.css">
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
<p> <font size="10px">
Garantía de devolución del dinero por 30 días </p>

<h1>Hosting Garantías</h1></font>



<div class="accordion">

<section id="one">
 <h2><a href="#one">30 Días de Satisfacción</a></h2>
 <div>

<p>Si por alguna razón no estás satisfecho con nuestro servicio, sólo notifícanoslo durante los primeros 30 días posteriores a tu contratación y te regresamos tu dinero.

Nota: Ten presente que el período es de 30 días exactamente después de la activación del servicio, es únicamente válida para planes de hospedaje compartido linux y pagos anuales, además de que esta garantía, se invalidará si tu cuenta es suspendida durante este período por violación a nuestros Términos y Condiciones, sin reembolso alguno.
Las tarifas de registro de dominio no son reembolsables.
</p>

 </div>
 </section>
 <section id="two">

 <h2><a href="#two">99.5% Uptime</a></h2>
 <div>

<p>Si por alguna razón no planeada tu sitio presenta Downtime, !te regresamos crédito a tu cuenta!.

Aunque el Downtime no es nada frecuente en nuestros servidores, si se llegase a presentar ten la certeza que se te añadirá crédito a tu cuenta. Muchos proveedores de web hosting te prometen el 99.9% de Uptime pero nunca te dicen que pasa si no lo llegan a lograr.
Ten en cuenta que los servidores necesitan mantenimiento y que habrá ocasiones en las cuales se haga mantenimiento planeado que pueda resultar en poco Downtime en cuyo caso esta garantía no aplica.


 </div>

 </section>
 <section id="three"> <h2><a href="#three">Respuesta en 24 horas </a></h2>

 <div>
<p>Si no recibes respuesta de nosotros en menos de 24 horas te damos crédito a tu cuenta.
Para nosotros el soporte al cliente es nuestra prioridad y hacemos todo por atender las necesidades de nuestros clientes tan rápido como nos son llegadas. Por ello te garantizamos que cuando envíes alguna petición de soporte atreves del chat o email recibirás respuesta en menos de 24 horas. Recuerda que por lo general éste es en menos de 15 minutos. Si por alguna razón no sabes de nosotros en 24 horas te regalamos 5 días de hosting por ticket abierto.</p>

 </div>
 </section>
 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <a href="Web_Hosting.view.php"><button type="button" class="btn btn-secondary btn-lg btn-block">INICIO</button></a>
</section>

    </picture>

    <br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br>
    <br><br><br>
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