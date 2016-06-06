<?php
require_once("../Model/conexion.php");
require_once("../Model/rol.class.php");
$codigo1 = Gestion_rol::Consultarporcodigo($_GET["codigo_rol"]);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Modificar rol</h1>
	<form action="../Controller/guardarrol.php" method="POST">
		<label>Codigo: <?php echo $codigo1["rol_cod"]; ?></label>
	<input type="hidden" name="txt_codrol" value=" <?php echo $codigo1["rol_cod"]; ?>"/>
	<br>
	<br>
	<label>Nombre</label>
	<input type="text" name="txt_nomrol" value=" <?php echo $codigo1["rol_nombre"]; ?>" required/>
	<button value="Modificar" name="action">Modificar</button>
	
	

</form>

</body>
</html>