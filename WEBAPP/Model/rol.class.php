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
	function Consultar(){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="SELECT * FROM rol";

		$query=$pdo->prepare($sql);
		$query->execute();
		$result=$query->fetchALL(PDO::FETCH_BOTH);

		Conexion::Cerrarbd();
		return $result;
	}
	function Consultarporcodigo($codigo){
		$pdo = Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "SELECT * FROM rol WHERE rol_cod = ?";
		$query= $pdo->prepare($sql);
		$query->execute(array($codigo));

		$result = $query->fetch(PDO::FETCH_BOTH);
		Conexion::Cerrarbd();
		return $result;
	}
	function Modificar($codigo_rol, $nombre_rol)
	{
		$pdo = Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "UPDATE rol SET rol_nombre = ? WHERE rol_cod = ?";
		$query= $pdo->prepare($sql);
		$query->execute(array($nombre_rol, $codigo_rol));
		Conexion::Cerrarbd();
	}
	function Eliminar($codigo_rol)
	{
		$pdo = Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "DELETE  FROM rol Where rol_cod = ?";
		$query= $pdo->prepare($sql);
		$query->execute(array($codigo_rol));


		Conexion::Cerrarbd();
	}

}

?>