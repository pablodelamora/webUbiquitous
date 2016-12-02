<!doctype html>
 <html>
  <head>
    <title>Agrega registros</title>
  </head>

  <body>
   <?php

      include_once("config.php");

      if(isset($_GET['Submit'])) {
         $tag = $_GET['tag'];
         $placas = $_GET['placas'];
         $ingreso = $_GET['ingreso'];

      // validamos los campos vacios
      if(empty($tag) || empty($placas) || empty($ingreso)) {
          if(empty($tag)) {
              echo "<font color='red'>El campo tag est&aacute; vac&iacute;o.</font><br/>";
          }

          if(empty($placas)) {
              echo "<font color='red'>El campo placas est&aacute; vac&iacute;o.</font><br/>";
          }

          if(empty($ingreso)) {
              echo "<font color='red'>>El campo hora de ingreso est&aacute; vac&iacute;o.</font><br/>";
          }
          //enlace a la vista previa
          echo "<br/><a href='javascript:self.history.back();'>Regresar</a>";
      } else {
          // si todos los campos esta llenos (no vacios)
          // insertamos los datos a la base de datos
          $result = mysqli_query($mysqli, "UPDATE Vehiculos SET tag='$tag', placas='$placas',punto_entrada='punto_entrada' WHERE id?$id");

          header("Location:index.php");
         ----------
          // monstramos mensaje de exito
          echo "<font color='green'>Registro insertado exit&oacute;samente.";
          echo "<br/><a href='index.php'>Ver resultados</a>";
      }
  }
  ?>

  <?php
  $id=$_GET['id'];
  $result=mysqli_query($mysqli,'SELECT * FROM Vehiculos WHERE id=$id');
    while()
      $tag
      $placas
      $punto_acceso
  ?>

  </body>
</html>
