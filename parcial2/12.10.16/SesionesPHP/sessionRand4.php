<?php
  $PHPSESSID = session_id();
  echo "<form action='sessionRand2.php' method='POST'>
  <input type='hidden' name='PHPSESSID'
  value='$PHPSESSID'>
  <input type='submit' value='Siguiente p&aacute;gina'>
  </form>";
?>
