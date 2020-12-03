<?php 

    require_once('./../models/plan.entidad.php');
	require_once('./../models/plan.model.php');
    $modelo=new planModel();
    return $modelo->Listar();






?>
