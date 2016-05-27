<?php
require_once("../Model/conexion.php");
require_once("../Model/rol.class.php");

$action=$_REQUEST["action"];
switch ($action) {
	case 'Guardar':
		$codigo_rol=$_POST["txt_codrol"];
		$nombre_rol=$_POST["txt_nomrol"];
try{
			Gestion_rol::Guardar($codigo_rol, $nombre_rol);
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