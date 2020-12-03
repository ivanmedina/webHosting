<?php 

    require_once('plan.entidad.php');
    require_once('plan.model.php');
    header('Content-Type: application/json; charset=utf-8');

    $modelo=new planModel();


    function jsonEncodeArray( $array ){
		array_walk_recursive( $array, function(&$item) { 
		   $item = utf8_encode( $item ); 
		});
		return json_encode( $array );
     }

    echo jsonEncodeArray($modelo->ListarTipoPlanes());






?>