<!doctype html>
<html>
  <head>
   <title>Calcu</title>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>

    <body>
     <form method="POST" action="funciones.php" class="form-inline">
      <label for="numero1">Num 1 </label>
      <input type="text"  name="num1" class="form-control" id="numero1">

      <label for="numero2">Num 2: </label>
      <input type="text"  name="num1" class="form-control" id="numero2">

      <label for="operador">Operadorr</label>
      <select class="form-control" name="operador">

       <option>Sumar</option>
       <option>Restar</optoon>
       <option>Multiplicar</option>
       <option>Dividir</option>
       <option>Potencia</option>

      </select>
      <br><br><br>

      <input type="submit" value="Enviar" class="btn btn-success" name="btnl"></input>
     </form>

    </body>

</html>
