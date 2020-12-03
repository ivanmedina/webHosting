<?php

	include_once "./../administrador/sugerencia.entidad.php";
	include_once "./../administrador/sugerencia.model.php";
	$sugerencia=new Sugerencia();
	$model=new sugerenciaModel();
	$sugerencia->__SET('nombre',$_POST['nombre']);
	$sugerencia->__SET('email',$_POST['email']);
	$sugerencia->__SET('sugerencia',$_POST['sugerencia']);
	$model->Registrar($sugerencia);
	header('Location: ./Web_Hosting.view.php'); 

?>

