<?php

	if (isset($_POST["enviar"])) {
		$usuario=$_POST["nombre_usuario"];
		$contrasena=$_POST["contra"];

		if ($usuario=="Jhon" && $contrasena=="hola") {
			header('Location: inicio.php');
		}
		else{
			echo "Escriba contrasena correcta";
		}
	}


 ?>