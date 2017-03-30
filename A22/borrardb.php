<html>
  <head>
    <meta charset="utf-8">
    <title>Borrar Usuario</title>
  </head>
  <body>
  <?php
  //Incluir la clase de conexion
  include "dbUsuarios.php";
  $user=new db();

  $user->borrarEquipo($_POST["nombre"]);
  if($user==true){
    echo "Equipo ".$_POST["nombre"]." borrado";
  }else{
    echo "Error al borrar";
  }
  ?>
  </body>
</html>
