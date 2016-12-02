<?php
  session_start();
?>

<html>
  <head>
    <title>Prueba 1</title>
  </head>
  <body>
  <?php
    $_SESSION['session_var'] = "prueba";
    echo "Esta es una prueba de sessiones.
           <form action='sessionRand.php' method='POST'>
             <input type='hidden'
                    name='var_forma'
                    value=0probando'>
             <input type='submit' value='Sigiente'>
           </form>";
  ?>
  </body>
</html>
