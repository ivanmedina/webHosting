<?php 

    require_once('usuario.entidad.php');
	require_once('usuario.model.php');
    $model=new UsuarioModel();
    $user=new Usuario();
    $user->__SET('nombre',$_POST['usuario']);
    $user->__SET('clave',$_POST['pas']);
    if($model->buscarUsuario($user->__GET('nombre'))){
        
        $model->Insertar($user);
        header('Location: login.php');

    }
    else{
        header('Location: error.php?mensaje=El nombre de usuario ya existe');
    }




?>