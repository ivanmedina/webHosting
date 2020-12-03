<?php 

    require_once('plan.entidad.php');
	require_once('plan.model.php');
    $modelo=new planModel();
    return $modelo->Listar();






?>