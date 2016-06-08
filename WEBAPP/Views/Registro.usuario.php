<?php
	require_once("../Model/conexion.php");
	require_once("../Model/usuario.class.php");
	$rol =Gestion_usuario::cargar_rol();
?>

<form action="../Controller/registrousu.php" method="post">
	<label>Rol que Desempeña</label>
	<select name="seleccion">
		<?php
		foreach ($rol as $roles) {
		echo "<option value=".$roles["rol_cod"].">".$roles["rol_nombre"]."</option>";
	}
	?>
	</select>

<br>

	<label>Documento</label>
	<input title="Ingrese numero" pattern=".{10}" type="number" name="documento" required/>
<br>

	<label>Nombre</label>
	<input type="text" name="nombre" required/>
<br>

	<label>Apellido</label>
	<input type="text" name="apellido" required/>
<br>
	<label>Email</label>
	<input type="email" name="email" required/>
<br>

	<label>Telefono</label>
	<input type="number" name="telefono" placeholder="Opcional" />
<br>

	<label>Nombre de usuario</label>
	<input type="text" name="nombredeusuario" required/>
<br>

	<label>Contraseña</label>
	<input type="password" name="contrasena" required/>
<br>

	<button value="Guardar" name="action">Guardar</button>
<br>
	<button><a href="consulta.usuario.php">Consultar</a></button>
