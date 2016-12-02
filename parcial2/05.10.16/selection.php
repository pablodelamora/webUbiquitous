<!doctype html>
<?php
include_once('config.php');
$result= mysqli_query($$mysqli, "SELECT * FROM Coches Ordenados DESC";
?>


<html>
    <head>
      <title><Veh&iacute;culos del Segundo Piso/title>
    </head>

    <body>
      <a hred="inserta.html">Inserta</a>
      <table>
        <tr>
          <th>Tag<th>
          <th>...</th>
          <th>Operacion</th>
        </tr>
          <?php
            while($res=mysqli_fetch_array($result))
            {
              echo "<tr>"
              echo "<td>".$res['tag']."</td>";d
              echo ...
              echo "<td><a href=\"editar.php?id=$res['id']\">Editar</a> | <a href=\"borrar.php?id=$res['id']\">Borrar</a> | onClick=\"return confirm ('Seguro?')\">
       borrar</a></td>";
            }
          ?>
      </table>
    </body>
</html>
