<?php
  class inicio{

    function session(){
      session_start();
      	if (!isset($_SESSION["nombre"])) {
      		header("location: index.php");
      	}
      }
    function pagina(){
      if (isset($_GET["seccion"])) {
  			$pagin = $_GET["seccion"];
  		}else {
  			$pagin = "";
  		}

      switch ($pagin) {
        case 'producto':
          include("guardar_producto.php");
        break;
        case 'usuario':
          include("Registro.usuario.php");
        break;
        case 'cerrarsession':
          include("cerrarsession.php");
        break;
        default:
      break;
    }
  }
}
?>
