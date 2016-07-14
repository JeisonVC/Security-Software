<?php
Class Gestion_modulo
{
	function Guardar($modu_cod, $modu_nom)
	{
		$pdo=Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="INSERT INTO modulo(modu_cod, modu_nom) values(?,?)";
		$query=$pdo->prepare($sql);
		$query->execute(array($modu_cod, $modu_nom));

		Conexion::Cerrarbd();
		return $result;
	}
	function Consulta()
	{
		$pdo = Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "SELECT * FROM modulo ORDER BY modu_nom";
		$query= $pdo->prepare($sql);
		$query->execute();

		$result = $query->fetchAll(PDO::FETCH_BOTH);
		Conexion::Cerrarbd();
		return $result;
	}
	//Cuando no de el modificar un solo campo a modificar, se puede hacer lo de la sentencia sql
	function Modificar($modu_cod, $modu_nom)
	{
		$pdo = Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "UPDATE modulo SET modu_nom = '".$modu_nom."' WHERE modu_cod = $modu_cod";
		$query= $pdo->prepare($sql);
		$query->execute();
		//, $modu_cod
		Conexion::Cerrarbd();
	}
	function Consultarporcodigo($codigo)
	{
		$pdo=Conexion::Abrirbd($codigo);
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$sql="SELECT * FROM modulo WHERE modu_cod= ?";
		$query=$pdo->prepare($sql);
		$query->execute(array($codigo));
		$result=$query->fetch(PDO::FETCH_BOTH);
		
		Conexion::Cerrarbd();
		
		return $result;
	}
}
?>