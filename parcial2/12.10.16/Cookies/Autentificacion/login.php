<?php
  session_start();
  $_SESSION['logged'] = 0;

  if (isset($_POST['submit'])) {
    if ($_POST['username'] == "raulms" &&
        $_POST['password'] == "654321") {
      $_SESSION['logged'] = 1;
    header ("Refresh: 5; URL=" . $_POST['redirect'] . "");
    echo "Redireccionando!<br>";
    echo "(Error navegador, " .
         "<a href=\"" . $_POST['redirect']. "\">da click aqu&iacute;</a>)";
  } else {
?>
<!doctype html>
 <html
  <head>
    <title>Sesiones en PHP</title>
  </head>
  <body>
  <p>
  Usuario y/o Password inv&aacute;lido<br><br>
  <form action="login.php" method="post">
    <input type="hidden" name="redirect"
      value="<?php echo $_POST['redirect']; ?>">
    Usuario: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" name="submit" value="Login">
  </form>
</p>
<?php
  }
} else {
?>
<!doctype html>
 <html>
   <head>
     <title>Mantener Sesiones en PHP</title>
   </head>
 <body>
 <p>
  Debes estar autentificado para ver esta p&aacute;gina<br><br>
<?php
  if (isset($_GET['redirect'])) {
    $redirect = $_GET['redirect'];
  } else {
    $redirect = "index.php";
  }
?>

  <form action="login.php" method="post">
    <input type="hidden" name="redirect"
      value="<?php echo $_GET['redirect']; ?>">
    Usuario: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" name="submit" value="Login">
  </form>
</p>
<?php
}
?>
</body>
</html>
