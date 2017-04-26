<?php
include "./lib/usuario.php";
include "./lib/seguridad.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fichero de control de seguridad</title>
  </head>
  <body>
    <?php
    //Control de las acciones a realizar
    if(isset($_POST["accion"])){
      //GEneramos el nuevo objeto
      $user=new Usuario();
      $seguridad=new Seguridad();
      //Registro de usuario
      if($_POST["accion"]=="registro"){

        if($_POST["contrasenya"]==$_POST["contrasenya2"]){
          $usurioReg=$user->insertarUsuario($_POST["nombre"],$_POST["apellidos"],
                                 $_POST["usuario"],$_POST["contrasenya"]);
          if($usurioReg!=null)
          {
            echo "<h2>Usuario registrado correctamente</h2></br>";
            echo "<label>Nombre</label>";
            echo "<input type='text' value=".$usurioReg["nombre"]." readonly>";
            echo "<label>Apellidos</label>";
            echo "<input type='text' value=".$usurioReg["apellidos"]." readonly>";
            echo "<label>Usuario</label>";
            echo "<input type='text' value=".$usurioReg["usuario"]." readonly>";
            echo "</br><center><a href=login.php>Ir al login</a></center>";
          }else{
            //Usuario no insertado
            echo "<h2>El usuario no ha sido insertado. Revisa los datos</h2></br>";
            echo "<a href=registro.php>Volver al formulario de registro</a>";
          }
        }else{
          //Contraseñas diferentes
          echo "<h2>Las contraseñas no son iguales</h2></br>";
          echo "<a href=registro.php>Volver al formulario de registro</a>";
        }
      }
      //Login de usuario
      elseif ($_POST["accion"]=="login") {
        $usurioReg=$user->buscarUsuario($_POST["usuario"]);
        if($usurioReg!=null)
        {
          //Comparamos los passwords
          if($usurioReg["contrasenya"]==sha1($_POST["contrasenya2"])){
            echo "<h2>Usuario encontrado</h2></br>";
            $seguridad->addUsuario($usurioReg["usuario"]);
          }else{
            echo "<h2>Las contraseñas no coinciden</h2></br>";
            echo "<a href=login.php>Volver al formulario de login</a>";
          }
        }else{
          echo "<h2>Usuario no encontrado</h2></br>";
          echo "<a href=login.php>Volver al formulario de login</a>";
        }
      }
      //LogOut
      elseif ($_POST["accion"]=="logout") {
        $seguridad->logOut();
        echo "<h2>LogOut</h2></br>";
        echo "<a href=login.php>Volver al formulario de login</a>";
      }
    }
    ?>
  </body>
</html>
