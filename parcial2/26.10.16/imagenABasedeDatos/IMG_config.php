<?php
  $databaseHost = 'localhost';
  $databaseName = 'daw_1020365';
  $databaseUsername = '1020365_user';
  $databasePassword = '1020365';

  $conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);
  //$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

  if ($conn->connect_error)
  {
    die("Conexion fallida" . $conn->connect_error);
  }

  //verificamos que el usuario haya seleccionado el archivo a subir
  if (isset($_FILES['image']) && $_FILES['image']['size'] > 0)
  {
    $tmpName = $_FILES['image']['tmp_name'];

    //vamos a leer el archivo en forma de stream
    $fp = fopen($tmpName, 'r');
    $datos = fread($fp, filesize($tmpName));
    $datos = addslashes($datos);
    fclose($fp);

    //hacemos el query
    $sql = "INSERT INTO imagenes (imagen) VALUES ('$datos')";
    $result = $conn->query($sql);

    //vamos a imprimir feedback
    print ($sql);
    print ("Se subio bien");
  }
  else
  {
    print ("Error.");
  }
  $conn->close();
?>
