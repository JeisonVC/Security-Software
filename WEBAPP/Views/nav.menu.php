<nav id="nav_menu">
  <div class="nav-wrapper blue-grey darken-4">
    <a href="inicio.php"><img src="imagenes/Logo.png" width="110" height="63" class="brand-logo" ></a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="inicio.php?seccion=producto" id="ini_men">Registro de producto</a></li>
      <li><a href="inicio.php?seccion=usuario" id="ini_men">Registro de Usuario</a></li>
      <li><a href="index.php?seccion=cerrarsesion.php" id="ini_men">Cerrar Sesion</a></li>
    </ul>
  </div>
</nav>

<?php
  switch ($pagina) {
    case 'producto':
      include("guardar_producto.php");
    break;
    case 'usuario':
      include("Registro.usuario.php");
    break;
    case 'cerrarsesion':
      include("index.php");
    break;
    default:
  break;
}
?>
