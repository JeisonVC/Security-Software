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
<form action="../Controller/registrousu.php" method="post" onsubmit="return checkForm(this)">
<label>Rol que Desempeña</label>
<select name="seleccion">
	<?php
foreach ($rol as $roles) {
	echo "<option value=".$roles["rol_cod"].">".$roles["rol_nombre"]."</option>";
}
	?>
</select>
<br>
<br>
<!--<label>Codigo</label>
<input type="number" name="codigo" required/>
<br>
-->
<br>
<label>Documento</label>
<input title="Ingrese numero" pattern=".{10}" type="number" name="documento" required/>
<br>
<br>
<label>Nombre</label>
<input type="text" name="nombre" required/>
<br>
<br>
<label>Apellido</label>
<input type="text" name="apellido" required/>
<br>
<br>
<label>Email</label>
<input type="email" name="email" required/>
<br>
<br>
<label>Telefono</label>
<input type="number" name="telefono" placeholder="Opcional" />
<br>
<br>
<label>Nombre de usuario</label>
<input type="text" name="nombredeusuario" required/>
<br>
<br>
<label>Contraseña</label>
<input type="password" name="contrasena" required/>
<br>
<br>
<button value="Guardar" name="action">Guardar</button>
<br>
<a href="consulta.usuario.php">Consultar</a>
</div>
</body>
</html>