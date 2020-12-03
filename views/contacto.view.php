<?php 
	session_start();
?>

<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/estiloContacto.css">
	<title>The Web Hosting</title>
</head>
<body background="../css/imagenes/fondo.png">

<!--<body background="../css/imagenes/fondo.png">-->
<div class="container" style="margin-top: 60px;">
	<h1 style="text-align: center;">Ingrese sus datos de contacto</h1>
	
	<form action="contacto.view.php" method="post" enctype="text/plain">

		
	<div class="row">
		<div class="col-25">
			<label for="lnombre">NOMBRE COMPLETO</label>
			<label id="nombre"></label>
		</div>
		<div class="col-75">
			<input type="text" class="mayusculas" name="inombre" id="inombre" maxlength="13" size="20"  placeholder="Ingrese su NOMBRE COMPLETO" >
		</div>
	</div>
	
	<div class="row">
		<div class="col-25">
			<label for="lemail">EMAIL</label>
			<label id="email"></label>
		</div>
		<div class="col-75">
			<input type="email" class="mayusculas" name="iemail" id="iemail" maxlength="13" size="20"  placeholder="Ingrese su EMAIL" >
		</div>
	</div>
		
	<div class="row">
		<div class="col-25">
			<label for="ledad">EDAD</label>
			<label id="ledad"></label>
		</div>
		<div class="col-75">
			<input type="tel" class="mayusculas" name="iedad" id="iedad" maxlength="13" size="20"  placeholder="Ingrese su EDAD" >
		</div>
	</div>
	
	<div class="row">
		<div class="col-25">
			<label for="lcur">COMO NOS CONOCISTE?</label>
		</div>
		
		<div class="col-75">
			<select name="scurso" id="scurso" required oninvalid="this.setCustomValidity('Seleccione un curso')"oninput="setCustomValidity('')">
				<option value="0">Seleccione una opcion</option>
				<option value="1">A traves de un amigo</option>
				<option value="2">A traves de un buscador</option>
				<option value="3">Navegando por la red</option>
				<option value="4">Otros</option>
			</select>
		</div>
	</div>

	<div class="row">
		<div class="col-25">
			<label for="lcur">HORAS QUE NAVEGAS AL DIA?</label>
		</div>
		
		<div class="col-75">
			<select name="scurso" id="scurso" required oninvalid="this.setCustomValidity('Seleccione un curso')"oninput="setCustomValidity('')">
				<option value="0">Seleccione una opcion</option>
				<option value="1">2 horas al dia</option>
				<option value="2">4 horas al dia</option>
				<option value="3">Mas de 10 horas al dia</option>
			</select>
		</div>
	</div>

	<div class="row">
		<div class="col-25">
			<label for="lopinion">OPINIONES</label>
			<label id="lopinion"></label>
		</div>
		<div class="col-75">
			<textarea cols="40" rows="5" name="opinion">Escriba aquí su opinión...</textarea>
		</div>
	</div>

	<div class="row">
		<div class="col-25">
			<label for="lopinion">SUGERENCIAS</label>
			<label id="lopinion"></label>
		</div>
		<div class="col-75">
			<textarea cols="40" rows="5" name="opinion">Escriba aquí alguna sugerencia...</textarea>
		</div>
	</div>

	<div class="row2">
		<div class="boton">
			<div class="btn-group">
			<button type="button" class="btn btn-secondary btn-lg btn-block">ENVIAR</button><br>
			<a href="Web_Hosting.view.php"><button id="inicio" type="button" class="btn btn-secondary btn-lg btn-block" href="Web_Hosting.view.php">INICIO</button>
			</div>
		</div>
	</div>


	</form>
</div> <!-- CIERRE CONTAINER PRINCIPAL-->

<center>
	<a href="Web_Hosting.view.php">
	<link rel="stylesheet" href="Web_Hosting.view%20Archivos/bootstrap.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--BUTTON RETURN INICIO -->
	<!--<button id="regresar" type="submit" class="btn btn-light">RETURN</button>	-->
	</a>
</center> 
</body>
</html>