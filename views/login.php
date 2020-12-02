<!DOCTYPE html>
<html>
<head>
<title>Inicio</title>
<!-- Agregamos rchivo css-->
<link rel="stylesheet" href="../css/estiloLogin.css">
<!-- Agregamos archivo js -->
<script src="../js/jsLogin.js"></script>
</head>

<body>
	
<div class="container">

<div class="main">

<h2>Acceso al Registro</h2>

<form id="inicio" method="post" name="inicio">

<label>Usuario :</label>
<input type="text" name="usuario" id="usuario">

<label>Contraseña :</label>
<input type="password" name="contraseña" id="contraseña">

<input type="button" value="Ingresar" id="submit" onclick="valida_usuario()"/>
<br>
<br>
<input type="reset" value="Limpiar">
  <script src='https://www.google.com/recaptcha/api.js'></script>
	
<div class="g-recaptcha" data-sitekey="6Lc7Z-0ZAAAAAPyNqaEd2iPsiuDCsbcI3d6fqbCx"></div>
</form>
<br>  <br>
<span><b class="nota">Nota: </b>Tienes solo 3 intentos para ingresar. <br/>
</div>
</div>
</body>
</html>
