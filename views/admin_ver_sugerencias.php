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


require_once './../models/sugerencia.entidad.php';
require_once './../models/sugerencia.model.php';


// Logica
$alm = new Sugerencia();
$model = new sugerenciaModel();

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

<body background="./../css/imagenes/fondo.png">
    <div >
        <h1 style="margin:0;">Bienvenido administrador</h1>
    </div>

    <div id="datetime">
        <h2 id="date" style="margin:0;">
        </h2>
        <h3 id="clock" style="margin:0;">
        </h3>
    </div>

    <div>
        <h4 style="margin-top:20px;"> <a href="./admin.php">Adminstrador</a> > Sugerencias</a> </h4>
    </div>
    <div id="serviciosAdmin" class="row">

        <div id="verServicios" class="col s12">
            <table id="table1">
                <thead>
                    <tr>
                        <th style="text-align:left;">id</th>
                        <th style="text-align:left;">Nombre</th>
                        <th style="text-align:left;">E-mail</th>
                        <th style="text-align:left;">Sugerencia</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('id'); ?></td>
                            <td><?php echo $r->__GET('nombre'); ?></td>
                            <td><?php echo $r->__GET('email'); ?></td>
                            <td><?php echo $r->__GET('sugerencia'); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>   
        </div>

    </div>
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
