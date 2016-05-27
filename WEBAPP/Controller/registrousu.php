<?php
require_once("../Model/conexion.php");
require_once("../Model/usuario.class.php");

$accion=$_REQUEST["action"];
switch ($accion) {
	case 'Guardar':
		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		$email=$_POST["email"];
		$telefono=$_POST["telefono"];
		$nombredeusuario=$_POST["nombredeusuario"];
		$contraseña=$_POST["contraseña"];
		$selecion=$_POST["selecion"];
		$codigo=$_POST["codigo"];
		$documento=$_POST["documento"];

		try{
			Gestion_usuario::Guardar($nombre,$apellido,$email,$telefono,$nombredeusuario,$contraseña,$selecion,$codigo,$documento);
			echo "Guardo con exito";

		}catch(Exception $e){
			echo $e;
		}

		break;
	
	default:
		# code...
		break;
}
?>