<?php
  setcookie("ejemplo_usuario", $_GET['nombre'], time()+3600,"/","")
?>
<!doctype html>
<html>
  <head>
    <title>Ejemplo del uso de cookies</title>
  </head>

  <body>
    <h1>Ejemplo del uso de cookies</h1>
    Se usa una cookie con el nombre <b>ejemplo_usuario</b>
     y con valor:<b>
    <?php
      echo $_GET['nombre'];
    ?></b>
  </body>
</html>
