<!doctype html>
<?php
//incluimos el archivo de configuración de la base de datos
include_once("config.php");

//obtenemos los datos en forma descendente
//$result = mysql_query("SELECT * FROM Vehiculos ORDERED BY id DESC");//mysql_query ya esta despredicado
$result = mysqli_query($mysqli, "SELECT * FROM Vehiculos ORDER BY id DESC"); //usemos mysqli_query
?>

<html>
  <head>
    <title>Inicio</title>
  </head>

  <body>
    <a href="inserta.html">Agregar nuevos veh&iacute;culos</a><br><br>

    <table>
      <tr bgcolor='#375734'>
        <td>Tag</td>
        <td>Placas</td>
        <td>Punto de entrada</td>
        <td>Tipo de auto</td>
        <td>Hora de ingreso</td>
        <td>Duracion del trayecto</td>
        <td>Punto de Salida</td>
        <td>Actualizar</td>
        <td>Operaci&oacute;n</td>
      </tr>

      <?php


      //echo("")


        while($res = mysqli_fetch_array($result))
        {
           echo "<tr>";
           echo "<td>" .$res['tag']."</td>";
           echo "<td>" .$res['placas']."</td>";
           echo "<td>" .$res['punto_entrada']."</td>";
           echo "<td>" .$res['tipo']."</td>";
           echo "<td>" .$res['hora_trayecto']."</td>";
           echo "<td>" .$res['duracion']."</td>";
           echo "<td>" .$res['punto_salida']."</td>";
           echo "<td><a href=\"editar.php?id=$res[id]\">Editar registros</a> |
                     <a href=\"borrar.php?id=$res[id]\" onClick=\"return confirm('Esta seguro de borrar este registro?')\">Borrar</a> | </td>";
           echo "<td><a href=\"cobrar.php?id=$res[id]\">Realizar cobro</a></t>";
      }
      ?>

    </table>
  </body>
</html>
