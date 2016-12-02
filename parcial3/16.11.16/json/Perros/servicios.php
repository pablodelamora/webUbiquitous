<?php

if(isset($_GET['categoria'])) {

    // comparamos si es json o xml
     $format = strtolower($_GET['format']) == 'json' ? 'json' : 'xml'; //xml es el formato por defacto
     $estado_id = $_GET['estado']; //no por defacto
     $callback = $_GET['callback'];
// Conexion a la base de datos
     include_once('config.php');

/* obtenemos la informacion de la base de datos */
    $query = "SELECT categoria, nombre FROM Perros";
    $result = mysqli_query($link, $query) or die('Query incorrecto: ' . $query);

    //echo '<Usuarios>';
    //Creamos nuestro arreglo de registros
    $perros = array();
    if (mysqli_num_rows($result))
    {
      while($perro = mysqli_fetch_assoc($result))
      {
        //echo '<result>';
        $perros[] = array('perro'=>$perro);
      }
    }

/* Mostramos el formato seleccionado */
    if($format == 'json') {
         header('Content-type: application/json');
	       $jsonString = $callback."(";
         $jsonString .= json_encode(array('Perros'=> $perros));
         $jsonString .= ")";
         echo $jsonString;
    }
    else {
         header('Content-type: text/xml');
         echo '<Usuarios>';
         foreach($perros as $index => $perro)
         {
           if(is_array($perro))
           {
             foreach($perro as $key => $value)
             {
                 echo '<', $key, '>';
                 if (is_array($value))
                 {
                   foreach($value as $tag => $val)
                   {
                     echo '<', $tag, '>', htmlentities($val), '</', $tag, '>';
                   }
                 }
                 echo '</', $key, '>';
             }
           }
         }
         echo '</Perros>';
       }

//asasasasas
    @mysql_close($link);

?>
