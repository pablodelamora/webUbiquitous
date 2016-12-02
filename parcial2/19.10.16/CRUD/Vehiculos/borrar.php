<?php
  //anexamos el archivo de configuración de la BD
  include("config.php");
  $id = $_GET['id'];
  $result = mysqli_query($mysqli, "DELETE FROM Vehiculos WHERE if=$id");

  //redireccionamos a la vista principal index.php
  header("Location:indice.php");
?>
