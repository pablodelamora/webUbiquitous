<?php

// vamos a generar la salida XML
header('Content-Type: text/xml');

// generamos el encabezado XML
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';

// creamos el elemento <response>
echo '<response>';

// recuperamos el nombre del usuario
$name = $_GET['name'];

// generamos la salida dependiendo del nombre recibido del cliente
$userNames = array('Pablo','Juan','Jose', 'Javier', 'Luis', 'Alejandro', 'Pedro');
$alumnos = array();


if (in_array(strtoupper($name), $userNames))
	echo 'Hola, maestro... ' . htmlentities($name) . '!';
else if (in_array(strtoupper($name), $alumnos))
	echo 'Hola, alumno... ' . htmlentities($name) . '!';
else if (trim($name) == '')
	echo 'Eres un extranio, por favor dime tu nombre!';
else
echo htmlentities($name) . ', No te conozco!';
// cerramos el elemento <response>
echo '</response>';
?>
