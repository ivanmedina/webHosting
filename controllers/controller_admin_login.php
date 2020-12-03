<?php
	session_start();
    if($_POST['usuario']=="admin" && $_POST['pswrd']=="abcd"){
        $_SESSION['usuario']=$_POST['usuario'];
        // echo "si";
        header('Location: ./../views/admin.php');
    }else{

        header('Location: ./../views/admin_login.php');
    }


?>