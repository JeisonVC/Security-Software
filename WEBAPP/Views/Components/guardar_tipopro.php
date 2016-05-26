<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Guardar Tipo de producto</h1>
	<form action="../../Controller/tipoproducto.controller.php" method="POST">
		<label>Codigo de tipo del producto</label>
		<input type="text" name="txt_tipopro"/></br>
		<label>Nombre de tipo del producto</label>
		<input type="text" name="txt_nombretipopro" placeholder="Tecnologia, Herramientas, etc" /></br>
		<label>Descripcion de tipo del producto</label>
		<input type="text" name="txt_desctipopro"/></br>
		<button name="accion" value="create">Guardar</button>
		<?php echo @$_REQUEST["$mensaje"];
		?>
	</form>

</body>
</html>