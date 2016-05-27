<?php
class Gestion_usuario{
	function Guardar($codigo,$codigo_rol,$nombre,$apellido,$email,$telefono,$nombredeusuario,$contraseña,$documento){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="INSERT INTO usuario(usu_cod, rol_cod, usu_nom, usu_ape, usu_email,usu_tel,usu_nick, usu_pass, usu_doc) values(?,?,?,?,?,?,?,?,?)";

		$query=$pdo->prepare($sql);
		$query->execute(array($codigo,$codigo_rol,$nombre,$apellido,$email,$telefono,$nombredeusuario,$contraseña,$documento));

		Conexion::Cerrarbd();

	}

}

?>