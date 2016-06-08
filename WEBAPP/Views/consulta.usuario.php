<?php
require_once("../Model/conexion.php");
require_once("../Model/usuario.class.php");


$usuario =Gestion_usuario::consultar_usuario();


?>


<html>
<head>
	<title>Consultar Usuario</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"/>
	<script type="text/javascript" src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
   		 $('#myTable').DataTable();
	});
	</script>
</head>
<body>
<table id="myTable">
	<thead>
		<tr>
			<td>Documento</td>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Telefono</td>
			<td>Correo Electronico</td>
			<td>Accion</td>
			
			</tr>
	</thead>
	<tbody>
		<?php
			foreach ($usuario as $consulta) {
				echo "<tr>
							<td>".$consulta["usu_doc"]."</td>
							<td>".$consulta["usu_nom"]."</td>
							<td>".$consulta["usu_ape"]."</td>
							<td>".$consulta["usu_tel"]."</td>
							<td>".$consulta["usu_email"]."</td>
							<td>
								<a href='modifico_usuario.php?codigo_usuario=".$consulta["usu_cod"]."'>modificar</a>
							</td>
					</tr>";
			}
		?>
	</tbody>
</table>
</body>
</html>