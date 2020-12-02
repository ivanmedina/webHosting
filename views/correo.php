<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$sugerencia = $_POST['sugerencia'];

$contenido = "DATOS ENVIADOS" . '\nNombre' . $nombre . "\Correo" . $correo . "\Sugerencia" . $sugerencia;
mail('claudiasaldivar493@gmail.com',$correo,$sugerencia);
header("Location:Web_Hosting.view.php");
    