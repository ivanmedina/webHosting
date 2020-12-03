<?php 
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="./../css/estilos.css">	
		
	<title>The Web Hosting</title>
</head>
<body background="./../css/imagenes/fondo.png">
<section id="contenedor">
<a id="ver" href="#">

<picture>
<header>
		<a href="compa.php">
			<img id="compañia" src="./../css/imagenes/compañia.png">
		</a>
		<a href="servicios.php">
			<img id="servicios" src="./../css/imagenes/servicios.png">
		</a>
<a href="soluciones.php">
			<img id="soluciones" src="./../css/imagenes/soluciones.png">
		</a>
<a href="cliente_p.php">
			<img id="clientes" src="./../css/imagenes/clientes.png"> 
		</a>

		<a href="contacto.view.php">
			<img id="contacto" src="./../css/imagenes/contacto.png">
		</a> 	
</header>
		<center>

<h1>
Centro de Soporte </h1>
<p>
	Soporte al Cliente
Queremos asegurarnos de que le saca el máximo partido a todas las herramientas que ofrecemos.
 Esa es la razón por la que hemos desarrollado un soporte integral y un centro de información con cientos de artículos en nuestra base de conocimientos con capacidad de búsqueda, así como manuales descargables.
 Todo respaldado por nuestro incomparable soporte al cliente, accesible todos los días por email, teléfono o chat en vivo.
</p>
<img src="./../css/imagenes/ayuda.png">
<br><br>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <a href="index.php"><button type="button" class="btn btn-secondary btn-lg btn-block">INICIO</button></a>
</section>

    </picture>
</center>

<footer>
		<a id="mapa" href="mapa.view.php">
            <img src="./../css/imagenes/maps.png" alt="">
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
