<?php
  //incluimos la configuracion a la base de datos
include_once("config.php");

if(isset($_POST['update']))
{
  $id = $_POST['id'];
  $tag = $_POST['tag'];
  $placas = $_POST['placas'];
  $ingreso = $_POST['ingreso'];

  print $id . $tag . $placas . $ingreso;


  if(empty($tag) || empty($placas) || empty($ingreso))
  {
     if(empty($tag)){
       echo "<font color='red'>El campo tag esta vacio.</font><br>";
     }

     if(empty($placas)){
       echo "<font color='red'>El campo placas esta vacio.</font><br>";
     }

     if(empty($ingreso)){
       echo "<font color='red'>El campo ingreso esta vacio.</font><br>";
     }
  }
  else
  {
    //aqui es donde se valida
     $result = mysqli_query($mysqli, "UPDATE Vehiculos SET tag='$tag',placas='$placas',punto_entrada='$ingreso' WHERE id=$id");
     //redireccionamos a la vista principal
     header("Location:indice.php");
  }
}
?>

<?php
  $id = $_GET['id'];

  //seleccionamos  los datos asociados en este id
  $result = mysqli_query($mysqli, "SELECT * FROM Vehiculos WHERE id=$id");

  while($res = mysqli_fetch_array($result))
  {
     $tag = $res['tag'];
     $placas = $res['placas'];
     $ingreso = $res['punto_entrada'];
  }
?>

<html>
  <head>
    <title>Modificar registros</title>
  </head>


  <body>
    <a href="indice.php">Inicio</a>
    <br><br>

    <form name="form1" method="post" action="editar.php">
      <table>
        <tr>
          <td>Tag</td>
          <td><input type="text" name="tag" value=<?php echo $tag;?>></td>
        </tr>
        <tr>
          <td>Placas</td>
          <td><input type="text" name="placas" value=<?php echo $placas;?>></td>
        </tr>
        <tr>
          <td>Lugar de ingreso</td>
          <td><input type="text" name="ingreso" value=<?php echo $ingreso;?>></td>
        </tr>
        <tr>
          <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>

          <td><input type="submit" name="update" value="update"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
