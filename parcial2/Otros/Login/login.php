<?php
session_start();

if(isset($_SESSION['usr_id'])!="") {
//	header("Location: index.php");
}



include_once 'config.php';


// Validacion
if (isset($_POST['login'])) {
  $email = mysqli_real_escape_string($mysqli, $_POST['email']);
  $password = mysqli_real_escape_string($mysqli, $_POST['password']);
  $result = mysqli_query($mysqli, "SELECT * FROM Usuarios WHERE email = '" . $email. "' and password = '" . md5($password) . "'");


   if ($row = mysqli_fetch_array($result)) {
      $_SESSION['usr_id'] = $row['id'];
      $_SESSION['usr_name'] = $row['name'];
  //    header("Location: index.php");
   } else {
      $errormsg = "Password o email incorrectos!";
   }
}
?>
<!-- IInicio -->
<!doctype html>
 <html>
  <head>
    <title>Logint</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
<body>

<nav class="navbar navbar-default" role="navigation">
   <div class="container-fluid">
     <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
	   <span class="sr-only">Menu</span>
	   <span class="icon-bar"></span>
	   <span class="icon-bar"></span>
	   <span class="icon-bar"></span>
	</button>
     </div>
     <div class="collapse navbar-collapse" id="navbar1">
	<ul class="nav navbar-nav navbar-right">
	    <li class="active"><a href="login.php">Login</a></li>
	    <li><a href="registrar.php">Registrar</a></li>
	</ul>
     </div>
   </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
  	 <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
  	     <fieldset>
  		<legend>Login</legend>
  		   <div class="form-group">
  			<label for="name">Email</label>
  			<input type="text" name="email" placeholder="Escriba su email" required class="form-control" />
  		   </div>
    		   <div class="form-group">
  			<label for="name">Password</label>
  			<input type="password" name="password" placeholder="Escriba su Password" required class="form-control" />
  		  </div>

  		  <div class="form-group">
  			<input type="submit" name="login" value="Login" class="btn btn-primary" />
  		  </div>
  	     </fieldset>
           </form>
  	 <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
    </div>
  </div>
  <div class="row">
     <div class="col-md-4 col-md-offset-4 text-center">
          Usuario nuevo? <a href="registrar.php">Reg&iacute;strese aqu&iacute;</a>
  		</div>
  	</div>
</div>

<script src="js/jquery-1.10.2.js"></script>
</body>
</html>
