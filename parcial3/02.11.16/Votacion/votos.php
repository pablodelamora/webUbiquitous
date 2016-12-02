<!doctype html>
<html>
 <head>
  <title>Resultados Votacion</title>
 </head>

 <body>
  <?php
   print ("<table>\n");

   $porcentaje = round (($votos1/$totalVotos)*100, 2);
   print ("<tr><td>Si</td>");
   print ("<td>$votos1 ($porcentaje)</td>\n");
   print ("<td><img src='img/punto.gif' height='10' width='" . $porcentaje*4 . "'</td></tp>\n");
   

   $porcentaje = round (($votos2/$totalVotos)*100, 2);
   print ("<tr><td>No</td>");
   print ("<td>$votos2 ($porcentaje)</td>\n");
   print ("<td><img src='img/punto.gif' height='10' width='" . $porcentaje*4 . "'</td></tp>\n");

   print ("</table>\n");

   print ("<p>N&uacute;mero total de votos emitidos: $totalVotos</p>\n");

   print ("<p><a href='ejercicio2.php'>P&aacute;gina de votaci&oacute;n</a></p>");
  ?>
 </body>
</html>
