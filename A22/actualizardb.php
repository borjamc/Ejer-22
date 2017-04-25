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

  $lista=$nba->devolverNuevaFila();
  ?>

<table border="1">
<?php
  while($fila=$lista->fetch_assoc()){
    ?>

        <td>
            <tr>
          <?php

    echo "Nombre: ".$fila["Nombre"]."</br>";
    ?>
  </tr>
        <tr>
    <?php
    echo "Procedencia: ".$fila["Procedencia"]."</br>";
    ?>
  <tr>

</td>

<?php
  }
  ?>
</table>
  </body>
</html>
