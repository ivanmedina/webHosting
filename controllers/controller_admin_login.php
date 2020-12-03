<?php
	session_start();
	
	$recaptcha = $_POST["g-recaptcha-response"];

    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
        'secret' => '6Lc7Z-0ZAAAAAIsPg6ybN4N6Eeip4CIFpn6hbTR1',
        'response' => $recaptcha
    );
    $options = array(
        'http' => array (
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    );

    $context  = stream_context_create($options);
    $verify = file_get_contents($url, false, $context);
    $captcha_success = json_decode($verify);

    if ($captcha_success->success) {
        if($_POST['usuario']=="admin" && $_POST['pswrd']=="abcd"){
            $_SESSION['usuario']=$_POST['usuario'];
            // echo "si";
            header('Location: ./../views/admin.php');
        }else{
    
            header('Location: ./../views/admin_login.php');
        }
    }else{
        echo "<script>alert('Verifica que no eres un robot')</script>";
    }
	


?>
