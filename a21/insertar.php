<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insertar Usuario</title>
  </head>
  <body>
    <?php
    include "dbUsuarios.php";

    $equipo=new db();
    $equipo->insertarEquipo($_POST["nombre"],$_POST["ciudad"],$_POST["conferencia"],$_POST["division"]);

    $resultado=$equipo->devolverNuevaFila($_POST["nombre"]);
    $fila=$resultado->fetch_assoc();
    echo "El nombre del nuevo equipo es: ".$fila["nombre"]."<br>";
    echo "La ciudad del nuevo equipo es: ".$fila["ciudad"]."<br>";
    echo "La conferencia del nuevo equipo es: ".$fila["conferencia"]."<br>";
    echo "La division del nuevo equipo es: ".$fila["division"]."<br>";
     ?>
  </body>
</html>
