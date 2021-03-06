<?php

    session_start();
    if (isset($_SESSION['usuario'])) {
        if($_SESSION['usuario']!='admin')
        {
            header("Location: admin_login.php");
        }
    }else{
        header("Location: admin_login.php");
    }
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
	<link rel="stylesheet" href="./../css/estilos.css">	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="./../js/DataTables/jQuery-3.3.1/jquery-3.3.1.js"></script>
        <link rel="stylesheet" type="text/css" href="./../js/DataTables/datatables.css">
        <script type="text/javascript" src="./../js//DataTables/datatables.js"></script>

	<title>The Web Hosting</title>
</head>


<body background="./../css/imagenes/fondo.png">
    <div id= "titulo">
        <center><h1 style="margin:30px;">Bienvenido administrador</h1></center>
    </div>
    <center> <div id="datetime" >
        <h2 id="date" style="margin:0;">
        </h2>
        <h3 id="clock" style="margin:0;">
        </h3>
    </div></center>

    <div>
        <h4 style="margin-top:20px;"> <a href="./admin.php">Adminstrador</a> > <a href="./admin_servicios.php">Servicios</a> > Ver servicios</h4>
    </div>
    <center>
    
    <div id="serviciosAdmin" class="row">

        <div id="verServicios" class="col s12">
            <table id="table1">
                <thead>
                    <tr>
                        <th style="text-align:center;">Nombre</th>
                        <th style="text-align:center;">Precio</th>
                        <th style="text-align:center;">Espacio</th>
                        <th style="text-align:center;">Transferencia</th>
                        <th></th>
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
                            <td style="text-align:center;">
                                <a href="?action=editar&id=<?php echo $r->id; ?>" style="color:black">Editar</a>
                            </td>
                            <td style="text-align:center;">
                                <a href="?action=eliminar&id=<?php echo $r->id; ?>" style="color:black">Eliminar</a>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>   
        </div>
        <div id="nuevoServicio" class="col s12" style="margin-top:50px;">
            <form action="?action=<?php echo $alm->id > 0 ? 'actualizar' : 'registrar'; ?>" method="post" style="margin-bottom:50px;" >
                <input type="hidden" name="id" value="<?php echo $alm->__GET('id'); ?>" />        
                <table style="width:1280px;" >
                    <tr>
                        <th style="text-align:left;">Nombre</th>
                        <td><input class="browser-default"  type="text" name="nombre" value="<?php echo $alm->__GET('nombre'); ?>"  required /></td>
                        <th style="text-align:left;">Precio Mensual</th>
                        <td><input class="browser-default" type="text" name="precio" value="<?php echo $alm->__GET('precio'); ?>" required /></td>
                    </tr>
                    <tr>
                        <th style="text-align:left;">Espacio en Disco</th>
                        <td><input class="browser-default" type="text" name="espacio" value="<?php echo $alm->__GET('espacio'); ?>" style="width:100%;" required/></td>
                        <th style="text-align:left;">Transferencia Mensual</th>
                        <td><input class="browser-default" type="text" name="transferencia" value="<?php echo $alm->__GET('transferencia'); ?>" style="width:100%;" required /></td>
                    </tr>

                    <tr>
                        <th style="text-align:left;">Sitios a hospedar</th>
                        <td><input class="browser-default" type="text" name="sitio" value="<?php echo $alm->__GET('sitio'); ?>" style="width:100%;" required /></td>
                        <th style="text-align:left;">Reg. de Dominio Incluido</th>
                        <td><input class="browser-default" type="text" name="registro" value="<?php echo $alm->__GET('registro'); ?>" style="width:100%;" required /></td>
                    </tr>
                    <tr>
                        <th style="text-align:left;">Cuentas de Correo</th>
                        <td><input class="browser-default" type="text" name="cuentas" value="<?php echo $alm->__GET('cuentas'); ?>" style="width:100%;" required /></td>
                        <th style="text-align:left;">Bases de Datos</th>
                        <td><input class="browser-default" type="text" name="bases" value="<?php echo $alm->__GET('bases'); ?>" style="width:100%;" required /></td>
                    </tr>
                    <tr>
                        <th style="text-align:left;">Subdominios</th>
                        <td><input class="browser-default" type="text" name="subdominios" value="<?php echo $alm->__GET('subdominios'); ?>" style="width:100%;" required/></td>
                        <th style="text-align:left;">Garantía de Disponibilidad</th>
                        <td><input class="browser-default" type="text" name="garantia" value="<?php echo $alm->__GET('garantia'); ?>" style="width:100%;" required /></td>
                    </tr>
                    <tr>
                        <th style="text-align:left;">Panel de Control</th>
                        <td><input class="browser-default" type="text" name="panel" value="<?php echo $alm->__GET('panel'); ?>" style="width:100%;" required /></td>
                        <th style="text-align:left;">Tecnologia</th>
                        <td><input class="browser-default" type="text" name="tecnologia" value="<?php echo $alm->__GET('tecnologia'); ?>" style="width:100%;" required /></td>
                    </tr>
                    <tr>
                        <th style="text-align:left;">Soporte</th>
                        <td><input class="browser-default" type="text" name="soporte" value="<?php echo $alm->__GET('soporte'); ?>" style="width:100%;" required /></td>
                        <th style="text-align:left;">Fecha de Vencimiento</th>
                        <td><input class="browser-default" type="text" name="vencimiento" value="<?php echo $alm->__GET('vencimiento'); ?>" style="width:100%;" required /></td>
                    </tr>
                    <tr>
                        <td colspan="4"style="text-align:center;">
                            <button type="submit" style="text-align:center;" class="pure-button pure-button-primary">Guardar</button>  
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    </center>
</body>
<script>
    function startTime() {
    var today = new Date();
    var hr = today.getHours();
    var min = today.getMinutes();
    var sec = today.getSeconds();
    ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
    hr = (hr == 0) ? 12 : hr;
    hr = (hr > 12) ? hr - 12 : hr;
    //Add a zero in front of numbers<10
    hr = checkTime(hr);
    min = checkTime(min);
    sec = checkTime(sec);
    document.getElementById("clock").innerHTML = hr + ":" + min + ":" + sec + " " + ap;
    
    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    var curWeekDay = days[today.getDay()];
    var curDay = today.getDate();
    var curMonth = months[today.getMonth()];
    var curYear = today.getFullYear();
    var date = curWeekDay+", "+curDay+" "+curMonth+" "+curYear;
    document.getElementById("date").innerHTML = date;
    
    var time = setTimeout(function(){ startTime() }, 500);
}
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;}
startTime();


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
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</html>
