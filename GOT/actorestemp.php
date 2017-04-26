<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Resumen</title>
  </head>
  <body>
    <table>
      <tr>
        <td><a href="actores.php">Actores</a></td>
        <td><a href="index.php">Inicio</a></td>
      </tr>
    </table>
    <table border="1">
      <tr>
        <td>
    <?php

    include "gotdb.php";

    $thrones=new db();


    $resultado=$thrones->actorestemp();
    while ($fila=$resultado->fetch_assoc()) {
      echo "Actores: " . $fila["name"];
      echo "<br>";
      echo "Temporada: " . $fila["season"];
      echo "<br>";
      echo "<br>";
    }




     ?>
   </table>
      </tr>
        </td>
  </body>
</html>
