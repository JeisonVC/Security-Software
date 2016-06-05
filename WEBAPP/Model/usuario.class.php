<?php
class Gestion_usuario{
	//,$codigo
	function Guardar($seleccion,$documento,$nombre,$apellido,$email,$telefono,$nombredeusuario,$contrasena){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//usu_cod,
		$sql="INSERT INTO usuario(rol_cod, usu_nom, usu_ape, usu_email,usu_tel,usu_nick, usu_pass, usu_docu) values(?,?,?,?,?,?,?,?)";

		$query=$pdo->prepare($sql);
		//$codigo,
		$query->execute(array($seleccion,$nombre,$apellido,$email,$telefono,$nombredeusuario,$contrasena,$documento));

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
	function consultar_usuario(){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="SELECT * FROM usuario";

		$query=$pdo->prepare($sql);
		$query->execute();
		$result=$query->fetchALL(PDO::FETCH_BOTH);

		Conexion::Cerrarbd();
		return $result;

	}
		function consultarusuariocodigo($codigo){
		$pdo= Conexion::Abrirbd();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="SELECT * FROM usuario where usu_cod=?";

		$query=$pdo->prepare($sql);
		$query->execute(array($codigo));

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