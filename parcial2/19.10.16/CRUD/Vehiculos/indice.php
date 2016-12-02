<!doctype html>
<?php
//incluimos el archivo de configuración de la base de datos
include_once("config.php");

//obtenemos los datos en forma descendente
$result = mysqli_query($mysqli, "SELECT * FROM Vehiculos ORDERED BY id DESC"); //usemos mysqli_query

//cierre php
?>



<html>
  <head>
    <title>Inicio</title>
  </head>

  <body>
    <a href="inserta.html">Nuevos coches</a><br>br>

    <table>
      <tr bgcolor='#CCCCCC'>
        <td>Tag</td>
        <td>Placas</td>
        <td>Punto de entrada</td>
        <td>Hora der ingreso</td>
        <td>Actualizar</td>
      </tr>

      <?php

        while($res = mysqli_fetch_array($result))
        {
           echo "<tr>";
           echo "<td>" .$res['tag']."</td>";
           echo "<td>" .$res['placas']."</td>";
           echo "<td>" .$res['punto_entrada']."</td>";
           echo "<td>" .$res['hora_ingreso']."</td>";
        }
      ?>

    </table>

  </body>
</html>
