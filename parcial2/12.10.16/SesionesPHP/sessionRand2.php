i<?php
  session_start();
  $_SESSION['username'] = "raulms";
  $_SESSION['authuser'] = 1;
?>

<html>
  <head>
  <title></title>
  </head>

  <body>
  <?php
    $nombre = urlencode("Pablo dlm");
    echo"<a href='sessionRand3.php?nombre=$nombre'>";
    echo"CV Uploader!";
    echo "</a>";
  ?>
  </body>
</html>
