<?php
class Modificar{
	function Modificar($selecion,$codigo,$codigo_rol,$documento,$nombre,$apellido,$email,$telefono,$nombredeusuario,$contraseña){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="UPDATE  usuario(usu_cod,rol_cod,usu_nom,usu_ape,usu_email,usu_tel,usu_nick,usu_pass) values(?,?,?,?,?,?,?,?)";

		$query=$pdo->prepare($sql);
		$query->execute(array($selecion,$codigo,$codigo_rol,$documento,$nombre,$apellido,$email,$telefono,$nombredeusuario,$contraseña));

		Conexion::Cerrarbd();

	}

}

?>