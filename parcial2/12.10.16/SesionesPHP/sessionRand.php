<?php
  session_start();
?>

<html>
  <head>
    <title>Prueba</title>
  </head>
  <body>
  <?php
    echo "session_var = {$_SESSION['session_var']}<br>\n";
    echo "var_form={$_POST['var_forma']}<br>\n";
  ?>
  </body>
</html>
