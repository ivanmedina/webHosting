<?php 
	session_start();

    require_once './../models/oferta.entidad.php';
    require_once './../models/oferta.model.php';
    require_once './../models/plan.entidad.php';
    require_once './../models/plan.model.php';
// Logica
$alm = new Oferta();
$model = new OfertaModel();
$plan=new Plan();
$modelP=new planModel();

if(isset($_REQUEST['action']))
{
	switch($_REQUEST['action'])
	{
        case 'registrar':
            if (!isset($_SESSION['idusuario'])) {
                header('Location: login.php');
            }
            
            $plan->__SET('usuario', $_SESSION['idusuario']);
            $plan->__SET('oferta',  $_REQUEST['id']);
            $modelP->Registrar($plan);
            echo "<script>alert('servicio adquirido');</script>";
			break;

	}
}
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
<!-- HEADER PAGINA PRINCIPAL -->
	<header>
		<a href="compa.php"><img id="compañia" src="../css/imagenes/compañia.png"></a>
		<a href="servicios.php"><img id="servicios" src="../css/imagenes/servicios.png"></a>
		<a href="soluciones.php"><img id="soluciones" src="../css/imagenes/soluciones.png"></a>
		<a href="cliente_p.php"><img id="clientes" src="../css/imagenes/clientes.png"> </a>
		<a href="contacto.view.php"><img id="contacto" src="../css/imagenes/contacto.png"></a>
		<script type="text/javascript" src="./../js/DataTables/jQuery-3.3.1/jquery-3.3.1.js"></script>
        <link rel="stylesheet" type="text/css" href="./../js/DataTables/datatables.css">
        <script type="text/javascript" src="./../js//DataTables/datatables.js"></script>
	</header>
	            <br><br><br><br>
<center>
 <div id="verServicios" class="col s12">
            <table id="table1">
                <thead>
                    <tr>
                        <th style="text-align:center;">Nombre</th>
                        <th style="text-align:center;">Precio</th>
                        <th style="text-align:center;">Espacio</th>
                        <th style="text-align:center;">Transferencia</th>
                        <th style="text-align:center;">Sitios</th>
                        <th style="text-align:center;">Registro</th>
                        <th style="text-align:center;">Cuentas</th>
                        <th style="text-align:center;">Subdominios</th>
                        <th style="text-align:center;">Plan</th>
                        <th style="text-align:center;">Tecnologia</th>
                        <th style="text-align:center;">Soporte</th>
                        <th style="text-align:center;">Vencimiento</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td style="text-align:center;"><?php echo $r->__GET('nombre'); ?></td>
                            <td style="text-align:center;"><?php echo $r->__GET('precio'); ?></td>
                            <td style="text-align:center;"><?php echo $r->__GET('espacio'); ?></td>
                            <td style="text-align:center;"><?php echo $r->__GET('transferencia'); ?></td>
                            <td style="text-align:center;"><?php echo $r->__GET('sitio'); ?></td>
                            <td style="text-align:center;"><?php echo $r->__GET('registro'); ?></td>
                            <td style="text-align:center;"><?php echo $r->__GET('cuentas'); ?></td>
                            <td style="text-align:center;"><?php echo $r->__GET('subdominios'); ?></td>
                            <td style="text-align:center;"><?php echo $r->__GET('panel'); ?></td>
                            <td style="text-align:center;"><?php echo $r->__GET('tecnologia'); ?></td>
                            <td style="text-align:center;"><?php echo $r->__GET('soporte'); ?></td>
                            <td style="text-align:center;"><?php echo $r->__GET('vencimiento')." dias"; ?></td>
                            <td style="text-align:center;">
                                <a href="?action=registrar&id=<?php echo $r->id; ?>" style="color:black">Comprar</a>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>   
        </div>
        </center>
            <br><br><br><br>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <a href="index.php"><button type="button" class="btn btn-secondary btn-lg btn-block">INICIO</button></a>

    
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
            var table=$('#table1').DataTable({
            dom: "Bflrtip",
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]

            });
            // table.buttons( 1, 'csv:name' ).enable();
        });
</script>
</html>
