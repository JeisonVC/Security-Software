<?php
class Gestion_usuario{
	function Guardar($selecion,$codigo,$documento,$nombre,$apellido,$email,$telefono,$nombredeusuario,$contrasena){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="INSERT INTO usuario(usu_cod,rol_cod, usu_nom, usu_ape, usu_email,usu_tel,usu_nick, usu_pass, usu_doc) values(?,?,?,?,?,?,?,?,?)";

		$query=$pdo->prepare($sql);
		$query->execute(array($codigo,$selecion,$nombre,$apellido,$email,$telefono,$nombredeusuario,$contrasena,$documento));

		Conexion::Cerrarbd();

	}

	function Modificar($selecion,$codigo,$documento,$nombre,$apellido,$email,$telefono,$nombredeusuario,$contraseña){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="UPDATE  usuario(rol_desempena,usu_cod, usu_nom, usu_ape, usu_email,usu_tel,usu_nick, usu_pass, usu_doc) values(?,?,?,?,?,?,?,?,?,?)";

		$query=$pdo->prepare($sql);
		$query->execute(array($selecion,$codigo,$codigo_rol,$documento,$nombre,$apellido,$email,$telefono,$nombredeusuario,$contraseña));

		Conexion::Cerrarbd();

	}

function cargar_rol(){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="SELECT * FROM rol";

		$query=$pdo->prepare($sql);
		$query->execute();
		$result=$query->fetchALL(PDO::FETCH_BOTH);

		Conexion::Cerrarbd();
		return $result;

	}



}

?>