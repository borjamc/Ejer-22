<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insertar usuarios</title>
  </head>
  <body>
    <?php
    include "usuariosdb.php";

    $usuarios=new usuariosdb();

    $usuarios->insertarUsuario($_POST["Ximo"],$_POST["Gil"],$_POST[45]);

     ?>
  </body>
</html>
