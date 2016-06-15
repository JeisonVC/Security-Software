<?php
  #Conexion de php con mysql a modo de procedimientos

  $name =$_POST["nombre"];
  $pass =$_POST["contrasena"];

  include ("conexion.php");

  $consulta = ("select usu_nick, usu_pass from usuario where usu_nick='".mysql_real_escape_string($name)."' and usu_pass='".mysql_real_escape_string($pass)."'");
  $resultado = mysqli_query($conexion, $consulta);

  $mostrar = mysqli_num_rows($resultado);

  if ($mostrar>0) {
    header("location: inicio.php");
  }
  elseif ($mostrar==0) {
    header("location: index.php");

  }
  
?>
