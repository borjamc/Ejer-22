<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar equipo insertado</title>
  </head>
  <body>
    <?php
      if (empty($_POST["nombre"])==false && empty($_POST["ciudad"])==false && empty($_POST["conferencia"])==false && empty($_POST["division"])==false) {
        //incluimos base de datos.
        include 'dbnba.php';
        $equipo=new dbnba();

        //utilizamos la funcion de actualizar usuario.
        $actualizar=$equipo->ActualizarEquipo($_POST["nombre"], $_POST["ciudad"], $_POST["conferencia"], $_POST["division"]);

        //Devolver usuario actualizado
        if ($actualizar==true) {
          ?>
          <table border="1px">
            <thead>
             <tr>
               <th>Nombre</th>
               <th>Ciudad</th>
               <th>Conferencia</th>
               <th>Division</th>
             </tr>
            </thead>


          <?php

          $tablalista=$equipo->ListaEquipos();
          foreach ($tablalista as $fila) {
              echo "<tr><td>" .$fila["Nombre"] ."</td><td>" .$fila["Ciudad"] ."</td><td>" .$fila["Conferencia"] ."</td><td>" .$fila["Division"] ."</td></tr>";
          }


         ?>

         </table>
         <?php
          }


            //Enlace para volver a actualizar
            echo "<br>";
            echo "<a href='actualizar.php?nombre=".$fila["Nombre"]."&ciudad=".$fila["Ciudad"]."&conferencia=".$fila["Conferencia"]."&division=".$fila["Division"]."'>Actualizar registro.</a>";

            //Enlace borrar registro.
            echo "<br>";
            echo "<a href='listaequipos.php'>Borrar registro.</a>";
        }else {
          echo "Error en la actualizacion";
        }
     ?>
  </body>
</html>
