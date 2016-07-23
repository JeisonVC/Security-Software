<?php
class login{
  public static function valida($name,$pass){
    $contador=0;
      try {
          $pdo=Conexion::Abrirbd();

          $verificar="SELECT usu_nick,usu_pass FROM usuario WHERE usu_nick=?";

          $mostrar=$pdo->prepare($verificar);

          $mostrar->execute(array($name));

          while($dato=$mostrar->fetch(PDO::FETCH_ASSOC)){
            if (password_verify($pass,$dato["usu_pass"])) {
              $contador++;
            }
          }
        if ($contador>0) {
          session_start();
          $_SESSION["nombre"]=$_POST["nombre"];
          header("location: inicio.php");
        }
        else {
          echo "Error en los datos";
        }
        Conexion::Cerrarbd();
      }
    catch (Exception $e) {
      echo "Error: " . $e->getMessage() . " en la linea" . $e->getLine() . "<br>";
      echo "El codigo del error es: " . $e->getCode();
    }
  }
}
?>
