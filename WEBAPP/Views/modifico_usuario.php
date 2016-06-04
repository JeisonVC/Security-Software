<?php
require_once("../Model/conexion.php");
require_once("../Model/usuario.class.php");


$rol =Gestion_usuario::consultarusuariocodigo($_GET["codigo_usuario"]);


?>

<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>Modificar usuario</h1>
	<form action="registrousu.php" method="POST">
		<label>Codigo</label>
	<input type="number" name="codigo" required/>
	<br>
	<br>
	<label>Documento</label>
	<input type="number" name="documento" required/>
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
	<input type="number" name="telefono"/>
	<br>
	<br>
	<label>Nombre de Usuario</label>
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
	

</form>

</div>
</body>
</html>