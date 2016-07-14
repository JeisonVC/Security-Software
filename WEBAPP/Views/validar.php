<?php
require_once("../Model/conexion.php");
require_once("validar.class.php");




    if (isset($_POST["sesion_vigilante"])) {
      $name=htmlentities(addslashes($_POST["nombre"]));
      $pass=htmlentities(addslashes($_POST["contrasena"]));

        try {
              login::valida($name,$pass);


          }

        catch (Exception $e) {
            echo $e->getMessage();
              if ($e->getCode()== "42S02") {
                echo "Error al nombrar tabla de la consulta";
              }
          }
        }



?>
