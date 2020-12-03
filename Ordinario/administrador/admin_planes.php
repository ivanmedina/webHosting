<?php
// require_once './../administrador/oferta.entidad.php';
// require_once './../administrador/oferta.model.php';

// Logica
// $alm = new Oferta();
// $model = new OfertaModel();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../css/estilos.css">	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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

<body background="../css/imagenes/fondo.png">
    
    <div >
        <h1 style="margin:0;">Bienvenido administrador</h1>
    </div>
    <div id="datetime">
        <h2 id="date" style="margin:0;">
        </h2>
        <h3 id="clock" style="margin:0;">
        </h3>
    </div>
    <div >
        <h4 style="margin-top:20px;"> <a href="./index.php">Adminstrador</a> > <a href="./admin_planes.php">Planes</a> > Nuevo servicio</h4>
    </div>
    <div id="opciones" style="margin-top:50px;">
        <div class="row">
            <div class="col s6">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text row">
                        <div class="col s8">
                            <a href="./ver_planes.php">
                                <h3>
                                    Ver planes
                                </h3>
                            </a>
                        </div>
                        <div class="col s4">
                            <i class="large material-icons" style="height:100%;width:100%;">local_library</i>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col s6">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text row">
                    <div class="col s8">
                            <a href="./dashboards.php">
                                <h3>
                                    Ver dashboards
                                </h3>
                            </a>
                        </div>
                        <div class="col s4">
                            <i class="large material-icons" style="height:100%;width:100%;">equalizer</i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col s6">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text row">
                    <div class="col s8">
                            <a href="./index.php">
                                <h3>
                                    Salir
                                </h3>
                            </a>
                        </div>
                        <div class="col s4">
                            <i class="large material-icons" style="height:100%;width:100%;">exit_to_app</i>
                        </div>
                    </div>
                </div>
            </div>

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
    return i;
}
startTime();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</html>