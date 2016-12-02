<!--NOTA: en /etc/php.ini debo cambiarle el tamaño de post_max_size = 8M a  post_max_size = 30M
    file_uploads = On
    max_file_uploads = 20

y ya despues, darle un service httpd restart
-->
<!doctype html>
<html>
 <head>
  <title></title>
 </head>

 <body>
  <form action="sube.php" method="post" enctype="multipart/form-data"> 
   <table>

    <tr>
     <td>Titulo</td>
     <td><input type="text" name="titulo" size="56" maxlength="50"></td>
    </tr>

    <tr valign="top">
     <td>Texto: </td>
     <td><textarea cols="50" rows="5" name="texto"></textarea></td>
    </tr>

    <tr>
     <td>Categoria: </td>
     <td>
      <select name="categoria">
       <option selected>php
       <option>cgi
       <option>c++
      </select>
     </td>
    </tr>

<!--Imagen asociada al comentario-->
    <tr>
     <td>Imagen: </td>
     <td><input type="hidden" name="max_file_size" value="1024000">
         <input type="file" size="44" name="imagen">
     </td>
    </tr>

<!--Botones de envio y borrado-->
    <tr>
     <td></td>
     <td><input type="submit" name="enviar" value="insertar comentario">
         <input type="reset" value="borrar forma">
     </td>
    </tr>

   </table>
  </form>
  <p class="font8pt">NOTA: los datos marcadosa con (*) deben ser rellenados obligatoriamente.</p>
 </body>

</html>
