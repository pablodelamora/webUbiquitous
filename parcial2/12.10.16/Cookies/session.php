<?php
  session_start();

  //checamos is el usuario que ha logeado con un password válido
  if ($_SESSION['authuser'] != 1)
  {
    echo "No puedes acceder aqui";
    exit();
  }
?>

<!doctype html>
<html>
  <head>
    <title>Bienvenido al sistema de Coches;
    <?php echo $_REQUEST['nombre']; ?>
    </title>
  </head>

  <body>
    <?php
      echo "Bienvenido al sistema de Coches";
      echo $_COOKIE['username'];
      echo "! <br>";
      echo "Vista exclusiva de: ";
      echo $_REQUEST['nombre'];
      echo "<br>";
    ?>
  </body>
</html>
