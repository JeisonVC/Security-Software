<?php
require_once("../Model/conexion.php");
require_once("validar.class.php");




    if (isset($_POST["sesion_vigilante"])) {
    #  $name=htmlentities(addslashes($_POST["nombre"]));
    #  $pass=htmlentities(addslashes($_POST["contrasena"]));
        $name=$_POST["nombre"];
        $pass=$_POST["contrasena"];
        $pass = str_replace("select","123456789",$pass);#buscar bien sobre str


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
