<?php
require_once("../Model/conexion.php");
require_once("../Model/usuario.class.php");

$action=$_REQUEST["action"];
switch ($action) {
	case 'Guardar':
		$selecion=$_POST["selecion"];
		$codigo=$_POST["codigo"];
		$codigo_rol=$_POST["codigo_rol"];
		$documento=$_POST["documento"];
		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		$email=$_POST["email"];
		$telefono=$_POST["telefono"];
		$nombredeusuario=$_POST["nombredeusuario"];
		$contraseña=$_POST["contraseña"];
		
		try{
			Gestion_usuario::Guardar($selecion,$codigo,$codigo_rol,$documento,$nombre,$apellido,$email,$telefono,$nombredeusuario,$contraseña);
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