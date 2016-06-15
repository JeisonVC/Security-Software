<?php
	require_once("../Model/conexion.php");
	require_once("../Model/usuario.class.php");
	$rol =Gestion_usuario::cargar_rol();
?>
  <script type="text/javascript">
     $(document).ready(function() {
    $('select').material_select();
  });
  </script>
<section id="losregistros">
	<div class="registros">
	<h5>Registro de Usuario</h5><hr>
	<form action="../Controller/registrousu.php" method="post">
		<label>Rol</label>
		<select name="seleccion">
		<?php
			foreach ($rol as $roles) {
			echo "<option value=".$roles["rol_cod"].">".$roles["rol_nombre"]."</option>";
		}
		?>
		</select>

		<br>

		<input title="Ingrese numero" pattern=".{10}" type="number" name="documento" placeholder="Escriba Documento!" required/><br>


		<input type="text" name="nombre" placeholder="Escriba Nombre!" required/>



		<input type="text" name="apellido" id="apellido" placeholder="Escriba Apellido!" required/>



		<input type="email" name="email" placeholder="Escriba Email!" required/>


		<input type="number" name="telefono" placeholder="Opcional" placeholder="Escriba Telefono!" />


		<input type="text" name="nombredeusuario" placeholder="Escriba Nombre Usuario!"required/>


		<input type="password" name="contrasena" required placeholder="Contraseña!"/><br><hr>

		<button class="waves-effect waves-light btn blue" value="Guardar" name="action">GUARDAR</button>
		<button class="waves-effect waves-light btn green" href="consulta.usuario.php">Consultar</button>

	</form>
	</div>

</section>
