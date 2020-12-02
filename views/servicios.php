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

    </picture>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <a href="Web_Hosting.view.php"><button type="button" class="btn btn-warning btn-lg btn-block">INICIO</button></a>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <link rel="stylesheet" href="http://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
        <script src="http://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	<table id="table1">
                    <thead>
                        <tr>
                            <th style="text-align:left;">Nombre</th>
                            <th style="text-align:left;">Precio</th>
                            <th style="text-align:left;">Espacio</th>
                            <th style="text-align:left;">Transferencia</th>
                            <th style="text-align:left;">Cuentas de correo</th>
                            <th style="text-align:left;">Bases de datos</th>
							<th style="text-align:left;">Subdominios</th>
							<th style="text-align:left;">Panel</th>
							<th style="text-align:left;">Soporte</th>
                        </tr>
                    </thead>

                    <!-- <tr>
                        <th>Exportar</td>
                        <td colspan="5">
                            <a href="output.php?t=word" target="_blank" style="color:white">Word</a> |
                            <a href="output.php?t=excel" target="_blank" style="color:white">Excel</a> |
                            <a href="output.php?t=pdf" target="_blank" style="color:white">Pdf</a>
                        </td>                        
                    </tr> -->
                    
 <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('nombre'); ?></td>
                            <td><?php echo $r->__GET('precio'); ?></td>
                            <td><?php echo $r->__GET('espacio'); ?></td>
                            <td><?php echo $r->__GET('transferencia'); ?></td>
							<td><?php echo $r->__GET('cuentas'); ?></td>
							<td><?php echo $r->__GET('bases'); ?></td>
							<td><?php echo $r->__GET('subdominios'); ?></td>
							<td><?php echo $r->__GET('panel'); ?></td>
							<td><?php echo $r->__GET('soporte'); ?></td>
                        </tr>

                    <script>

                     </script>
                    <?php endforeach; ?>

                </table>   
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
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
		<button id="enviar" type="submit" class="btn btn-light">Enviar</button>	
	
	</form>

	</footer>
</body>

<script>
                        $(document).ready(function() {
                               $('#table1').DataTable( {
                                
                                buttons: [
                                    'excel'
                                ]
                            } );
                        } );
</script>
</html>