<?php
require_once 'oferta.entidad.php';
require_once 'oferta.model.php';

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
			header('Location: index.php');
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
			header('Location: index.php');
			break;

		case 'eliminar':
			$model->Eliminar($_REQUEST['id']);
			header('Location: index.php');
			break;

		case 'buscar':
			$alm = $model->Obtener($_REQUEST['id']);
			break;
	}
}
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Anexsoft</title>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
            <link rel="stylesheet" href="../css/estilos.css">   
	</head>
    <picture>
<header>
<a href="compañia.php">
            <img id="compañia" src="../css/imagenes/compañia.png">
        </a>
        <a href="servicios.php">
            <img id="servicios" src="../css/imagenes/servicios.png">
        </a>
<a href="soluciones.php">
            <img id="soluciones" src="../css/imagenes/soluciones.png">
        </a>
<a href="clientes.view.php">
            <img id="clientes" src="../css/imagenes/clientes.png"> 
        </a>

        <a href="contacto.view.php">
            <img id="contacto" src="../css/imagenes/contacto.png">
        </a>    
</header>
    <body background="darkred" >
<center>
    
                <h1> OFERTA DE SERVICIOS </h1>
                <h2> Ficha Tecnica </h2>

        <div class="pure-g">
            <div class="pure-u-1-12">

                <form action="../bs-slider/index.php" method="post" class="pure-form pure-form-stacked" style="margin-bottom:50px;" bacground="red">
                    <input type="hidden" name="id" value="<?php echo $alm->__GET('id'); ?>" />
                    
                    <table style="width:1000px;" background="red">
                        <tr>
                            <th style="text-align:left;">Nombre</th>
                            <td><input type="text" name="nombre" value="<?php echo $alm->__GET('nombre'); ?>" style="width:100%;" required /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Precio Mensual</th>
                            <td><input type="text" name="precio" value="<?php echo $alm->__GET('precio'); ?>" style="width:100%;" required /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Espacio en Disco</th>
                            <td><input type="text" name="espacio" value="<?php echo $alm->__GET('espacio'); ?>" style="width:100%;" required/></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Transferencia Mensual</th>
                            <td><input type="text" name="transferencia" value="<?php echo $alm->__GET('transferencia'); ?>" style="width:100%;" required /></td>
                        </tr>

                        <tr>
                            <th style="text-align:left;">Sitios a hospedar</th>
                            <td><input type="text" name="sitio" value="<?php echo $alm->__GET('sitio'); ?>" style="width:100%;" required /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Reg. de Dominio Incluido</th>
                            <td><input type="text" name="registro" value="<?php echo $alm->__GET('registro'); ?>" style="width:100%;" required /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Cuentas de Correo</th>
                            <td><input type="text" name="cuentas" value="<?php echo $alm->__GET('cuentas'); ?>" style="width:100%;" required /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Bases de Datos</th>
                            <td><input type="text" name="bases" value="<?php echo $alm->__GET('bases'); ?>" style="width:100%;" required /></td>
                        </tr>

                        <tr>
                            <th style="text-align:left;">Subdominios</th>
                            <td><input type="text" name="subdominios" value="<?php echo $alm->__GET('subdominios'); ?>" style="width:100%;" required/></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Garantía de Disponibilidad</th>
                            <td><input type="text" name="garantia" value="<?php echo $alm->__GET('garantia'); ?>" style="width:100%;" required /></td>
                        </tr>

                        <tr>
                            <th style="text-align:left;">Panel de Control</th>
                            <td><input type="text" name="panel" value="<?php echo $alm->__GET('panel'); ?>" style="width:100%;" required /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Tecnologia</th>
                            <td><input type="text" name="tecnologia" value="<?php echo $alm->__GET('tecnologia'); ?>" style="width:100%;" required /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Soporte</th>
                            <td><input type="text" name="soporte" value="<?php echo $alm->__GET('soporte'); ?>" style="width:100%;" required /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Fecha de Vencimiento</th>
                            <td><input type="text" name="vencimiento" value="<?php echo $alm->__GET('vencimiento'); ?>" style="width:100%;" required /></td>
                        </tr>

                    <tr>
                        <th>Exportar</td>
                        <td colspan="5">
                            <a href="output.php?t=word" target="_blank">Word</a> |
                            <a href="output.php?t=excel" target="_blank">Excel</a> |
                            <a href="output.php?t=pdf" target="_blank">Pdf</a>
                        </td>                        
                    </tr>
                    
                </table>   
                <br>
                <br>  
                        <td colspan="2">
                                <button type="submit" class="pure-button pure-button-primary">Regresar</button>
                    
              
            </div>
        </div>

    </body>
</html>