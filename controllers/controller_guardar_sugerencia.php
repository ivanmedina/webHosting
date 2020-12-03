<?php
	
	include_once "./../models/sugerencia.entidad.php";
	include_once "./../models/sugerencia.model.php";
	//recuperar las variables

	$sugerencia=new Sugerencia();
	$modelo=new sugerenciaModel();
	$sugerencia->__SET('nombre',$_POST['nombre']);	
	$sugerencia->__SET('email',$_POST['email']);
	$sugerencia->__SET('sugerencia',$_POST['sugerencia']);
	$modelo->Registrar($sugerencia);
	echo "<script>";
	echo "alert('Datos Guardados Correctamente')";
	echo "</script>";


	include ("./../views/index.php")
?>
