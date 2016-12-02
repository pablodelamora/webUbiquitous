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
        $result = mysqli_query($mysqli, "INSERT INTO Vehiculos(tag,placas,punto_entrada) VALUES ('$tag','$placas','$ingreso')");
        
        // monstramos mensaje de exito
        echo "<font color='green'>Registro insertado exit&oacute;samente.";
        echo "<br/><a href='index.php'>Ver resultados</a>";
    }
}
?>
</body>
</html>

