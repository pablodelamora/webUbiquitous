<?php
session_start();
   if (isset($_SESSION['logged']) && $_SESSION['logged'] == 1) {
    //No hagas nada
} else {
  $redirect = $_SERVER['PHP_SELF'];
  header("Refresh: 5; URL=login.php?redirect=$redirect");
  echo "Estas siendo redireccionado a la p&aacute;gina de Login!<br>";
  echo "(Si tu navegador no soporta esta opci&oacute;n," .
       "<a href=\"login.php?redirect=$redirect\">da click aqu&iacute;</a>)";
  die();
}
?>
