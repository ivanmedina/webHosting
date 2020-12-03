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

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="./../ss/estilos.css">	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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

    <div id="opciones" style="margin-top:50px;">
        <div class="row">
            <div class="col s6">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text row">
                        <div class="col s8">
                            <a href="./admin_servicios.php">
                                <h3>
                                    Servicios
                                </h3>
                            </a>
                        </div>
                        <div class="col s4">
                            <i class="large material-icons" style="height:100%;width:100%;">room_service</i>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col s6">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text row">
                    <div class="col s8">
                            <a href="./admin_planes.php">
                                <h3>
                                    Planes
                                </h3>
                            </a>
                        </div>
                        <div class="col s4">
                            <i class="large material-icons" style="height:100%;width:100%;">library_books</i>
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
                            <a href="./admin_ver_sugerencias.php">
                                <h3>
                                    Sugerencias
                                </h3>
                            </a>
                        </div>
                        <div class="col s4">
                            <i class="large material-icons" style="height:100%;width:100%;">question_answer</i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s6">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text row">
                    <div class="col s8">
                            <a href="./../controllers/controller_logout.php">
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
