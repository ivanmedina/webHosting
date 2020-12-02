<?php
require_once './../administrador/oferta.entidad.php';
require_once './../administrador/oferta.model.php';

// Logica
$alm = new Oferta();
$model = new OfertaModel();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../css/estilos.css">	
		
	<title>The Web Hosting</title>
</head>
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
    <a href="noticias.view.php">
        <img id="contacto" src="../css/imagenes/contacto.png">
    </a> 
</header>
<body background="../css/imagenes/fondo.png">
    

</body>

</html>