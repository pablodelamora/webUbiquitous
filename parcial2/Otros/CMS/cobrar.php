<!doctype html>
 <html>
  <head>
    <title>Cobro</title>
  </head>

<body>
 <?php
    include_once("config.php");
       $id = $_GET['id'];
       $result = mysqli_query($mysqli, "SELECT * FROM Vehiculos WHERE id=$id");
 ?>




//saca bobros
<?php
       $res = mysqli_fetch_array($result);
       $tipo = $res['tipo'];
       $p_entrada = $res['punto_entrada'];
       $p_salida = $res['punto_salida'];
       $distancia = $res['duracion'];
       echo "Cobros: <br>";
       echo "Tipo de vehiculo: " . $tipo . "<br>";
       echo "Entrada: " . $p_entrada . "<br>";
       echo "Salida " . $p_salida . "<br>";
       echo "Distancia: " . $distancia . "<br>";

       //tipos de vehiculos
       if ($tipo == 'MOTO' || $tipo == 'Moto' || $tipo == 'moto')
           echo "Costo por trayecto: $" . ($distancia *  5). "<br>";
       else if ($tipo == 'CAMION' || $tipo == 'Camion' || $tipo == 'camion')
           echo "Costo por trayecto: $" . ($distancia *  20). "<br>";
       else if ($tipo == 'Auto' || $tipo == 'AUTO' || $tipo == 'auto')
           echo "Costo por trayecto: $" . ($distancia *  10). "<br>";
       else if ($tipo == 'CAMIONETA' || $tipo == 'Camioneta' || $tipo == 'camioneta')
           echo "Costo por trayecto: $" . ($distancia *  15). "<br>";
       else
          echo "Costo por trayecto: $" . ($distancia *  8). "<br>";

       echo "<a href=\"borrar.php?id=$res[id]\" onClick=\"return confirm('Esta seguro de cobrar a este auto? (el registro se eliminara si el cobro es correcto)')\">Cobrar</a> | </td>";
        // monstramos mensaje de exito
        echo "<br/><a href='index.php'>Regresar</a>";
?>
</body>
</html>
