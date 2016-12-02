<?php
$hostName="localhost";
$userName="1020365_user";
$password="1020365";
$dbName="daw_1020365";


// Hacemos la conexion a las base de datos
mysql_connect($hostName, $userName, $password) or die("Imposible conectarse al servidor: $hostName");

mysql_select_db($dbName) or die( "No puedo conectarme a la base de datos: $dbName");


///verificar archivo
if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
//almacenamos la imagen en directorio temporal
$tmpName = $_FILES ['image']['tmp_name'];
//
//lectura
$fp = fopen($tmpName, 'r');
$data = fread($fp, filesize($tmpName));
$data = addslashes($data);
fclose($fp);

//query
$query = "INSERT INTO imagenes (imagen) VALUES ('$data')";
$results = mysql_query($query);

//resultado
print $query;
print "gracias, su archivo ha sido almacenado en nuestro sistema.";
}
else{
print "No ha seleccionado o subido el archivo de imagen";
}


// cerrar conexion
mysql_close();


?>
