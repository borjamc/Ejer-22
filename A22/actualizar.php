<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario de actualizacion</title>
  </head>
  <body>
    <form action="actualizardb.php" method="post">
      Nombre:<br>
      <input type="text" name="nombre" value=<?=$_GET["Nombre"]?>><br>
      Ciudad:<br>
      <input type="text" name="ciudad" value=<?=$_GET["Ciudad"]?>><br>
      Conferencia:<br>
      <input type="text" name="conferencia" value=<?=$_GET["Conferencia"]?>><br>
      Division:<br>
      <input type="text" name="division" value=<?=$_GET["Division"]?>><br>
      <br>
      <input type="submit" name="" value="ENVIAR">
    </form>
  </body>
</html>
