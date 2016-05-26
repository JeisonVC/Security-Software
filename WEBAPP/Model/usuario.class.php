<?php
class Gestion_usuario{
	function Guardar($nombre,$apellido,$email,$telefono,$nombredeusuario,$contraseña,$selecion,$codigo,$documento){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="INSERT INTO usuario(usu_nom,usu_ape,usu_email,usu_tel,usu_nick,usu_pass,rol_cod,usu_cod,usu_doc) values(?,?,?,?,?,?,?,?,?)";

		$query=$pdo->prepare($sql);
		$query->execute(array($nombre,$apellido,$email,$telefono,$nombredeusuario,$contraseña,$selecion,$codigo,$documento));

		Conexion::Cerrarbd();

	}

}

?>