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
			echo "<a href='../Views/Regitro.rol.php'>Volver</a>";

		}catch(Exception $e){
			echo $e;
		}

		break;
	case 'Modificar':
		$codigo_rol=$_POST["txt_codrol"];
		$nombre_rol=$_POST["txt_nomrol"];
try{
			Gestion_rol::Modificar($codigo_rol, $nombre_rol);
			echo "Guardo con exito";
			//header("location:../views/consulta.rol.php");
		}catch(Exception $e){
			echo $e;
		}

		break;
	case 'Borrar':
           $rol_cod = $_GET["rol_cod"];


       		 try {
       		 	Gestion_rol::Eliminar($rol_cod);
       		 	echo "Eliminó con exito";
       		 } catch (Exception $e) {
       		 	echo $e;
       		 }
     		break;		
}
?>