<?php
class Gestion_permiso{
	function Cargar_modulo(){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="SELECT * FROM modulo";

		$query=$pdo->prepare($sql);
		$query->execute();
		$result=$query->fetchALL(PDO::FETCH_BOTH);

		Conexion::Cerrarbd();
		return $result;
	}
	function Guardar($rol_cod, $modu_cod, $estado_permi, $modulo_permi){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="INSERT INTO permiso(rol_cod, modu_cod, estado_permi, modulo_permi) values(?,?,?,?)";

		$query=$pdo->prepare($sql);
		$query->execute(array($rol_cod, $modu_cod, $estado_permi, $modulo_permi));

		Conexion::Cerrarbd();

	}

	function Consultar_permiso(){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="SELECT * FROM permiso";

		$query=$pdo->prepare($sql);
		$query->execute();
		$result=$query->fetchALL(PDO::FETCH_BOTH);

		Conexion::Cerrarbd();
		return $result;

	}

}
?>