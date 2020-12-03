<?php 
    session_start();
    unset($_SESSION['usuario']);
    session_destroy();
	header('Location: ./../views/index.php'); //envia a la página que simula la cuenta
	

	
?>
