<?php
session_start();
include_once 'config.php';
?>

<!doctype html>
<html>
  <head>
    <title></title>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
<body>

<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
     <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
	   <span class="sr-only">Men&uacute; de navegaci&oacute;n</span>
	   <span class="icon-bar"></span>
	   <span class="icon-bar"></span>
	   <span class="icon-bar"></span>
	</button>
     </div>
     <div class="collapse navbar-collapse" id="navbar1">
	<ul class="nav navbar-nav navbar-right">
	 <?php if (isset($_SESSION['usr_id'])) { ?>
		<li><p class="navbar-text">Conectado como: <?php echo $_SESSION['usr_name']; ?></p></li>
		<li><a href="logout.php">Salir</a></li>
		<?php } else { ?>
			<li><a href="login.php">Login</a></li>
			<li><a href="registrar.php">Registrar</a></li>
		<?php } ?>
	</ul>
     </div>
   </div>
</nav>

<script src="js/jquery-1.10.2.js"></script>
</body>
</html>
