<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar Usuario</title>
  </head>
  <body>
  <?php
  //Incluir la clase de conexion
  include "dbUsuarios.php";
  $nba=new db();
  //insertar un usuario
  $resultadoActualizar=$nba->actualizarEquipo($_POST["nombre"],$_POST["ciudad"],$_POST["conferencia"],$_POST["division"]);
  //Devolver el usuario actualizado
  if($resultadoActualizar==true){
    $resultado=$nba->devolverNuevaFila($_POST["nombre"]);
    $fila=$resultado->fetch_assoc();
    echo "Nombre: ".$fila["nombre"]."</br>";
    echo "Ciudad: ".$fila["ciudad"]."</br>";
    echo "Conferencia: ".$fila["conferencia"]."</br>";
    echo "Division: ".$fila["division"]."</br>";
    echo "<a href='actualizar.php?Nombre=".$fila["nombre"]."&Ciudad=".$fila["ciudad"]."&Conferencia=".$fila["conferencia"]."&Division=".$fila["division"]."'>Actualizar Registro</a></br>";
  }else{
    echo "Error en la actualizacion";
  }
  ?>
  </body>
</html>
