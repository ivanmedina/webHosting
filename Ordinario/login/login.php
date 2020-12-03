<?php
session_start();
include "conecta.php";
$correo = $_POST["iCorreo"];
$password = $_POST["iPassword"];
$recaptcha = $_POST["g-recaptcha-response"];

$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
    'secret' => '6LeX13oUAAAAALL7vBz-ArOppomhUXWmyM9RMhNR',
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

    $sql = "SELECT password FROM administrador WHERE correo = '$correo'";
    
    if ($result=mysqli_query($connection,$sql))
    {
      while ($row=mysqli_fetch_row($result))
        {
            $hashed_password= $row[0];
        }

      mysqli_free_result($result);
        if($password == $hashed_password) {
        $_SESSION['admin'] = $hashed_password;
          echo "<script type='text/javascript'>";
          echo "window.location.href='../../panel.php'";
          echo"</script>"; 

        }else{
          echo "<script type='text/javascript'>";
          echo "alert('Contraseña o Correo incorrectos, por favor vuelve a intentarlo')";
          echo"</script>"; 
          echo "<script type='text/javascript'>";
          echo "window.location.href='../../login.php'";
          echo"</script>";
        }
    }else{
        echo " no encontrado en DB";
        echo "<script type='text/javascript'>";
        echo "window.location.href='../../login.php'";
        echo "</script>";

    }

}else {
    echo "<script type='text/javascript'>";
    echo "alert('Por favor verifica que no eres un robot.')";
    echo"</script>"; 
    echo "<script type='text/javascript'>";
    echo "window.location.href='../login.php'";
    echo"</script>"; 
  }