<?php 
    require_once('./../models/usuario.entidad.php');
	require_once('./../models/usuario.model.php');

	//inicio de sesion
	session_start();

	$model=new UsuarioModel();
	$user=new Usuario();

	$user->__SET('nombre',$_POST['usuario']);
	$user->__SET('clave',$_POST['pas']);
	// print_r($user->__GET('nombre'));
	

    if(!$model->buscarUsuario($user->__GET('nombre'))){
        
		$validate=$model->obtenerUsuario($user->__GET('nombre'));	
		if($validate->clave==$user->clave){
			$_SESSION['usuario']=$usuario; //si el usuario se encuentra, crea la sesión de usuario
			header('Location: ./../views/cuenta.php'); //envia a la página que simula la cuenta
		}
		else{
			header('Location: ./../views/error.php?mensaje=Tus nombre de usuario o clave son incorrectos'); // cuando los datos son incorrectos envia a la página de error
		}
			
	}else{
			header('Location: ./../views/error.php?mensaje=Tus nombre de usuario o clave son incorrectos'); // cuando los datos son incorrectos envia a la página de error
    }
	

	
?>
