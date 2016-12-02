<?php
  $databaseHost = 'localhost';
  $databaseName = 'daw_1020365';
  $databaseUsername = '1020365_user';
  $databasePassword = '1020365';

  //IMPORTANTE!!! Separar conexión normal y conexión a base de datos
  $link = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName) or die('No hay conexion');
 ?>
