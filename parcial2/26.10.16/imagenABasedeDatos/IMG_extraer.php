<?php

$conn = new mysqli("localhost", "1020365_user", "1020365", "daw_1020365");
// Validamos la conexion
if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}


$sql = "SELECT id FROM imagenes";
$result = $conn->query($sql);
while ($rows = $result->fetch_assoc()){
echo $rows['id'];
echo "<br><br>";
echo "<img src=\"IMG-mostrar-img.php?id=".$rows['id']."\">";
echo "<br><br>";
}


//cerrar conexion
$conn->close();
?>
