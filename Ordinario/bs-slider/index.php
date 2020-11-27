<!DOCTYPE HTML>
<html>
<head>
    <meta content="text/html; charset=ANSI" http-equiv="Content-Type">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/estilos.css">   

    
</head>

<body background="../css/imagenes/fondo.png">
<section id="contenedor">
<a id="ver" href="../bs-slider/index.php">

<picture>
  <source media="(min-width: 800px)" srcset="../css/imagenes/ver_mas.png">
  <img src="../css/imagenes/ver_mas.png" alt="Ejemplo">

<header>
<a href="../views/compañia.php">
            <img id="compañia" src="../css/imagenes/compañia.png">
        </a>
        <a href="../views/servicios.php">
            <img id="servicios" src="../css/imagenes/servicios.png">
        </a>
<a href="../views/soluciones.php">
            <img id="soluciones" src="../css/imagenes/soluciones.png">
        </a>
<a href="../views/cliente_p.php">
            <img id="clientes" src="../css/imagenes/clientes.png"> 
        </a>

        <a href="../views/contacto.view.php">
            <img id="contacto" src="../css/imagenes/contacto.png">
        </a>    
</header>
    </picture>

&nbsp&nbsp
    <center>
    <section id="SliderTest_Container" class="col-md-8">
        <div id="Carousel-AutosGTA" class="carousel slide" data-ride="carousel">
            <?php
                require_once("DBAccess.php");
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
                        echo '<a href="'. $noticia["link"] . '"><img style="width: 100%;" src="img/' . $noticia["foto"] . '"/>';
                        echo '<div class="carousel-caption">';
                                
                                
                        echo '</div>';//Caption
                        echo '</div>';//ITEM
                    }//FOR
                    echo '</div>';
                }//ELSE
            ?>


            <!-- Controls -->
            <a class="left carousel-control" href="#Carousel-AutosGTA" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#Carousel-AutosGTA" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
     </div>

   <hr/>
<br></center>
</a>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<CENTER>
<font size="5px"><a href="../views/Web_Hosting.view.php"style="color:BLACK"> INICIO </a>
</CENTER>
</body>
	
</html>
