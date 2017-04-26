<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Temporada 99/00</title>
  </head>
  <body>
    <table>
      <tr>
        <td><a href="index.php">Inicio</a></td>
        <td><a href="">Conferencia Oeste</a></td>
        <td><a href="confeste.php">Conferencia Este</a></td>
      </tr>
    </table>
    <table border="1">
      <tr>
        <td>
    <?php

    include "dbNBA.php";

    $confeste=new dbNBA();


    $resultado=$confeste->mostrarTemporada();
    while ($fila=$resultado->fetch_assoc()) {
      echo "Los puntos del equipo local " . $fila["equipo_local"] . " son: " . $fila["puntos_local"] . "<br>";
      echo "Los puntos del equipo visitante " . $fila["equipo_visitante"] . " son: " . $fila["puntos_visitante"] . "<br><br>";
    }




     ?>
   </table>
      </tr>
        </td>
  </body>
</html>
