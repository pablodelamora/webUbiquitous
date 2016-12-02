<?php
// Creamos conexion
$conn = new mysqli("localhost", "1020365_user", "1020365", "daw_1020365");
// Validamos la conexion
if ($conn->connect_error) {

    die("Conexion fallida: " . $conn->connect_error);
}

//verificar id
if (isset($_GET['id'])){
$id=$_GET['id'];

//query
$sql = "SELECT imagen FROM imagenes WHERE id=$id";


$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
{
$data=$row['imagen'];
}
if ($type=="pjpeg") $type="jpeg";
Header ("Content-type:$type");
echo $data;
}
// cerrar conexion
$conn->close();


?>
