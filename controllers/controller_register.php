<?php 

    require_once('./../models/usuario.entidad.php');
	require_once('./../models/usuario.model.php');
    $model=new UsuarioModel();
    $user=new Usuario();
    $user->__SET('nombre',$_POST['usuario']);
    $user->__SET('clave',$_POST['pas']);
    if($model->buscarUsuario($user->__GET('nombre'))){
        
        $model->Insertar($user);
        header('Location: ./../views/login.php');

    }
    else{
        header('Location: ./../views/error.php?mensaje=El nombre de usuario ya existe');
    }




?>
