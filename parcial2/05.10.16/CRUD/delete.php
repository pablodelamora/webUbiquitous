<?php
// Creamos conexion
$conn = new mysqli("localhost", "1020365_user", "1020365", "daw_1020365");
// Validamos la conexion
if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}
// hacemos el query
$sql = "DELETE FROM usuarios WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Registro borrado exitosamente";
} else {
    echo "Error al intentar eliminar registro: " . $conn->error;
}

$conn->close();
?>
