<?php 
    session_start();
    $nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$sugerencia = $_POST['sugerencia'];

$contenido = "DATOS ENVIADOS" . '\nNombre' . $nombre . "\Correo" . $correo . "\Sugerencia" . $sugerencia;
mail('',$correo,$sugerencia);
header("Location:index.php");
    

?>


