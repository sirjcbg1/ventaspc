<?php
	$servidor = "localhost";
	$usuario = "root";
	$pass = "";
	$base_datos = "universidad";
	//Conexión al servidor de bases de datos
	$conexion = mysqli_connect($servidor,$usuario, $pass) ;
	//Se selecciona la base de datos
	mysqli_select_db($conexion,$base_datos);
	//Se cierra la conexión cuando terminemos
	//mysqli_close ( $descriptor) ; 
?>