<?php
session_start();

include_once 'config.php';

// establecemos la bandera de validacion a FALSE
$error = false;



//VSDs
//Valiadicon
if (isset($_POST['registrar'])) {
  $name = mysqli_real_escape_string($mysqli, $_POST['name']);
  $email = mysqli_real_escape_string($mysqli, $_POST['email']);
  $password = mysqli_real_escape_string($mysqli, $_POST['password']);
  $password2 = mysqli_real_escape_string($mysqli, $_POST['password2']);

  // los nombre solo pueden contener caracteres del alfabeto y espacio
  if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
        $error = true;
	$name_error = "El nombre solo puede contener caracteres del alfabeto y espacios en blanco";
  }
  if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
	$error = true;
	$email_error = "Por favor introduzca un email v&aacute;lido";
  }
  if(strlen($password) < 6) {
	$error = true;
	$password_error = "El password debe contener m&iacute;nimo 6 caracteres";
  }
  if($password != $password2) {
	$error = true;
	$password2_error = "El password y la confirmaci&oacute;n no coinciden";
	}
  if (!$error) {
	if(mysqli_query($mysqli, "INSERT INTO Usuarios (name,email,password) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "')")) {
          $exito = "Registro exitoso! <a href='login.php'>Haga click aqu&iacute; para acceder</a>";
	} else {
	  $msgerror = "Error al registrar usuario, por favor intente de nuevo! $name $email $password";
	}
  }
}
?>

<!-- inicio de registro -->
<!doctype html>
 <html>
  <head>
    <title>Registro de usuarios</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
<body>

<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
  <!-- Inicio de encabezado -->
     <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
	   <span class="sr-only">Men&uacute; de navegaci&oacute;n</span>
	   <span class="icon-bar"></span>
	   <span class="icon-bar"></span>
	   <span class="icon-bar"></span>
	</button>
     </div>
    <!-- Elementos del menu -->
     <div class="collapse navbar-collapse" id="navbar1">
	<ul class="nav navbar-nav navbar-right">
	   <li><a href="login.php">Login</a></li>
	   <li class="active"><a href="registrar.php">Registrar</a></li>
	</ul>
     </div>
  </div>
</nav>

<div class="container">
  <div class="row">
     <div class="col-md-4 col-md-offset-4 well">
	<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="formaregistrar">
	  <fieldset>
	      <legend>Sign Up</legend>
	        <div class="form-group">
		  <label for="name">Name</label>
		  <input type="text" name="name" placeholder="Nombre completo" required value="<?php if($error) echo $name; ?>" class="form-control" />
		  <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
		</div>

		<div class="form-group">
		  <label for="name">Email</label>
		  <input type="text" name="email" placeholder="Email" required value="<?php if($error) echo $email; ?>" class="form-control" />
		  <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
		</div>

		<div class="form-group">
		  <label for="name">Password</label>
		  <input type="password" name="password" placeholder="Password" required class="form-control" />
		  <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
		</div>

		<div class="form-group">
		  <label for="name">Confirme su password</label>
		  <input type="password" name="password2" placeholder="Escriba de nuevo su password" required class="form-control" />
		  <span class="text-danger"><?php if (isset($password2_error)) echo $password2_error; ?></span>
		</div>

		<div class="form-group">
		  <input type="submit" name="registrar" value="Registrar" class="btn btn-primary" />
		</div>
	   </fieldset>
	</form>

        <span class="text-success"><?php if (isset($exito)) { echo $exito; } ?></span>
	<span class="text-danger"><?php if (isset($msgerror)) { echo $msgerror; } ?></span>
     </div>
   </div>
   <div class="row">
     <div class="col-md-4 col-md-offset-4 text-center">
	Ya est&aacute; registrado? <a href="login.php">Ingrese aqu&iacute;</a>
     </div>
   </div>
</div>
<script src="js/jquery-1.10.2.js"></script>
</body>
</html>
