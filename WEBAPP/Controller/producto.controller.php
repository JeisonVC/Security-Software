<?php
//producto.controller.php
require_once("../Model/conexion.php");
require_once("../Views/Components/producto.class.php");
	$accion = $_REQUEST["accion"];

	switch ($accion) {
		case 'create':
			$produ_cod=$_POST["txt_codpro"];
			$tipopro_cod=$_POST["txt_tipopro"];
			$marca_cod=$_POST["txt_marcapro"];
			$desc_pro=$_POST["txt_descpro"];
			try {
					Gestion_Producto::Guardar($produ_cod, $tipopro_cod, $marca_cod, $desc_pro);
					$mensaje = base64_encode("Su registro se creo correctamente");
				} 
				catch (Exception $e) {
					$mensaje = base64_encode("Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine());
				}
				// header("Location: ../View/Registrar_Usuario.php?m=".$mensaje."&tm=".$tipomensaje);
			break;
	}
?>