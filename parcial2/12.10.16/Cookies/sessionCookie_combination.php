<?php
  setcookie('userrnmae','raulms',time()+30);
  session_start();
  $_SESSION['authuser'] = 1;
?>

<html>
  <head>
    <title>sistema de ingresos</title>
  </head>

  <body>
  <?php
    $nombre = urlencode("Cynthia Wolf");
      echo "<a href='session.php?nombre=$nombre'>";
      echo "Da click aqu&iacute; para ver la informaci&oacute; de los veh&iacute;cujlos registrados en el sitema!";
      echo "</a>";
  ?>
  </body>

</html>
