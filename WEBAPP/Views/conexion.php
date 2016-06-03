<?php
  $db_host="localhost";
  $db_usuario="root";
  $db_contra="";
  $db_nombre="securitysoftware";

  $conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

  if (mysqli_connect_errno()) {
    echo "No se a podido conectar";
    exit();
  }

  mysqli_set_charset($conexion, "utf8");
?>
