<?php
// Creamos conexion
$conn = new mysqli("localhost", "1020365_user", "1020365", "daw_1020365");


// Validar
if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}


// hacemos el query
$sql = "SELECT id, imagen FROM imagenes";
$result = $conn->query($sql);
while ($rows = $result->fetch_assoc()){
echo $rows['id'];
echo "<br><br>";
echo "<img src=\"IMG-muestra-imagen.php?id=".$rows['id']."\">";
echo "<br><br>";
}
// Cerramos la conexion a la base de datos
$conn->close();


?>
