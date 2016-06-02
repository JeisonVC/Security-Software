<?php
require_once("../Model/conexion.php");
require_once("../Model/usuario.class.php");


$rol =Gestion_usuario::cargar_rol();


?>

<html>
<head>
<meta charset="utf-8">
	<title></title>
<link rel="stylesheet" type="text/css" href="Styles/estilos.css">
</head>
<body>
<div>
<form action="../Controller/registrousu.php" method="post">
<label>Rol que Desempeña</label>
<select name="selecion">
	<?php
foreach ($rol as $roles) {
	echo "<option value=".$roles["rol_cod"].">".$roles["rol_nombre"]."</option>";
}
	?>
</select>
<label>Codigo</label>
<input type="text" name="codigo"/>
<label>Documento</label>
<input type="text" name="documento"/>
<label>Nombre</label>
<input type="text" name="nombre"/>
<label>Apellido</label>
<input type="text" name="apellido"/>
<label>Email</label>
<input type="text" name="email"/>
<label>Telefono</label>
<input type="text" name="telefono"/>
<label>Nombre de Usuario</label>
<input type="text" name="nombredeusuario"/>
<label>Contraseña</label>
<input type="password" name="contraseña"/>
<button value="Guardar" name="action">Guardar</button>
<button a href="modificar.php" value="Modificar" name="action">Modificar</button>

</div>
</body>
</html>