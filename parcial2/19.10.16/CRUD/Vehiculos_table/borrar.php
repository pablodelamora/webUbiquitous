<?php
  //anexamos el archivo de configuración de la BD
  include("config.php");


  //pbtenemos el id de la url
  $id = $_GET['id'];


  //borramos la fila de la tabla
  $result = mysqli_query($mysqli, "DELETE FROM Vehiculos WHERE if=$id");


  //redireccionamos a la vista principal index.php
  header("Location:index.php");
?>
