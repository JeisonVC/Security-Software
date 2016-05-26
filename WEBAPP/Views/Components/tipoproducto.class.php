<?php
//tipoproducto.class.php
class Gestion_Tipoproducto{
	function Guardar($tipopro_cod, $tipopro_nombre, $tipopro_desc)
	{
		$pdo=Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql="INSERT INTO tipo_producto (tipopro_cod, tipopro_nombre, tipopro_desc) VALUES(?,?,?)";
		$query = $pdo->prepare($sql);
		$query->execute(array($tipopro_cod, $tipopro_nombre, $tipopro_desc));

		Conexion::Cerrarbd();
	}
}
?>