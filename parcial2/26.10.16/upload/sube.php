<!doctype html>
<html>
 <head>
  <title>Imagen Comentada</title>
 </head>
 <body>
 <?php
 //obtener datos introducidos desde el formulario
  $titulo = $_REQUEST['titulo'];
  $texto = $_REQUEST['texto'];
  $categoria = $_REQUEST['categoria'];
  $imagen = $_REQUEST['imagen'];

 //Validacion
  $errores = "";
  if (trim($titulo) == "")
    $errores = $errores . "<li><h3>Se requiere el titulo del comentario</h3></li>";
  if (trim($texto) == "")
    $errores = $errores . "<li><h3>Se requiere el texto del comentario</h3></li>";


  $copiarArchivo = false;

 //Copiar archivo en el directorio de archivos subidos
 //Se renombra para evitar que sobreescriba un archivo existente
 //Para garantizar la unicidad del nombre se añade una amrca de tiempo
  if (is_uploaded_file ($_FILES['imagen']['tmp_name']))
  {
    $nombreDirectorio = "imagenes/";
    $idUnico = time();
    $nombreArchivo = $idUnico . "-" . $_FILES['imagen']['name'];
    $copiarArchivo = true;
  }

 //No se ha introducido ningun archivo
  else if ($_FILES['imagen']['name'] == "")
   $nombreArchivo = '';
 //El archivo introduciodo no se ha podido subir
  else
  {
    $errores = $errores . "<li>No se ha podido subir el archivo\n</li>";
    $nombreArchivo = '';
  }
 //Mostrar errores encontrados
 if ($errores != "")
 {
   print ("No se ha podido realizar la insercion debido a los siguientes errores: ");
   print ("<ul>");
   print ("$errores");
   print ("</ul>");
   print ("[<a href='javascript:history.back()'>Volver</a>]");
 }
 //Mover el archivo de imagen a su ubicacion definitiva
 if ($copiarArchivo)
  move_uploaded_file ($_FILES['imagen']['tmp_name'],$nombreDirectorio . $nombreArchivo);

 //Mostrar datos introducidos
 print ("El comentario ha sido recibido correctamente");
 print ("<ul>");
 print ("<li>Titulo: $titulo\n</li>");
 print ("<li>Texto: $texto\n</li>");
 print ("<li>Categoria: $categoria\n</li>");
 print ("<li>Imagen: <a target='_blank' href='" . $nombreDirectorio . $nombreArchivo . "'>" . $nombreArchivo . "</a></li>");
 print ("</ul>");
 print ("<ul>");
 print ("[<a href='index.php'>Insertar otro comentario</a>]");
 print ("<br>");
 print ("<br>");
 print ("<img src=\"$nombreDirectorio$nombreArchivo\">");
 print ("<br>");
 ?>
 </body>
</html>
