<?php
  //este archivo decodifica la imagen para que sea posible verla nuevamente despues de codificarla

  $databaseName = 'daw_1020365';
  $databaseUsername = '1020365_user';
  $databasePassword = '1020365';

  $conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);

  if ($conn->connect_error)
  {
    die ("Conection Failed" . $conn->connect_error);
  }
  */
// Creamos conexion
$conn = new mysqli("localhost", "1020365_user", "1020365", "daw_1020365");
// Validamos la conexion
if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}

//verificamos si el id de la imagen es pasada del archivo IMG-extrae.php
if (isset($_GET['id'])){
$id=$_GET['id'];
//hacemos el query
$sql = "SELECT imagen FROM imagenes WHERE id=$id";
//echo $query;
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
{
$data=$row['imagen'];
//$type= $row['tipo'];
}
if ($type=="pjpeg") $type="jpeg";
Header ("Content-type:$type");
echo $data;
}
// Cerramos la conexion a la base de datos
$conn->close();
?>
