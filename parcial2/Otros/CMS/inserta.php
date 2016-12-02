<!doctype html>
 <html>
  <head>
    <title>Agrega registros</title>
  </head>

<body>
 <?php
  //incluye el archivo de configuracion de las base de datos
    include_once("config.php");



    if(isset($_GET['Submit'])) {
       $tag = $_GET['tag'];
       $placas = $_GET['placas'];
       $p_entrada = $_GET['punto_entrada'];
       $tipo = $_GET['tipo'];
       $duracion = $_GET['duracion'];
       $p_salida = $_GET['punto_salida'];

    // validamos los campos vacios
    if(empty($tag) || empty($placas) || empty($p_entrada) || empty($tipo) || empty($duracion) || empty($p_salida)  ) {
        if(empty($tag)) {
            echo "<font color='red'>Campo Vacio</font><br/>";
        }

        if(empty($placas)) {
            echo "<font color='red'>Campo Vacio</font><br/>";
        }

        if(empty($p_entrada)) {
            echo "<font color='red'>Campo Vacio.</font><br/>";
        }
        if(empty($tipo)) {
            echo "<font color='red'>Campo Vacio</font><br/>";
        }
        if(empty($duracion)) {
            echo "<font color='red'>Campo Vacio</font><br/>";
        }
        if(empty($p_salida)) {
            echo "<font color='red'>Campo Vacio</font><br/>";
        }
        //enlace a la vista previa
        echo "<br/><a href='javascript:self.history.back();'>Regresar</a>";
    } else {
        // si todos los campos esta llenos (no vacios)
        // insertamos los datos a la base de datos
        $result = mysqli_query($mysqli, "INSERT INTO Vehiculos(tag,placas,punto_entrada,tipo,duracion,punto_salida) VALUES ('$tag','$placas','$p_entrada','$tipo','$duracion','$p_salida')");

        // monstramos mensaje de exito
        echo "<font color='green'>Registro insertado exit&oacute;samente.";
        echo "<br/><a href='index.php'>Ver resultados</a>";
    }
}
?>
</body>
</html>
