<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	   <meta content="text/html; charset=ANSI" http-equiv="Content-Type">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <script type="text/javascript" src="../bs-slider/js/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

	
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
		
    <center>
    
    <section id="SliderTest_Container" class="col-md-8">
        <div id="Carousel-AutosGTA" class="carousel slide" data-ride="carousel">
            <?php
                require_once("../bs-slider/DBAccess.php");
                $DBA = new DBAccess();
                $Datos = $DBA->GetData("SELECT * FROM noticias LIMIT 4");
                if ($Datos == FALSE) {
                    echo "Ha ocurrido un error en la conexión. Por favor revise su configuración o la consulta que ha enviado a DBAccess.php";
                } else {
                    $Rows = mysql_num_rows($Datos);
                    echo '<ol class="carousel-indicators">';
                    for ($i=0; $i<$Rows; $i++) {
                        if ($i == 0) {
                            echo '<li data-target="#Carousel-AutosGTA" data-slide-to="0" class="active"></li>';
                        } else {
                            echo '<li data-target="#Carousel-AutosGTA" data-slide-to="' . $i . '"></li>';
                        }
                    }


                    echo '</ol>';
                    echo '<div class="carousel-inner" role="listbox">';
                    for ($i=0; $i<$Rows; $i++) {
                        $noticia = mysql_fetch_array($Datos);
                        if ($i == 0) {
                            echo '<div class="item active">';
                        } else {
                            echo '<div class="item">';
                        }
                        echo '<a href="'. $noticia["link"] . '"><img style="width: 90%;" src="../bs-slider/img/' . $noticia["foto"] . '"/>';
                        echo '<div class="carousel-caption">';
                                
                                
                        echo '</div>';//Caption
                        echo '</div>';//ITEM
                    }//FOR
                    echo '</div>';
                }//ELSE
            ?>


            <!-- Controls -->
        
           
        </div>
    </section>
     </div>

   
<br>



	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <a href="Web_Hosting.view.php"><button type="button" class="btn btn-success btn-lg btn-block">INICIO</button></a>
</section>

    </picture>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

     <footer>
		<a id="mapa" href="mapa.view.php">
            <img src="../css/imagenes/maps.png" alt="">
		</a>


<form method="POST" action="guardar.php" accept-charset="utf.g">
    <font size="4px">
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