<?php
  session_start('contador');
  //uso de SSI y constantes predefinidas https://secure.php.net/manual/en/session.constants.php
  //https://secure.php.net/manual/en/function.session-id.php
  echo '<a href="'.$_SERVER["PHP_SELF"].'?'.SID.'">Cont: '.++$_SESSION['contador'].'</a>';
?>
