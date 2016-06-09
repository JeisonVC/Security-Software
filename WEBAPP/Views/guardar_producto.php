<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Guardar Producto</h1>
	<form action="../../Controller/producto.controller.php" method="POST">
		<label>Codigo del producto</label>
		<input type="text" name="txt_codpro"/></br>
		<label>Codigo del tipo de producto</label>
		<input type="text" name="txt_tipopro"/></br>
		<label>Codigo de marca</label>
		<input type="text" name="txt_marcapro"/></br>
		<label>Descripcion del producto</label>
		<input type="text" name="txt_descpro"/></br>
		<button name="accion" value="create">Guardar</button>
		<?php echo @$_REQUEST["$mensaje"];
		?>
	</form>

	<a href="guardar_tipoproducto.php">Guardar un tipo de producto</a>
	<a href="guardar_marca.php">Guardar una marca</a>

</body>
</html>