<!doctype html>
 <html>
  <head>
    <title>Votar</title>
  </head>

<body>

 <?php
  //incluye el archivo de configuracion de las base de datos
  include_once("config.php");



  //incluir
    if(isset($_GET['Submit'])) {
       $votos1 = $_GET['votos1'];
       $votos2 = $_GET['votos2'];

    // validamos los campos vacios
    if(empty($votos1) && empty($votos2)) {
      echo "<font color='red'>Es necesario seleccionar una opcion.</font><br/>";

        //enlace a la vista previa
        echo "<br/><a href='javascript:self.history.back();'>Regresar</a>";
    } else {
        // si todos los campos esta llenos (no vacios)
        // insertamos los datos a la base de datos
        $result = mysqli_query($mysqli, "INSERT INTO Votos(tag,placas,punto_entrada,tipo,duracion,punto_salida) VALUES ('$tag','$placas','$p_entrada','$tipo','$duracion','$p_salida')");

        // monstramos mensaje de exito
        echo "<font color='green'>Registro insertado exit&oacute;samente.";
        echo "<br/><a href='index.php'>Ver resultados</a>";
    }
}
?>
</body>
</html>
