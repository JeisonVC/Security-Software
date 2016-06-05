<?php
require_once("../Model/conexion.php");
require_once("../Model/usuario.class.php");

$action=$_REQUEST["action"];
switch ($action) {
	case 'Guardar':
		$seleccion=$_POST["seleccion"];
		//$codigo=$_POST["codigo"];
		$documento=$_POST["documento"];
		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		$email=$_POST["email"];
		$telefono=$_POST["telefono"];
		$nombredeusuario=$_POST["nombredeusuario"];
		$contrasena=$_POST["contrasena"];
		//$codigo,
		try{
			Gestion_usuario::Guardar($seleccion,$documento,$nombre,$apellido,$email,$telefono,$nombredeusuario,$contrasena);
			echo "Guardo con exito";

		}catch(Exception $e){
			echo $e;
		}

		break;

		case 'Modificar':
		$seleccion=$_POST["seleccion"];
		$codigo=$_POST["codigo"];
		$documento=$_POST["documento"];
		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		$email=$_POST["email"];
		$telefono=$_POST["telefono"];
		$nombredeusuario=$_POST["nombredeusuario"];
		$contraseña=$_POST["contraseña"];
		
try{
			Gestion_usuario::Modificar($seleccion,$codigo,$documento,$nombre,$apellido,$email,$telefono,$nombredeusuario,$contraseña);
			echo "Modifico con exito";

		}catch(Exception $e){
			echo $e;
		}

		break;
}
?>