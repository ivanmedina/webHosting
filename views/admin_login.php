<?php
	session_start();
	unset($_SESSION['usuario']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!-- ESTILOS -->
    <link rel="stylesheet" href="./../css/estilolog.css">
    <!-- Agregamos archivo js -->    
</head>

<body>
    <div class="login">
      <div>
        <h1>Login</h1>
        <form id="inicio" name="inicio" method="post" action="./../controllers/controller_admin_login.php">
          <input type="text" name="usuario" placeholder="Username" required="required" id="user"/>
          <input type="password" name="pswrd" placeholder="Password" required="required" id="pswrd"  />
          <input type="submit" class="btn btn-primary btn-block btn-large" value="Ingresar"/>
        </form>
        <script src='https://www.google.com/recaptcha/api.js'></script><br>
        <div class="g-recaptcha" data-sitekey="6LeX13oUAAAAAN5HPNpWwuv9oRysDSoVvYxSw-LM"></div>
        <p>Nota: Tienes 3 intentos para ingresar.</p>
      </div>
    </div>
    
</body>
</html>
