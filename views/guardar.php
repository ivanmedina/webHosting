<?php
	//conectamos Con el servidor
	$conectar=@mysql_connect('localhost','user','password');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

		$base=mysql_select_db('webHosting');
		if(!$base){
			echo"No Se Encontro La Base De Datos";			
		}
	}
	//recuperar las variables
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$sugerencia=$_POST['sugerencias'];
	//hacemos la sentencia de sql
	$sql="INSERT INTO sugerencias VALUES('$nombre',
								   '$email',
								   '$sugerencia')";
	//ejecutamos la sentencia de sql
	$ejecutar=mysql_query($sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		
		echo "<script>";
		echo "alert('Hubo algun error')";
		echo "</script>";

	}else{
		echo "<script>";
		echo "alert('Datos Guardados Correctamente')";
		echo "</script>";
	}

	include ("index.php")
?>
