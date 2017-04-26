<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Resumen</title>
  </head>
  <body>
    <table>
      <tr>
        <td><a href="confeste.php">Conferencia Este</a></td>
        <td><a href="">Conferencia Oeste</a></td>
        <td><a href="temporada.php">Temporada 99/00</a></td>
      </tr>
    </table>
    <table border="1">
      <tr>
        <td>
    <?php

    include "dbNBA.php";

    $equipos=new dbNBA();


    $resultado=$equipos->mostrarEquipos();
    while ($fila=$resultado->fetch_assoc()) {
      echo "El nombre del equipo es: " . $fila["nombre"] . "<br>";
      echo "Su ciudad es: " . $fila["ciudad"] . "<br>"; 
      echo "Estan en la conferencia: " . $fila["conferencia"] . "<br>";
      echo "Estan en la division: " . $fila["division"] . "<br><br>";
    }



     ?>
        </td>
      </tr>
   </table>
  </body>
</html>
