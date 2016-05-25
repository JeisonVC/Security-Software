<?php

	if (isset($_GET["navegador"])) {
		$pagina = $_GET["navegador"];
	}
	else {
		$pagina="";
	}
?>

	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="estilos.css">
	</head>
	<body>

		<?php
			#RECORDAR COMO LO PRIMERO QUE SE VE DE LA PAGINA ES EL LOGIN, ENTONCES SERA EL INDEX Y NO ESTA SESION.

			include ("condicion.php");

			#Login-index, Jhon T.
			include ("nav.php"); 			#Encabezado y menu, Andrea T.
			#Pagina de inicio, Jhon T.
			include ("producto.php");	#Registro de productos, Jeison V.
			include ("usuario.php") 	#Registro de usuarios, Andrea T.

			?>

	</body>
	</html>
