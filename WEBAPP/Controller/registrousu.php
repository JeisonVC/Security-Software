<?php
require_once("../Model/conexion.php");
require_once("../Model/usuario.class.php");

$action=$_REQUEST["action"];
switch ($action) {
	case 'Guardar':
		$codigo=$_POST["codigo"];
		$codigo_rol=$_POST["codigo_rol"];
		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		$email=$_POST["email"];
		$telefono=$_POST["telefono"];
		$nombredeusuario=$_POST["nombredeusuario"];
		$contraseña=$_POST["contraseña"];
		//$selecion=$_POST["selecion"];
		
		$documento=$_POST["documento"];

		try{
			Gestion_usuario::Guardar($codigo,$codigo_rol,$nombre,$apellido,$email,$telefono,$nombredeusuario,$contraseña,$documento);
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