<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../css/estilos.css">
	    
	    <style>
        #contenedor{
            display: flex;
            flex-wrap: wrap;
        }
        #contenedor > div{
        	
        	border-radius: 20px;
 			border: 4px solid gray;
            margin: 40px;
            padding: 6px;
            width: 450px;
            height: 220px;
        }

    	</style>	
</head>
	<link rel="stylesheet" type="text/css" href="../css/cliente.css" />

	<!-- MENU PRINCIPAL / ENCABEZADO -->
	<header>
		<a href="compa.php"><img id="compañia" src="../css/imagenes/compañia.png"></a>
		<a href="servicios.php"><img id="servicios" src="../css/imagenes/servicios.png"></a>
		<a href="soluciones.php"><img id="soluciones" src="../css/imagenes/soluciones.png"></a>
		<a href="cliente_p.php"><img id="clientes" src="../css/imagenes/clientes.png"> </a>
		<a href="contacto.view.php"><img id="contacto" src="../css/imagenes/contacto.png"></a> 		
	</header>


<body background="../css/imagenes/fondo.png">

	<!-- IMAGENES CON LINK -->
	<div id=contenedor>
	
 	<div><center><a href="http://www.banorte.com.mx/"><img src="../css/imagenes/Banorte.png" width="400" height="200" /></a></center></div>
	<div><center><a href="https://www.bbva.mx/"><img src="../css/imagenes/BBVA.png" width="400" height="200"/></a></center></div>
	<div><center><a href="https://www.coppel.com/"><img src="../css/imagenes/Coppel.png" width="400" height="200"/></a></center></div>
	<div><center><a href="https://www.liverpool.com.mx/tienda/home"><img src="../css/imagenes/Liverpool.png" width="400" height="200" /></a></center></div>
	<div><center><a href="https://alsuper.com/"><img src="../css/imagenes/Alsuper.png" width="400" height="200" /></a></center></div>
	<div><center><a href="https://www.vivaaerobus.com/mx"><img src="../css/imagenes/Vivaaerobus.png" width="400" height="200"/></a></center></div>
	<div><center><a href="https://www.steren.com.mx/"><img src="../css/imagenes/Steren.png" width="330" height="200"/></a></center></div>
	<div><center><a href="https://telmex.com/"><img src="../css/imagenes/Telmex.png" width="330" height="200" /></a></center></div>
	<div><center><a href="https://www.homedepot.com.mx/"><img src="../css/imagenes/The Home Depot.png" width="320" height="200"/></a></center></div>
	
	</div>


 	<center><br><br><br><br><br><br><br><br>
	<br>
	<!-- BUTTON -->
	<a href="Web_Hosting.view.php"><input type="button" id="boton" value="INICIO" style="size: 89;">
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <a href="Web_Hosting.view.php"><button type="button" class="btn btn-secondary btn-lg btn-block">INICIO</button></a>-->
	</center>

	<br><br>
	<footer>
		<a id="mapa" href="mapa.view.php"><img src="../css/imagenes/maps.png" alt=""></a>

		<form method="post" action="correo.php">
			<div id=name><input name= "nombre" class="name" type="text" size="15" maxlength="30"  name="nombre"> </div>
			<div id="correo"><input name="correo" class="correo" type="email" size="15" maxlength="30"  name="correo"></div>
			<div><input name="sugerencia" class="sugerencia" type="text" size="15" maxlength="100" name="sugerencia"></div>
		</form>

	</footer>
</body>
</html>

