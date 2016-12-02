<!doctype html>
<html>
 <head>
  <title> Multiplication Table</title>
  <h1>Multiplication Table</h1>
 </head>
 <body>
  <?php
    $numero1 = $_REQUEST['numero1'];
    $numero2 = $_REQUEST['numero2'];

    for ($i = 0; $i <= 10; $i++)
    {
      if ($i == 0)
       print ("<p>  ");
      else
       print (" $i ");

      for ($j = ($numero1 - 1) ; $j <= $numero2;$j++)
      {
        if ($j == 0 && $i == 0)
         print(" $j ");
        else if ($j >= $numero1 && $i >= 1)
         print(" ". ($i * $j). " ");
      }
      print ("\n</p>");

    }
  ?>
 </body>
</html>
