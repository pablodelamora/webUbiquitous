<?php
  session_start();

  //verificacion de usuario
   if ($_SESSION['authuser'] != 1) {
      echo "No tienes acceso aqui";
      exit();
   }
?>

<html>
<head>
<title>CV de -
<?php echo $_REQUEST['nombre']; ?></title>
</head>
<body>
<?php
echo "Bienvenido, ";
echo $_SESSION['username'];
echo "! <br>";
echo "CV de: ";
echo $_REQUEST['nombre'];
echo "<br>";
$grado = "MBA";
echo "El grado de este usuario es de: ";
echo $grado;
?>
</body>
</html>
