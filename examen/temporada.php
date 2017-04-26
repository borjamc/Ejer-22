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

    //Incluimos la pagina de dbNBA para poder recojer los datos de la base de datos

    include "dbNBA.php";

    //Creamos un nuevo atributo

    $confeste=new dbNBA();

    

    $resultado=$confeste->mostrarTemporada($temporada);
    while ($fila=$resultado->fetch_row()) {
      echo "Los puntos del equipo local " . $fila["equipo_local"] . " son: " . $fila["puntos_local"] . "<br>";
      echo "Los puntos del equipo visitante " . $fila["equipo_visitante"] . " son: " . $fila["puntos_visitante"] . "<br><br>";
      echo $temporada->mostrarTemporada();
    }




     ?>
   </table>
      </tr>
        </td>
  </body>
</html>
