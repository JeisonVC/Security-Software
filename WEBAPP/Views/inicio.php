<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inicio</title>
		<link rel="shortcut icon" href="imagenes/logo.png">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="styles/estilos.css" charset="utf-8">
	</head>
	<body>
		<?php
			if (isset($_GET["seccion"])) {
				$pagina = $_GET["seccion"];
			}else {
			  $pagina = "";
			}
   ?>

		<?php
			include ("nav.menu.php");
			include ("section.menu.php");
		 ?>

		 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 	 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
	</body>
</html>
