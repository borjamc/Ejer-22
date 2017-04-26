<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mostrar resultado</title>
  </head>
  <body>
    <?php

    include "db.php";

    $usuario=new db();


    $resultado=$usuario->devolverUsuCont();
    $fila=$resultado->fetch_assoc();

    if ($_POST["usuario"]==$fila["Usuarios"]) {
      echo "El usuario es correcto";
    }


     ?>
  </body>
</html>
