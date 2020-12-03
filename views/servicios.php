<?php 
	session_start();

    require_once './../models/oferta.entidad.php';
    require_once './../models/oferta.model.php';
// Logica
$alm = new Oferta();
$model = new OfertaModel();

if(isset($_REQUEST['action']))
{
	switch($_REQUEST['action'])
	{
		case 'actualizar':
			$alm->__SET('id',              $_REQUEST['id']);
			$alm->__SET('nombre',          $_REQUEST['nombre']);
			$alm->__SET('precio',        $_REQUEST['precio']);
			$alm->__SET('espacio',            $_REQUEST['espacio']);
			$alm->__SET('transferencia', $_REQUEST['transferencia']);
            $alm->__SET('sitio',              $_REQUEST['sitio']);
            $alm->__SET('registro',          $_REQUEST['registro']);
            $alm->__SET('cuentas',        $_REQUEST['cuentas']);
            $alm->__SET('bases',            $_REQUEST['bases']);
            $alm->__SET('subdominios', $_REQUEST['subdominios']);
            $alm->__SET('garantia',              $_REQUEST['garantia']);
            $alm->__SET('panel',          $_REQUEST['panel']);
            $alm->__SET('tecnologia',        $_REQUEST['tecnologia']);
            $alm->__SET('soporte',            $_REQUEST['soporte']);
            $alm->__SET('vencimiento', $_REQUEST['vencimiento']);

			$model->Actualizar($alm);
			header('Location: admin_ver_servicios.php');
			break;

		case 'registrar':
            $alm->__SET('id',              $_REQUEST['id']);
            $alm->__SET('nombre',          $_REQUEST['nombre']);
            $alm->__SET('precio',        $_REQUEST['precio']);
            $alm->__SET('espacio',            $_REQUEST['espacio']);
            $alm->__SET('transferencia', $_REQUEST['transferencia']);
            $alm->__SET('sitio',              $_REQUEST['sitio']);
            $alm->__SET('registro',          $_REQUEST['registro']);
            $alm->__SET('cuentas',        $_REQUEST['cuentas']);
            $alm->__SET('bases',            $_REQUEST['bases']);
            $alm->__SET('subdominios', $_REQUEST['subdominios']);
            $alm->__SET('garantia',              $_REQUEST['garantia']);
            $alm->__SET('panel',          $_REQUEST['panel']);
            $alm->__SET('tecnologia',        $_REQUEST['tecnologia']);
            $alm->__SET('soporte',            $_REQUEST['soporte']);
            $alm->__SET('vencimiento', $_REQUEST['vencimiento']);


			$model->Registrar($alm);
			header('Location: admin_ver_servicios.php');
			break;

		case 'eliminar':
			$model->Eliminar($_REQUEST['id']);
			header('Location: admin_ver_servicios.php');
			break;

		case 'editar':
			$alm = $model->Obtener($_REQUEST['id']);
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
	</header>
	            <br><br><br><br>
<center>
 <div id="verServicios" class="col s12">
            <table id="table1">
                <thead>
                    <tr>
                        <th style="text-align:left;">Nombre</th>
                        <th style="text-align:left;">Precio</th>
                        <th style="text-align:left;">Espacio</th>
                        <th style="text-align:left;">Transferencia</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('nombre'); ?></td>
                            <td><?php echo $r->__GET('precio'); ?></td>
                            <td><?php echo $r->__GET('espacio'); ?></td>
                            <td><?php echo $r->__GET('transferencia'); ?></td>
                            <td>
                                <a href="?action=editar&id=<?php echo $r->id; ?>" style="color:black">Editar</a>
                            </td>
                            <td>
                                <a href="?action=eliminar&id=<?php echo $r->id; ?>" style="color:black">Eliminar</a>
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
</html>
