<?php
  //incluye el archivo de configuración de las bases de datos
  include_once("config.php");

  if(isset($_GET['Submit']))
  {
     $tag = $_GET['tag'];
     $placas = $_GET['placas'];
     $ingreso = $_GET['ingreso'];

     if(empty($tag) || empty($placas) || empty($ingreso))
     {
        if(empty($tag)){
          echo "Esta vacio.";
        }


        if(empty($placas)){
        }

        if(empty($ingreso)){
        }

        //enlace a la vista previa
        echo "<br><a href='javascript:self.history.back();'>Regresar</a>";
     }
     else
     {
        //si todos los campos estan llenos ( no vacios)
        //insertamos los datos a la base de datos
        $result = mysqli_query($mysqli, "INSERT INTO Vehiculos(tag,placas,punto_entrada) VALUES ('$tag','$placas','$ingreso')")

        //Te da el status de la insercion

        
        echo "<font color='green'>Registro insertado exitosamente.";
        echo "<br><a href='index.php'>Ver resultados</a>";
     }

  }
?>
