<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Equipo Insertado</title>
  </head>
  <body>
    <?php
    //Borja Molina
    include "dbUsuarios.php";

    $equipo=new db();
    $equipo->insertarEquipo($_POST["nombre"],$_POST["ciudad"],$_POST["conferencia"],$_POST["division"]);

    if($equipo==true){

      $resultado=$equipo->devolverNuevaFila($_POST["nombre"]);
      $fila=$resultado->fetch_assoc();
      echo "El nombre del nuevo equipo es: ".$fila["nombre"]."<br>";
      echo "La ciudad del nuevo equipo es: ".$fila["ciudad"]."<br>";
      echo "La conferencia del nuevo equipo es: ".$fila["conferencia"]."<br>";
      echo "La division del nuevo equipo es: ".$fila["division"]."<br>";
      echo "<a href='actualizar.php?Nombre=".$fila["nombre"]."&Ciudad=".$fila["ciudad"]."&Conferencia=".$fila["conferencia"]."&Division=".$fila["division"]."'>Actualizar Registro</a></br>";
      echo "<a href='borrar.php?Nombre=".$fila["nombre"]."'>Borrar Registro</a>";
    }else {
      echo "Error en la insercion";
    }
     ?>
  </body>
</html>
