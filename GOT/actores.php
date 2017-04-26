<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Resumen</title>
  </head>
  <body>
    <table>
      <tr>
          <td><a href="index.php">Resumen</a></td>
        <td><a href="actorestemp.php">Actores por temporada</a></td>
      </tr>
    </table>
    <table border="1">
      <tr>
        <td>
    <?php

    include "gotdb.php";

    $thrones=new db();


    $resultado=$thrones->actores();
    while ($fila=$resultado->fetch_assoc()) {
      echo "El nombre en la serie es: " . $fila["serie_name"];
      echo "<br>";
      echo "Nombre de los actores: " . $fila["name"];
      echo "<br>";
      echo "<br>";
    }



     ?>
   </table>
      </tr>
        </td>
  </body>
</html>
