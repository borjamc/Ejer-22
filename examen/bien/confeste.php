<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Conferencia Este</title>
  </head>
  <body>
    <table>
      <tr>
        <td><a href="index.php">Inicio</a></td>
        <td><a href="">Conferencia Oeste</a></td>
        <td><a href="temporada.php">Temporada 99/00</a></td>
      </tr>
    </table>
    <table border="1">
      <tr>
        <td>
    <?php

    include "dbNBA.php";

    $confeste=new dbNBA();


    $resultado=$confeste->mostrarConfEste();
    while ($fila=$resultado->fetch_assoc()) {
      echo "Nombre del equipo de la conferencia Este: " . $fila["nombre"] . "<br>";
      echo "Ciudad del equipo de la conferencia Este: " . $fila["ciudad"] . "<br>";
      echo "Division del equipos de la conferencia Este: " . $fila["division"] . "<br><br>";
    }




     ?>
        </tr>
      </td>
   </table>
  </body>
</html>
