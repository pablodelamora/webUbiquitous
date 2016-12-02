<?php
  //incluimos la configuracion a la base de datos
include_once("config.php");

if(isset($_POST['update']))
{
  $id = $_POST['id'];
  $tag = $_POST['tag'];
  $placas = $_POST['placas'];
  $p_entrada = $_POST['punto_entrada'];
  $tipo = $_POST['tipo'];
  $duracion = $_POST['duracion'];
  $p_salida = $_POST['punto_salida'];

  print $id . $tag . $placas . $p_entrada . $tipo . $duracion .$p_salida;
  //validamos los campos vacios
  if(empty($tag) || empty($placas) || empty($p_entrada) || empty($tipo)|| empty($duracion)|| empty($p_salida))
  {
     if(empty($tag)){
       echo "<font color='red'>Campo Vacio.</font><br>";
     }

     if(empty($placas)){
       echo "<font color='red'>Campo Vacio.</font><br>";
     }

     if(empty($p_entrada)){
       echo "<font color='red'>Campo Vacio.</font><br>";
     }
     if(empty($tipo)){
       echo "<font color='red'>Campo Vacio.</font><br>";
     }
     if(empty($duracion)){
       echo "<font color='red'>Campo Vacio.</font><br>";
     }
     if(empty($p_salida)){
       echo "<font color='red'Campo Vacio.</font><br>";
     }
  }
  else
  {
     //actualizamos la tabla
     $result = mysqli_query($mysqli, "UPDATE Vehiculos SET tag='$tag',placas='$placas',punto_entrada='$p_entrada',tipo='$tipo',duracion='$duracion',punto_salida='$p_salida' WHERE id=$id");
     //redireccionamos a la vista principal
     header("Location:index.php");
  }
}
?>

<?php
  //obtenemos el id de la url
  $id = $_GET['id'];

  //seleccionamos  los datos asociados en este id
  $result = mysqli_query($mysqli, "SELECT * FROM Vehiculos WHERE id=$id");

  while($res = mysqli_fetch_array($result))
  {
     $tag = $res['tag'];
     $placas = $res['placas'];
     $p_entrada = $res['punto_entrada'];
     $tipo = $res['tipo'];
     $duracion = $res['duracion'];
     $p_salida = $res['punto_salida'];
  }
?>

<html>
  <head>
    <title>Modificar registros</title>
  </head>

  <body>
    <a href="index.php">Inicio</a>
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
          <td><input type="text" name="punto_entrada" value=<?php echo $p_entrada;?>></td>
        </tr>
        <tr>
          <td>Tipo de auto</td>
          <td><input type="text" name="tipo" value=<?php echo $tipo;?>></td>
        </tr>
        <tr>
          <td>Duracion de trayecto en kilometros</td>
          <td><input type="text" name="duracion" value=<?php echo $duracion;?>></td>
        </tr>
        <tr>
          <td>Punto de salida</td>
          <td><input type="text" name="punto_salida" value=<?php echo $p_salida;?>></td>
        </tr>
        <tr>
          <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
          <td><input type="submit" name="update" value="update"></td>
          
        </tr>
      </table>
    </form>
  </body>
</html>
