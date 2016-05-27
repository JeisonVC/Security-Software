<?php
class Gestion_rol{
	function Guardar($codigo_rol, $nombre_rol){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="INSERT INTO rol(rol_cod, rol_nombre) values(?,?)";

		$query=$pdo->prepare($sql);
		$query->execute(array($codigo_rol, $nombre_rol));

		Conexion::Cerrarbd();

	}

}

?>