<!doctype html>
<html>
  <head>
    <title>Numeros</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </head>

  <body>
    <form method="POST" action="funciones.php" class="form-inline">
      <label for="numero1"n&uacute;mero 1</label>
      <input type="text" name="num1" class="form-control" id="numero1"

      <label for="numero2"n&uacute;mero 2</label>
      <input type="text" name="num2" class="form-control" id="numero2"

      <label for="operador">Operador</label>
      <select class="form-control" name="operator">
        <option>Suma</option>
        <option>Resta</option>
        <option>Multiplicacion</option>
        <option>Division</option>
        <option>Potencia</option>
      </select>
      <br /<br /<br />
      <input type="submit" value="Enviar" class="btn btn-success" name="btn1">
    </form>
  </body>

</html>

<?php
if(isset($_POST['btn1']))
{
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $
}
?>
