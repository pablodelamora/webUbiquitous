<?php
// Creamos conexion
$conn = new mysqli("localhost", "1020365_user", "1020365", "daw_1020365");
// Validamos la conexion
if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}
// hacemos el query
$sql = "SELECT id, tag, placas, FROM vehiculos2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // obtenemos los datos de cada fila
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Nombre: " . $row["nombre"]. " " . $row["apellidos"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
